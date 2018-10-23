<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Order;
use think\Db;
use think\Cache;

class Bigdata extends Controller
{
	public function index()
	{
		// return $this->display('1232131');
		return $this->fetch();
	}

	public function bodys()
	{
		return $this->fetch();
	}


	/**
	 * 获取历史内容	
	 * @param  string  $tname    [表名]
	 * @param  integer $page_num [每页展示数]
	 * @return [type]            [description]
	 */
	public function getdata()
	{
		$this->new_cache();


		if (Cache::get('order')) {

			$top_price_id = $this->top_data(Cache::get('order'), 'price');
			$page_c = $this->request->param();
			// halt($page_c);
			$page_list = $this->imitate_page(Cache::get('order'), $page_c['page'], $page_c['limit'], count(Cache::get('order')));

			$list = array('code' => 0, 'data'=> $page_list, 'top_price_id' => $top_price_id, 'count' => count(Cache::get('order')));

		} else {

			$list = array('code' => 1, 'data'=> $page_list, 'top_price_id' => 0);
		}

		echo  json_encode($list);
	}

/**
 * 排行榜数据
 * @return json Rank名
 */
   	public function top_datas($rank = 20)
   	{
   		$data = Cache::get('order');
   		$condition  = 'price';


   		if ($data) {

   			foreach ($data as $key => $value) {
   				$price[$key] = $value[$condition];
   			}


   			array_multisort($price, SORT_DESC, $data);
   			$res_data = array_slice($data, 0 ,$rank , true);

   			$list = array('code' => 0, 'data'=> $res_data);



   		} else {
   			$this->new_cache();
   			$this->top_datas();
   		}


   		echo json_encode($list);

   	}




	/**
	 * 获取最高价格 榜首
	 * 
	 */
	public function top_data($data, $condition = 'price')
	{
		foreach ($data as $key => $value) {
			$price[$key] = $value[$condition];
		}	
		if ($condition == 'starttime') {
			array_multisort($price, SORT_ASC, $data);//根据$condition 对$data 进行排序
		} else {
			array_multisort($price, SORT_DESC, $data);//根据$condition 对$data 进行排序
		}
			$top = array_shift($data);
			return $top['id'];

			// array_multisort($otime, SORT_DESC, $sort_arr);dump($sort_arr);dump($otime);
		}


	//今日数据
	public function today_data()
	{
		 // dump($this->request->param('page'));
		 $page_c = $this->request->param();

		$this->new_cache();
		$data = Cache::get('order');
		$now_day  = date('Y-m-d');
		$t_data = array();

		foreach ($data as $key => $order) {//筛选出当日数据

			if(substr($order['starttime'], 0, 10) == $now_day){
				$t_data[] = $order;
			}
		}

		$page_list = $this->imitate_page($t_data, $page_c['page'], $page_c['limit'], count($t_data));

		if (!empty($page_list)) {

			$top_time_id = $this->top_data($t_data, 'starttime');
			$top_price_id = $this->top_data($t_data, 'price');

			$list = array(
				'code' => 0, 
				'msg' => '有数据', 
				'count' => count($t_data), 
				'data'=> $page_list, 
				// 'top_price_id' => $top_price_id, 
				// 'top_time_id' => $top_time_id
			);
		} else {
			$list = array('code' => 1,  'msg' => '暂无数据', 'count' => 0, 'data'=> $page_list, 'top_price' => 0, 'top_time_id' => 0);
		}

		echo json_encode($list);
		

	}



/**
 * 模拟分页数据
 * @return array 每页数据
 * @param int $page 当前页码
 * @param [int] $[limit] [<每页数量>]
 * @param arr $data 数据
 * @param int $count 总条数
 */
	public function imitate_page($data, $page, $limit, $count){

		if ($page > 1) {
			if($page * $limit < $count) {
				$page_1 = array_slice($data, ($page - 1)*$limit, $limit, true);
			} else {
				$data_num = abs($page * $limit - $count);
				$page_1 = array_slice($data, ($page - 1)*$limit, $data_num, true);
			}
		} elseif ($page == 1) {

			if ($limit >$count) {

				$page_1 = array_slice($data, ($page - 1)*$limit, $count, true);

			} else {

				$page_1 = array_slice($data, ($page - 1)*$limit, $limit, true);

			}

			
		}


		return $page_1;


	}

	/**
	 * 生成首页缓存
	 * @param  string $tname 表名
	 * @return Cache::get('order')    缓存
	 */
	public function new_cache()
	{


		if (Cache::has('order')) {
			$datas = Cache::get('order');
			$newdata = Db::query('select id from zq_order order by starttime desc limit 1');
			if ($datas[0]['id'] != $newdata[0]['id']) {
				$this->index_cache();
			}

		} else {

			$this->index_cache();
		}


	}



	public function index_cache($tname = 'order')
	{
		if (Cache::has('order')) {
			Cache::rm('order');
		}

		cache_init();
		$data = Db::name($tname)
		->alias('a')
		->field('a.*, p.name, p.deparment')
		->join('zq_deparment p', 'a.place_id = p.id')
	    	// ->fetchSql(true)
		->order('starttime desc')
		->select();

		Cache::set('order',$data,0);
	}







	public function get_staff($tname = 'staff')
	{
		$staff_data = Db::name($tname)->select();
		dump($staff_data);
	}



	public function get_deparment($tname = 'deparment')
	{

			// if (Cache::get('deparment')) {
			// 	dump(Cache::get('deparment'));
			// }

		if (Cache::has($tname)) {
			$deparment_data = Cache::get($tname);

		} else {

			$deparment_data = Db::name($tname)->select();
			Cache::set($tname, $deparment_data, 0);
		}

		// $this->assign('deparment', $deparment_data);
		return $deparment_data;

	}




}
