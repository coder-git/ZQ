<?php
namespace app\Index\model;
use think\Cache;
use think\Model;
use think\Db;
// use think\Paginator;

class Order extends Model
{

	public function Staff()
	{
		return $this->belongTo('Staff','staff_id','id');
	}





	public function allDatas()
	{
		return  $this::select();
	}

	public function page_datas($page_c = '')
	{
		// if ($page_c) {
			$order_datas = Order::page($page_c['page'], $page_c['limit'])->order('starttime desc')->select();
			$order_datas->counts = Order::count();
			// halt($order_datas);
			// $order_datas = Order::all(function ($query){
			// 	$query->where('id', '>',0)->page($page_c['page'], $page_c['limit'])->order('starttime desc');
			// });

		// }

		// $places = Cache::get('place') ?: $this->get_place();
		
		return $order_datas;
		// halt($places);
	}

}