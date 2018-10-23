<?php 
namespace app\admin\controller;

use think\Controller;

/**
* login
*/
class Login extends Controller
{
	
	public function index()
	{
		return $this->fetch('login/login2');
	}

	public function login2()
	{
		return $this->fetch();
	}

	public function register()
	{
		return $this->fetch();
	}
}