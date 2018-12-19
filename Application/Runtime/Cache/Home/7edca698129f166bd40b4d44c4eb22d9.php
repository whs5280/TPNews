<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>华软大学生留言板</title>
    <link href="/TPNews/Public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
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

    <hr />
    <div class="row">
        <div class="col-md-8">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default" id="panel-<?php echo ($vo["news_id"]); ?>">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/TPNews/Public/image/1.gif" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="/TPNews/Home/New/news_list/news_id/<?php echo ($vo["news_id"]); ?>" target="_blank" style="font-size: 16px;text-decoration: none;">
                                    <?php echo ($vo["news_title"]); ?>
                                </a>
                                <br><br>
                                <div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (substr($vo["news_content"],0,360)); ?>...
                                </div>
                                <blockquote class="blockquote-reverse small" style="margin-bottom: -10px;font-size: 14px;">
                                    <ul class="list-inline text-muted">

                                        <li>by</li>
                                        <li><?php echo ($vo["news_author"]); ?></li>
                                        <li><?php echo ($vo["news_date"]); ?></li>

                                    </ul>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

            <div style="font-size: 16px;margin-left: 40%;"><?php echo ($page); ?></div>
        </div>


        <div class="col-md-4">
            <nav>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a data-toggle="modal" data-target="#myModal">热门新闻</a></li>
                    <!-- 热门新闻 -->
                    <div>
                        <!-- 热门新闻 -->
                        <div class="panel panel-default">
<div class="panel-body">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top: 10px;"><a href="/TPNews/Home/New/news_list/news_id/<?php echo ($vo["news_id"]); ?>" target="_blank" ><?php echo ($vo["news_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
    <br>
</div>
</div>
                    </div>
                    <div style="height: 50px;"></div>
                    <li role="presentation" class="active"><a target="_blank" style="cursor: pointer;">最新新闻</a></li>
                    <!-- 最新新闻 -->
                    <div>
                        <!-- 最新新闻 -->
                        <div class="panel panel-default">
    <div class="panel-body">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top: 10px;"><a href="/TPNews/Home/New/news_list/news_id/<?php echo ($vo["news_id"]); ?>" target="_blank" ><?php echo ($vo["news_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <br>
</div>
                    </div>
                    <!--<li role="presentation"><a href="#">...</a></li>-->
                </ul>
            </nav>
        </div>
    </div>
    <br><br><br>
</div>

</body>

</html>
</body>
</html>