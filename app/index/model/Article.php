<?php
namespace app\index\model;

use think\Model;

class Article extends Model{

    public function getReviewTimeAttr($value) {
        return date('Y-m-d H:i',$value);
    }
    public function getCreateTimeAttr($value) {
        return date('Y-m-d H:i',$value);
    }
    public function getStatusAttr($value,$data) {
        if($data['review_count']>=7){
            return '复习完成';
        }else{
            return '复习中';
        }
    }

    public function dirName(){
        return $this->belongsTo('Dir','dir_id','id');
    }

    public function digest(){
        return $this->hasMany('ArticleDigest','aid','id');
    }


}