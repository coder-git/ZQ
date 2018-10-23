<?php
namespace app\admin\model;

use think\Model;

/**
 * 部门
 */
class Department extends Model
{
	
	public function StaffData()
	{
		return $this->hasMany('StaffData','id','d_id');
	}

	public function Post()
	{
		return $this->hasMany('Post','dep_id','id');
	}

	public function showDeps()
	{
		$res = Department::with('Post')->select();

		return $res->toArray();
	}
}