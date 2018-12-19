<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>新闻系统</title>
    <link href="/TPNews/Public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        table{
            text-align: center;
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


<div class="container">
    <table align="center" cellpadding="0" cellspacing="0" class="table table-bordered">

        <tr>
            <td height="56" colspan="5" align="center"><a style="font-size: 20px;color: #808080;text-decoration: none;">新闻信息管理</a></td>
        </tr>
        <tr>
            <td width="100" height="36" align="center" class="table_head">ID</td>
            <td width="491" height="36" align="center" class="table_head">新闻标题</td>
            <td width="176" height="36" align="center" class="table_head">作者</td>
            <td width="125" height="36" align="center" class="table_head">发布时间</td>
            <td width="108" height="36" align="center" class="table_head">操作</td>
        </tr>
        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td height="56" align="center"><?php echo ($vo["news_id"]); ?></td>
                <td height="56" align="center"><a href="/TPNews/Home/Index/news_list/news_id/<?php echo ($vo["news_id"]); ?>" target="_blank"><?php echo ($vo["news_title"]); ?></a></td>
                <td height="56" align="center"><?php echo ($vo["news_author"]); ?></td>
                <td height="56" align="center"><?php echo ($vo["news_date"]); ?></td>
                <td height="56" align="center" ><a href="/TPNews/Home/Index/update/news_id/<?php echo ($vo["news_id"]); ?>" >修改</a> <a  href="/TPNews/Home/Index/delete/news_id/<?php echo ($vo["news_id"]); ?>" onclick="return confirm('您真的要删除该信息吗?')">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>
    <table style="margin-top:20px;" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="pages" align="center"><?php echo ($page); ?></td>
        </tr>
    </table>

    <br>

</div>

</body>
</html>