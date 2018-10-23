<?php
namespace app\Index\model;

use think\Model;

class Staff extends Model
{
	protected $name = 'staff';


	public function webs()
	{
		return $this->hasMany('Web','id');
	}

	// public function Order()
	// {
	// 	return $this->hasMany('Order','staff_id','id');
	// }

	public function history_data()
	{
		$sarrs = $this->select();

		return $sarrs->Order->num;
	}

	public function getdatas($page_c = '')
	{
		$sdatas = $this->select();
		$withdata = $sdatas->relation('webs')->select();
		halt($withdata);
		$staff_m = Staff::page($page_c['page'], $page_c['limit'])->order('duty_level desc')->select();
		halt($staff_m->getData('staff_name'));
		// return $staff_m->getData('staff_name');

	}



}