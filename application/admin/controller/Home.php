<?php
namespace app\admin\controller;

use think\Controller;

class Home extends Controller
{
    public function index()
    {
    	$this->assign('name','thinkphp');
        return $this->fetch('home/console');
        // return $this->display('12312321');
    }

}
