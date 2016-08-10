<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article;

class Image extends Controller {


    public function editorUpload() {
        // 获取表单上传文件 例如上传了001.jpg


        if(isset($_FILES['wangEditorH5File'])){
            $file = \think\Input::file('wangEditorH5File');
        }
        if(isset($_FILES['wangEditorPasteFile'])){
            $file = \think\Input::file('wangEditorPasteFile');
        }

        // 移动到服务器的上传目录 /home/www/upload/
        $info = $file->move('./static/upload/editor/');
        if ($info) {
            // 成功上传后 获取上传信息
            $path = __SITE__.'static/upload/editor/';
            return $path . $info->getFilename();
        } else {
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }

}
