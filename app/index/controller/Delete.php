<?php
namespace app\index\controller;
use think\Controller;

class Delete extends Controller {


    public function del() {
        $post = input('post.');
        if(db($post['table'])->delete($post['id'])){

            return $this->cateImg($post['url'],$post['table'],$post['column']);
        }
    }

    //清理词条分类图片
    public function cateImg($url = './static/upload/cate-img/', $table, $column) {
        $dir = $url;
        $data = $this->readDir($dir);
        $arr = db($table)->column($column);
        $i = 0;
        foreach ($data as $v) {
            if (!in_array($v, $arr)) {
                unlink($dir . $v);
                $i++;
            };
        }
        return $i;
    }

    public function readDir($dir) {
        $files = Array();
        $d = opendir($dir);
        while ($file = readdir($d)) {
            if ($file == '.' || $file == '..') continue;
            $files[] = $file;
        }
        return $files;
    }

}
