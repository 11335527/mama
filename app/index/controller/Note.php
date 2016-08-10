<?php
namespace app\index\controller;
use app\index\model\Article;
use think\Controller;
use think\Loader;
use think\Validate;

class Note extends Controller {


    public function __construct(\think\Request $request) {
        parent::__construct($request);
        $this->assign('menu', 'note');


    }

    public function token() {
        if (session('token')) {
            return true;
        } else {
            return false;
        }
    }


    public function search(){
        $t=input('get.t');

        $where['title']=['like','%'.$t.'%'];
        $artList=Article::where($where)->select();
//        dump($artList);exit;
        $this->assign('list',$artList);
        return $this->fetch('note/list');

    }
    public function note($id = 0) {
        ma_log(2);

        $info = db('dir')->select();
        $r = json_encode($info);
        $dir_id = $id;
        if ($dir_id) {
            $where['dir_id'] = ['=', $dir_id];
            $list = db('article')->where($where)->order('create_time', 'desc')->paginate(20);
        } else {
            $list = db('article')->order('create_time', 'desc')->paginate(25);
        }
        $this->assign('dirList', $r);
        $this->assign('dir_id', $id);
        $this->assign('artList', $list);
        return $this->fetch();
    }

    //ajaxNote
    public function ajaxNote(){
        $dir_id=input('post.dir_id');
        $where['dir_id'] = ['=', $dir_id];
        $list = db('article')->where($where)->order('create_time', 'desc')->select();

        return $list;
    }

    //保存数据
    public function saveArt() {

        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }
        $post = input('post.');
        $validate = Loader::validate('Note');
        if (!$validate->check($post)) {
            return error($validate->getError());
        }
        //图片图库
        $src_data = @$post['src'];
        unset($post['src']);
        if ($post['id']) {

            $post['content'] = str_replace('http://topp123.com/hishu/public/static/upload/editor/', '/static/upload/editor/', $post['content']);
            db('article')->update($post);
            db('editor_img')->where(['aid' => $post['id']])->delete();
            if ($src_data) {
                foreach ($src_data as $v) {
                    $src[] = ['img' => basename($v), 'aid' => $post['id']];
                }
                db('editor_img')->insertAll($src);
            }
            $arr = [
                'type' => 0,
                'id' => $post['id'],
                'title' => $post['title'],
            ];
        } else {
            $time=time();
            $post['create_time'] = $time;
            $post['review_time'] = $time+3600;
            $post['content'] = str_replace('http://topp123.com/hishu/public/static/upload/editor/', '/static/upload/editor/', $post['content']);
            $post['id'] = db('article')->insert($post);
            if ($src_data) {
                foreach ($src_data as $v) {
                    dump($v);
                    $src[] = ['img' => basename($v), 'aid' => $post['id']];
                }
                exit;
                db('editor_img')->insertAll($src);
            }
            $arr = [
                'type' => 1,
                'data' => $post,
            ];
        }
        return success($arr);
    }

    //ajax读取单个art
    public function readArt() {
        $id = input('post.id');
        $art = db('article')->find($id);
        return json($art);
    }

    //新建文件夹操作
    public function newDir() {
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $data = input('post.');
        $id = db('dir')->insert($data);
        $data['id'] = $id;
        return json($data);
    }

    //目录重命名
    public function updateDirName() {
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $post = input('post.');
        db('dir')->update($post);
    }

    //删除dir
    public function delDir() {
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $id = input('post.id');
        db('dir')->delete($id);
    }

    //删除article
    public function delArt() {

        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }
        $id=input('post.id');
        if(db('article')->delete($id)){
            return success();
        }
    }

    //文章页面
    public function art() {
        ma_log(5);
        $id = input('get.');
        $info = Article::get($id);
        $info->dirName;
        $info->digest;


        $where['dir_id'] = ['=', $info['dir_id']];
        $list = db('article')->where($where)->order('create_time', 'desc')->limit(20)->select();

        $this->assign('info', $info);
        $this->assign('artList', $list);
        return $this->fetch();
    }


    //编辑页面
    public function edit($id){

        $info = Article::get($id);

        $this->assign('info', $info);
        return $this->fetch();
    }
    //添加摘要
    public function addDigest() {

        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $post = input('post.');

        $validate = new Validate([
            ['content', 'require', '摘要内容不能为空']
        ]);

        if (!$validate->check($post)) {
            return error($validate->getError());
        }
        $post['create_time'] = time();
        $id = db('article_digest')->insert($post);
        if ($id) {
            $post['id'] = $id;
            $post['create_time'] = date('Y-m-d H:i', $post['create_time']);
            unset($post['content']);
            return success($post);
        }
    }


    //更新首页计划
    public function renamePlan(){
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }

        $post=input('post.');
        $validate = new Validate([
            ['text', 'require', 'plan不能为空']
        ]);
        if (!$validate->check($post)) {
            return error($validate->getError());
        }


        if(empty($post['id'])){
            $id=db('plan')->insert($post);
            return ['status'=>2,'content'=>$id];
        }else{

            db('plan')->update($post);
            return success('');
        }

    }

    //plan排序
    public function SortPlan(){
        $post=input('post.order');
        $post=rtrim($post,',');
        $order = explode(',', $post);
        foreach ($order as $k => $v) {
            db('plan')->where(['id' => $v])->update(['plan_order' => $k + 1]);
        }
    }

    public function delPlan(){
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }
        $id=input('post.id');
        if(db('plan')->delete($id)){
            return success();
        }
    }

    //复习
    public function review(){


        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }
        $id=input('post.id');

        $info=db('article')->find($id);

            $count = $info['review_count']+1;
            $time = time();
            switch ($count) {
                case 1:
                    $review_time = $time + 43200;
                    break;
                case 2:
                    $review_time = $time + 43200;
                    break;
                case 3:
                    $review_time = $time + 86400;
                    break;
                case 4:
                    $review_time = $time + 129600;
                    break;
                case 5:
                    $review_time = $time + 345600;
                    break;
                case 6:
                    $review_time = $time + 545600;
                    break;
            }
            $data['id'] = $id;
            $data['review_count'] = $count;
            $data['last_review'] = $time;
            $data['review_time'] = $review_time;

        if(db('article')->update($data)){
            return success();
        }
    }

    public function reviewComplete(){
        //验证token
        if(!$this->token()){
            return ['status'=>3];
        }
        $id=input('post.id');
        $arr=[
          'id'=>$id,
          'review_count'=>7
        ];
        db('article')->update($arr);
        return success();
    }

}
