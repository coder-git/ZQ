<?php
namespace app\Index\controller;
use think\Controller;
use app\index\model\User as UserModel;

class User extends Controller
{
	public function index()
	{
		$users = new UserModel();

		return $users::all();

		// return $this->fetch();
	}
}