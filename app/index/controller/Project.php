<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article;

class Project extends Controller {



    public function project() {
        ma_log(3);
        return $this->fetch();
    }


    public function proIntro() {
        ma_log(6);
        return $this->fetch();
    }

    public function haier() {
        ma_log(7);
        return $this->fetch();
    }

}

