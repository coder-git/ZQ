<?php
namespace app\admin\controller;

use app\admin\controller\Base;

class Index extends Base
{

    // protected function _initialize(){
    //     parent::_initialize();
    // }

    public function index()
    {


        if ($this->is_login()) {
           $this->main();
        } else {
            $this->error('请重新登录','login/login2');
        }


    	$this->assign('name','thinkphp');
        // halt(__STATIC__);
        // halt(password_hash('admin',PASSWORD_DEFAULT));

        // return $this->display('12312321');
    }

    public function main()
    {
        parent::login_ini();

        return $this->fetch('index/index');
    }

    public function index_v1()
    {
        return $this->fetch();
    }

    public function replace_files()
    {
    	return $this->fetch('index/refile');
    }

    public function _empty()
    {
        return $this->error('暂无此操作!','user/index');
    }
}
