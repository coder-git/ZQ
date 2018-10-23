<?php 
namespace app\index\model;
use think\Model;

/**
* 	Web   服务包
*/
class Web extends Model
{
	public function staff()
    {
    	return $this->belongsTo('Staff','person_id','staff_id');
    }

	public function getdatas($page_c = '')
	{
		$webobj =  Web::page($page_c['page'], $page_c['limit'])->order('create_time desc')->select();
		$webobj->counts = Web::count();
		return $webobj;
	}


}