<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Cache;
use app\index\model\Order;

/**
* 	contents 
*/
class Contents extends Controller
{


	protected function _initialize()
	{

//place form data as  cache file
		if (cache('place') == false) {

			$place_cache_option = [
				'type' => 'File',
				'expire' => 0,
				'prefix' => '',
				'path' => APP_PATH . 'index/runtime/formcache1/',

			];

			cache($place_cache_option);
			$place_data = \think\Db::name('department')->select();
			cache('place',$place_data);
		}

	}

	public function index()
	{


		$order =  new Order;
		$order_his = $order->allDatas();

		$this->assign('orders', $order_his->toArray());
		$this->assign('places', Cache::get('place'));
		return $this->fetch();
	}



	public function staff_datas()
	{
		$staff = new \app\index\model\Staff;
		$staff_datas = $staff->getdatas();

				// halt();
		foreach ($staff_datas as $key => $value) {
			echo $value['name'];
		}

	}


	public function staff_test()
	{
		$staff = new \app\index\model\Staff;
		$staff_data = $staff::select();
		halt($staff_data->count());
	}


	public function test_data()
	{
		$department = new \app\index\Model\Department;
		$de_datas =  $department->get_datas();
		halt($de_datas);
	}




	//page orders content
	public function page_contents()
	{

		$param_val = $this->request->param();

		$order =  new Order;
		$page_content =  $order->page_datas($param_val);
		$counts = $page_content->counts;
		$newarr = array();
		// return  (json($page_content));
		// return ($page_content);
		if ($page_content) {
			
		    return ['code' =>0 ,'msg' => '有数据','count' => $counts,'data' => $page_content];
		} else {
			return ['code' =>1, 'msg' => '无数据，请核实筛选选项','data' => ''];
		}

		

	}
	public function lists()
	{
		$order =  new Order;
		$order->get_place();
		return $this->fetch();
	}

}