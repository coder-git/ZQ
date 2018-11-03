<?php
namespace app\admin\model;

use think\Model;

class StaffData extends Model
{

	public function department(){
		return $this->belongsTo('department','d_id','id');
	}


	public function show()
	{
		// $staffs = StaffData::select();
		$datas = StaffData::with('department')->order("staff_id desc")->select();
		return $datas;
	}

	public function finds($uid)
	{

		$res = StaffData::with('department')->where('userid',$uid)->find();
		return $res;
		// $s_data = StaffData::with('department')->where('userid',$uid)->find();
		// return ($s_data);
	}


}