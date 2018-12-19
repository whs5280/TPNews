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
<!-- 导航条 -->
<!DOCTYPE html>
<html>
<head>
    <title>导航条</title>

    <link rel="stylesheet" href="/TPNews/Public/css/bootstrap.css" />
    <style type="text/css">
        .drownmenu{
            height:50px;
            line-height:50px;
            position: relative;
            z-index: 999;
            display: inline-block;
            font-size: 16px;
            text-align: center;

        }
        .drownmenu a{
            color:white;
            text-decoration: none;
        }
        .drowncontent{
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            z-index: 9999;
            width: 150px;
            margin-left: 1px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .drowncontent img {
            z-index: 9999;
        }
        .drowncontent a {
            color: black;
            padding: 6px 8px;
            text-decoration: none;
            display: block;
        }
        .drowncontent a:hover {
            background-color: #f1f1f1
        }
        /* 移动到时显示 */
        .drownmenu:hover .drowncontent {
            display: block;
        }
    </style>

</head>

<body>
<!-- 导航条 -->
<nav class="navbar navbar-default" role="navigation" id="bignav">
    <div class="container">

        <div class="navbar-header">
            <a href="<?php echo U('Home/Index/index');?>" class="navbar-brand" style="color: #906c55;">新闻信息管理系统</a>
        </div>

        <!-- search -->
        <div style="height: 15px;margin-top: 7px;margin-left: 450px;">
            <form method="post" action="<?php echo U('Index/result');?>">
                <input type="text" class="form-control" style="width: 300px;display: inline-block;" name="search" placeholder="输入查找的标题">
                <button class="btn btn-default" style="margin-top: 0px;display: inline-block;" type="submit">
                    Go!
                </button>
            </form>
        </div>


        <div style="margin-top: -20px;">
            <div class="nav navbar-nav navbar-right">
                <div>
                    <div class="nav navbar-nav navbar-right drownmenu"><a href="" style="color: #906c55;">个人中心</a>
                        <div class="drowncontent">

                            <div style="text-align: left;">
							<span>
							<input type="file" name="uploadImage" style="position:absolute;opacity:0;" id="inp1" onchange="imgUpload()">
							<img style="width: 50px;height: 50px;"src="/TPNews/Public/image/01.png"/>
                            </span>
                                    <span><?php echo ($_SESSION['user']['name']); ?>admin</span>
                            </div>
                            <div><a href="<?php echo U('Login/logout');?>">退出</a></div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</nav>
</body>
</html>


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

</body>
</html>