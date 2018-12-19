<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>添加新闻</title>
    <link href="/TPNews/Public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/TPNews/Public/js/jquery-1.8.3.min.js"></script>
    <script>
	function functions(){
        var captcha_img = $('#captcha-container').find('img');
        var verifyimg = captcha_img.attr("src");
		var time = new Date().getTime();
        $(captcha_img).attr("src", verifyimg + '/' + time);
		}
    </script>

</head>
<style type="text/css">
.input,img{vertical-align:middle;}
table{
    font-size: 16px;;
}
</style>
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


<div class="container">
<form name="form1" method="post" action="/TPNews/Home/Index/add" role="form">
    <h4 align="center" style="color: #906c55;">修改新闻信息</h4>
  <table width="643" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
    <tr>
      <td width="154" height="26" align="right">标题名称：</td>
      <td width="489" height="26"><input name="news_title" type="text" id="news_title" size="40"></td>
    </tr>
    <tr>
      <td height="26" align="right">作者：</td>
      <td height="26"><input name="news_author" type="text" id="news_author"></td>
    </tr>
    <tr>
      <td height="26" align="right">内容：</td>
      <td height="26"><textarea name="news_content" cols="60" rows="8" id="news_content"></textarea></td>
    </tr>
	<tr>
	<td height="26" align="right">验证码：</td>
        <td height="26" id="captcha-container" align="left">
		    <input type="text" class="captcha-text" name="verify" placeholder="验证码">
		    <img class="left15" onclick=functions() alt="验证码" src="<?php echo U('Home/Index/verify','','');?>" title="点击刷新">
		</td>
	</tr>
    <tr>
      <td height="26" align="right">&nbsp;</td>
      <td height="26"><input type="submit" name="Submit" value="添加信息">
      <input type="reset" name="Submit2" value="重置">
      <input type="button" name="Submit2" value="返回新闻" onClick="location.href='/TPNews/Home/Index/index'">
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>