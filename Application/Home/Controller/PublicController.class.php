<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function hot(){
        $news=M("news");
        $list = $news->field(array('news_id','news_title','news_author','news_content','news_date'))->order('news_hits desc')->limit(4)->select();
        $this->assign('list',$list);
        $this->display();

    }

    public function later(){
        $news=M("news");
        $list = $news->field(array('news_id','news_title','news_author','news_content','news_date','news_date'))->order('news_date desc')->limit(4)->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function nav(){
        $this->display();
    }
}