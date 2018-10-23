<?php 
namespace app\index\controller;
use think\Controller;

/**
 * 空控制器
 */
class Error extends Controller
{
	

	public function index()
	{
		return view('暂无此功能!');
	}
}