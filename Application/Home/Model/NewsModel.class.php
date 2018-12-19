<?php 
namespace Home\Model;
use Think\Model;
class NewsModel extends Model
{
	/*自动验证设置*/
	protected $_validate=array(
		array('news_title','require','标题不能为空！'),
		array('news_author','require','作者不能为空!'),
		array('news_content','require','内容不能为空!'),
		array('news_title','','标题名称不能重复!',0,'unique',self::MODEL_INSERT),
		);
	/*
	   设置默认时间*/
	protected $_auto=array(
		array('news_date','MyDate',3,'callback'),
		);
	
	protected function MyDate()
	{
		return date('Y-m-d');
	}
}
?>
