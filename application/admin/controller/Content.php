<?php
namespace app\admin\controller;

/**
*
* 
*/

class Content extends \think\Controller
{

	public function index()
	{
		return $this->fetch();
	}
}