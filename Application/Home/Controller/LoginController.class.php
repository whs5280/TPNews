<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class LoginController extends Controller {

    public function login(){
        if(IS_POST){
            $user = I('user');
            $pwd = I('pwd');
            $model = new Model('manager');
            $u = $model->where(array('user'=> $user))->find();
            if(empty($u) || $u['psd'] != $pwd){
                $this->error('账号密码错误',U('login'),3 );
            }else{
                //$this->success( '登录成功', U('Index/index'),1 );
                $this->redirect('Index/index');
                //写入session
                session('user.name',$u['user']);
            }

        }
        $this->display();
    }

    public function logout(){
        session('admin',null);
        $this->success('成功退出',U('login'),3 );
    }
}