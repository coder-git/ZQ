<?php 
namespace app\Index\model;
use think\Model;

/**
* place deparment model
*/
class Department extends Model
{
	public function Staff()
	{	
		return $this->hasMany('Staff','department_id','id');
	}
	public function Order()
	{
		return $this->hasManyThrough('Order','Staff','place_id','id');
	}

	public function get_datas()
	{
		return Department::select();
	}
}