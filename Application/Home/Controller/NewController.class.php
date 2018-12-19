<?php
namespace Home\Controller;
use Think\Controller;
class NewController extends Controller {

    public function index(){
        $news=M("news");
        $count = $news->count();
        $Page  = new\Think\Page($count,4);// 实例化分页类 传入总记录数 每5条
        $Page->setConfig('header', '条数据');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('end', '末页');
        $show  = $Page->show();// 分页显示输出

        //$list = $info->select();
        //var_dump($list);
        // 进行分页数据查询
        $list = $news->field(array('news_id','news_title','news_author','news_content','news_date'))->order('news_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();

    }

    /*新闻显示*/
    public function news_list()
    {
        $news=M("news");
        $query['news_id']=$_GET['news_id'];
        //更新点击次数
        $model = D('News');
        $sql = 'update think_news set news_hits=news_hits+1 where news_id='.$_GET['news_id'];
        $model->execute($sql);
        //查询数据
        $result=$news->where($query)->select();
        $this->assign('list',$result);
        $this->display();
    }
}