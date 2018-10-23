<?php
namespace app\index\controller;

use think\Controller;


/**
 * 服务包
 */
class Orderweb extends Controller
{

	// public $order_config['type'] = array('standard' => '标准版','higher' => '高级版', 'professional' => '专业版');
	public $order_config = array(
		'types' => array('standard' => '标准版','higher' => '高级版', 'professional' => '专业版'),
		'controller' => 'orderweb'
	);

	public function index()
	{
		$this->assign('controller',$this->order_config['controller']);
		$this->assign('types', $this->order_config['types']);
		// halt(CONTROLLER_NAME);
		return $this->fetch('Contents/index');
	}
	

	public function add()
	{
		$this->assign('types', $this->order_config['types']);
		return view('Order/web_add');
	}



	public function add_order(){
		$order_data =input('param.');
		$order_data['data']['order_id'] = order_num($order_data['data']);//订单号

		// $order_type = substr($order_data['data']['type'],3,1);


		// switch ($order_type) {//订单类型
		// 	case 1:
		// 		$order_data['data']['type'] = '基础版';
		// 		break;
		// 	case 2:
		// 		$order_data['data']['type'] = '高级版';
		// 		break;
		// 	case 3:
		// 		$order_data['data']['type'] = '专业版';
		// 		break;
		// 	default:
		// 		$order_data['data']['type'] = '订单类型出错';
		// 		$result['status'] = 0;
		// 		$result['msg'] = '订单类型出错';
		// 		return $result;
		// 		break;
		// }


		// $result = Db::name('web')->insert($order_data['data']);
		$web = new \app\index\model\Web;

		if ($add_data = $web->create($order_data['data'])) {

			$result['status'] = 1;
			$result['msg'] = '公司"'.$add_data->company_name.'"添加成功！';
			return $result;
		} else {
			$result['status'] = 0;
			$result['msg'] = '添加失败';
			return $result;
		}

		return $result;
	}



	public function showpweb()
	{

		$param_c = input('param.');

		$web =  model('Web');
		$condition['person_id'] = ['gt',0];

		if(!empty($param_c['type'])){
			$condition['type'] = $param_c['type'];
		}

		$staff_conditionss = array('staff_id' => ['neq',0],'staff_name' => ['like','%a%']);

		$staff_condition = array();
		$staff_condition['staff_id'] = ['neq',0];
		$search_t = 0;//标记为查询结果
		if (isset($param_c['condition']) && !empty($param_c['condition'])) {
			foreach ($param_c['condition'] as $key => $value) {
				if ($value) {
					

					if ($key == 'staff_name') {
						$staff_condition['staff_name'] = ['like','%'.$value.'%'];
					} else {
						if ($key != 'type') {
							$condition[$key] = ['like','%'.$value.'%'];

						} else {
							$condition[$key] = $value;
						}
					}

					$search_t = 1;
				}

			}
		}

		$counts = $web->where($condition)->count();
		$webdatas = $web->with(['staff' => function($query) use($staff_condition){
			$query->where($staff_condition)->withField('staff_id,staff_name,department_name');
		}])
		->field('id,order_id,person_id,price,company_name,start_t,end_t,url,type')
		->where($condition)
		// ->where($staff_condition)
		->page($param_c['page'], $param_c['limit'])
		// ->fetchSql(true)
		->order('id desc')
		->select();



		$webs = $webdatas->toArray();


        foreach ($webs as $key => $web_o) {//数据处理合并

        	if (!empty($web_o['staff']) && isset($web_o['staff'])) {
        		$staffs = array_pop($web_o);
        		$web_o['staff_name'] = $staffs['staff_name'];
        		$web_o['department_name'] = $staffs['department_name'];
        		$web_res[$key] = $web_o;
        	}
        }


        if (isset($web_res) && !empty($web_res)) {
        	
        	if ($search_t) {
        		$counts = count($web_res);
        	}
        	return ['code' =>0 ,'msg' => '有数据','count' => $counts,'data' => $web_res];

        } else {
        	return ['code' =>1, 'msg' => '无数据，请核实筛选选项','data' => ''];
        }


    }
}