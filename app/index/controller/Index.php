<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article;

class Index extends Controller {


    public function __construct(\think\Request $request) {
        parent::__construct($request);
        $this->assign('menu', 'index');

    }

    public function index($id = 0) {
        ma_log(1);

        $dir = $id;
        if ($dir) {
            $where['dir_id'] = ['=', $dir];
        } else {
            $where = 1;
        }
        $dir = db('dir')->select();
        $arr = [];
        $son = [];
        foreach ($dir as $v) {
            if ($v['pid'] == 1) {
                $arr[] = $v;
            }else{
                $son[] = $v;
            }
        }

        if(input('get.sort')){


            $article = Article::order('review_time', 'desc')->where($where)->where('review_count','<',7)->paginate(15);
        }else{

            $article = Article::order('create_time', 'desc')->where($where)->paginate(15);
        }
        foreach ($article as $k=>$v) {
            $v->status;
            $article[$k]['dir_name']=$v->dirName->name;

        }

        $plan=db('plan')->order('plan_order')->select();
        $this->assign('plan', $plan);
        $this->assign('dir_id', $id);
        $this->assign('dir', $arr);
        $this->assign('son', $son);
        $this->assign('article', $article);
        return $this->fetch();
    }


    public function verify(){

        $token=input('post.token');
        if($token=='3699'){
            session('token','3699');

            return success('口令正确');
        }else{
            return error('无效令牌');
        }
    }

    public function cleanToken() {

            session(null);
            return success();

    }


}

