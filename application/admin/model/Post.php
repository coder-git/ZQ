<?php
namespace app\admin\model;


use think\Model;

/**
 * 职务模型
 */
class Post extends Model
{

	public function Department()
	{
		return $this->hasOne('Department','id','id');
	}
}