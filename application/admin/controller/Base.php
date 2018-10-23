<?php 
namespace app\admin\controller;

use think\Controller;
use think\Db;

/**
 * 基础
 */
class Base extends Controller
{
    

    protected function login_ini(){
        // parent::_initialize();
        if (!$this->is_login()) {
            $this->error('请重新登录','login/login2');
            return ;
        }

    }


    protected function is_login(){
        if (session('?user')) {

            $user_arr = session('user');
            $res = $this->checks($user_arr['uname'], $user_arr['tpass']);
            if ($res) {
                return true;
            }
            return false;

        } 
        return false;
    }

    public function check_login(){
        $user_c = input('param.');
        $user_c = array_map("trim",$user_c);


        $res = $this->checks($user_c['username'], $user_c['password']);
        if ($res) {
            session('user',$res);
            $this->success('登录成功','index/main');
        }

        $this->error('账号或密码错误！');
    }



    protected function checks($uname,$upass){
        if ($uname && $upass) {
            $user = Db::name('user')->where('uname',$uname)->find();
            $pass_res = password_verify($upass,$user['upass']);
            if ($pass_res) {
                $user['tpass'] = $upass;
                return $user;
            } else {
                return false;
            }
        }
        return false;
    }


    public function logout(){
        session('user',null);


        $this->success('已退出','login/login2');
    }

}

