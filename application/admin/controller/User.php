<?php
namespace app\admin\controller;

use app\admin\controller\Base;
use app\think\Db;


/**
 * 用户
 */
class User extends Base
{
	protected function _initialize(){
		parent::login_ini();
	}

	public function index()
	{
	    // if ($res = $staffdata->where('userid',session('user.userid'))->find()) {
	    // 	$this->assign('data',$res);
	    // }

	    $staffdata = Model('staffData');
		$res = $staffdata->finds(session('user.userid'));


		$this->assign('data',$res->toArray());

		return $this->fetch();
	}

	public function edit()
	{
		return $this->fetch();
	}

	public function show()
	{
		$staffdata = Model('staffData');
		$res = $staffdata->show();
		return $res;
	}






}