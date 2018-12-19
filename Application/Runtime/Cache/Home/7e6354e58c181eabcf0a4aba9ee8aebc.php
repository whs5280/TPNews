<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新闻显示</title>
<link href="/TPNews/Public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        table{
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
<!-- header -->
<div class="row">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo U('New/index');?>">华软新闻</a>
            </div>
            <div class="navbar-right">
                <a class="navbar-brand" href="<?php echo U('Login/login');?>" style="color: #906c55;font-size: 15px;">新闻后台管理入口</a>
            </div>
        </div>
    </nav>
</div>

<div class="container" style="width: 70%;">
<h4 align="center" style="color: #906c55;">新闻详情</h4>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table width="739" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
  <tr>
      <td align="center" style="width:500px;height:30px;border:1px dashed grey;"><?php echo ($vo["news_title"]); ?></td>
  </tr>
  <tr>
      <td align="center" style="width:500px;height:50px;border:1px dashed grey;">作者：<?php echo ($vo["news_author"]); ?>  |发布时间：<?php echo ($vo["news_date"]); ?> |点击次数：<?php echo ($vo["news_hits"]); ?>次</td>
  </tr>
  <tr>
      <td style="width:500px;height:450px;border:1px dashed grey;vertical-align:top;">  &nbsp;&nbsp; <?php echo ($vo["news_content"]); ?></td>
  </tr>
</table><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>


</body>
</html>