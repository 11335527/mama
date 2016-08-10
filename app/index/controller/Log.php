<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Log as LogModal;

class Log extends Controller {


    public function log() {

        ma_log(8);
        $list=LogModal::order('time','desc')->paginate(20);
        $this->assign('list',$list);
        return $this->fetch();
    }


    public function clean(){
        ma_log(9);
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $ip=input('post.ip');
        db('visitor')->where(['ip'=>$ip])->delete();
        return success();
    }

    public function token() {
        if (session('token')) {
            return true;
        } else {
            return false;
        }
    }
}

