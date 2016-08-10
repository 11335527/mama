<?php
namespace app\index\controller;
use think\Controller;
use think\Validate;
use app\index\model\Message;

class Me extends Controller {


    public function me() {
        ma_log(4);
        return $this->fetch();
    }

    public function contact() {
        ma_log(10);
        $res = Message::order('time', 'desc')->paginate(10);
        $this->assign('list', $res);
        return $this->fetch();
    }

    public function doContact() {
        $ip = $this->request->ip();
        if (cache($ip)) {
            return error('请勿频繁操作！');
        } else {
            $post = input('post.');
            $validate = new Validate([
                ['content', 'require', '提交内容不能为空']
            ]);
            if (!$validate->check($post)) {
                return error($validate->getError());
            }
            $arr['ip'] = $ip;
            $arr['content'] = $post['content'];
            $arr['time'] = time();
            $id=db('message')->insert($arr);
            $info=Message::get($id);
            $info['ip_ad']=$info->ip_ad;


            cache($ip, 1, 60);
            return success($info);
        }
    }

}

