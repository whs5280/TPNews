<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index()
	{
	
		$news=M("news");
		$count = $news->count();// 查询满足要求的总记录数 $map表示查询条件
		$Page  = new\Think\Page($count,8);// 实例化分页类 传入总记录数 每8条
		$Page->setConfig('header', '条数据');
		$Page->setConfig('prev', '上一页');
		$Page->setConfig('next', '下一页');
		$Page->setConfig('first', '首页');
		$Page->setConfig('end', '末页');
		$show  = $Page->show();// 分页显示输出
		
		// 进行分页数据查询
		$result = $news->field(array('news_id','news_title','news_author','news_content','news_date'))->order('news_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$result);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板      
	}
	
	/*显示插入数据页面*/
	public function insert()
	{
		$this->display();
	}

	/*验证码检验*/
	public function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	/*执行插入数据*/
	public function add()
	{
		//检查验证码
		$verify = I('post.verify',''); 
		$id = '';
		if(!$this->check_verify($verify,$id)){
			$this->assign("jumpUrl","insert");//控制按秒自动跳转
			$this->error('验证码不正确啦');
		}else{
			$insert=D("News");
			if(!$insert->create())
			{
				exit($insert->getError());
			}else{
				$insertend=$insert->add();
				$this->redirect("index"); 	
			}
		}
	}
	/*显示修改页面*/
	public function update()
	{
		$news=M("news");
		$query['news_id']=$_GET['news_id'];
		$result=$news->where($query)->select();
		$this->assign('list',$result);
		$this->display();
	}
	/*修改*/
	public function modify()
	{
		$update=D("News");
		$result2=$update->create();
		$update->save();
		$this->redirect("index");
	}
	/*删除信息*/
	public function delete()
	{
		$delete=M("news");
		$del=$delete->delete($_GET['news_id']);
		$this->redirect('index');
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
	
	/*验证码生成*/
	public function verify(){  
		$Verify = new \Think\Verify();  
		$Verify->fontSize = 18;  
		$Verify->length   = 4;  
		$Verify->useNoise = false;  
		$Verify->codeSet = '0123456789abcdefg';  
		$Verify->imageW = 130;  
		$Verify->imageH = 50;  
		//$Verify->expire = 600;  
		$Verify->entry();  
	}  

    /*新闻查找*/
    public function result(){
        $search = I('search');
        $news=M("news");
        $where['news_title']=array('like','%'.$search.'%');
        $result = $news->where($where)->select();
        $this->assign('result',$result);// 赋值数据集
        $this->display(); // 输出模板
    }
}
?>