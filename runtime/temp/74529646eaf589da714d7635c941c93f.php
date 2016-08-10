<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:46:"C:\wamp\www\la/app/index\view\index\index.html";i:1466323359;s:41:"C:\wamp\www\la/app/index\view\layout.html";i:1466183458;s:48:"C:\wamp\www\la/app/index\view\public\header.html";i:1466182686;s:45:"C:\wamp\www\la/app/index\view\public\nav.html";i:1466091355;s:47:"C:\wamp\www\la/app/index\view\public\modal.html";i:1466184553;s:48:"C:\wamp\www\la/app/index\view\public\footer.html";i:1465999817;}*/ ?>
<!DOCTYPE html>
<!--头部引入基础css和js-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>嗨术-周凯-博客</title>
    <link rel="stylesheet" href="__S__bootstrap/dist/css/bootstrap.css">
    <script src="__S__js/jquery-1.12.4.js"></script>



</head>
<body>





        <!--内容区顶部导航-->
        <nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <img src="__S__images/logo.png" alt="" height="70">
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="<?php echo ($menu=='index')?'active':''; ?>"><a href="__SITE__">首页</a></li>
                <li class="<?php echo ($menu=='note')?'active':''; ?>"><a href="__SITE__note/dir/0">笔记</a></li>
                <li><a href="#">项目</a></li>
                <li><a href="#">代码片段</a></li>
                <li><a href="#">关于嗨术</a></li>

            </ul>

            <form class="navbar-form navbar-left" role="search">


                <div class="input-group">
                    <input type="text" class="form-control">
               <span class="input-group-btn">
                  <button class="btn btn-info" type="button">
                      搜索
                  </button>
               </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </div>


</nav>
        
<link rel="stylesheet" type="text/css" href="__S__lagou/style/css/style.css"/>
<script type="text/javascript" src="__S__lagou/style/js/jquery.lib.min.js"></script>
<div id="body">

    <div id="container">

        <div class="content">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="h/c/1650.html" target="_blank">
                        <img src="__S__lagou/style/images/a254b11ecead45bda166afa8aaa9c8bc.jpg" width="113" height="113"
                             alt="联想"/>
                        <div class="hot_info">
                            <h2 title="联想">联想</h2>
                            <em></em>
                            <p title="世界因联想更美好">
                                世界因联想更美好
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="h/c/9725.html" target="_blank">
                        <img src="__S__lagou/style/images/c75654bc2ab141df8218983cfe5c89f9.jpg" width="113" height="113"
                             alt="淘米"/>
                        <div class="hot_info">
                            <h2 title="淘米">淘米</h2>
                            <em></em>
                            <p title="将心注入 追求极致">
                                将心注入 追求极致
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="h/c/1914.html" target="_blank">
                        <img src="__S__lagou/style/images/2bba2b71d0b0443eaea1774f7ee17c9f.png" width="113" height="113"
                             alt="优酷土豆"/>
                        <div class="hot_info">
                            <h2 title="优酷土豆">优酷土豆</h2>
                            <em></em>
                            <p title="专注于视频领域，是中国网络视频行业领军企业">
                                专注于视频领域，是中国网络视频行业领军企业
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="h/c/6630.html" target="_blank">
                        <img src="__S__lagou/style/images/f4822a445a8b495ebad81fcfad3e40e2.jpg" width="113" height="113"
                             alt="思特沃克"/>
                        <div class="hot_info">
                            <h2 title="思特沃克">思特沃克</h2>
                            <em></em>
                            <p title="一家全球信息技术服务公司">
                                一家全球信息技术服务公司
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="h/c/2700.html" target="_blank">
                        <img src="__S__images/muke.png" width="113" height="113" alt="奇猫"/>
                        <div class="hot_info">
                            <h2 title="奇猫">奇猫</h2>
                            <em></em>
                            <p title="专注于移动互联网、互联网产品研发">
                                专注于移动互联网、互联网产品研发
                            </p>
                        </div>
                    </a>
                </li>
                <li class="last">
                    <a href="h/c/1335.html" target="_blank">
                        <img src="__S__images/muke.png" width="113" height="113" alt="堆糖网"/>
                        <div class="hot_info">
                            <h2 title="堆糖网">慕课网</h2>
                            <em></em>
                            <p title="分享收集生活中的美好，遇见世界上的另外一个你">
                                分享收集生活中的美好，遇见世界上的另外一个你
                            </p>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">
                        商务网站包
                    </h4>
                </a>

                <?php if(is_array($article) || $article instanceof \think\Collection): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <a href="#" class="list-group-item">

                    <h4 class="list-group-item-heading"><strong><?php echo $v['title']; ?></strong></h4>


                    <p class="list-group-item-text"> <span>复习次数：<?php echo $v['review_count']; ?></span><span>复习时间：<?php echo $v['review_time']; ?></span><span>复习阶段：</span><span class="<?php echo ($v['review_status']==1)?'text-warning':'text-danger'; ?>"><?php echo $v['status']; ?></span></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <?php echo $article->render(); ?>
            </div>

        </div>
        <div id="sidebar">
            <div class="mainNavs">
                <?php foreach($dir as $vo): ?>
                <div class="menu_box">

                    <div class="menu_main">
                        <h2><?php echo $vo['name']; ?> <span></span></h2>
                        <?php foreach($vo['son'] as $vs): ?>
                        <a href="h/jobs/list_Java?labelWords=label"><?php echo $vs['name']; ?></a>

                        <?php endforeach; ?>

                    </div>

                    <div class="menu_sub dn">
                        <dl class="reset">
                            <dt>
                                <a href="h/jobs/list_后端开发?labelWords=label">
                                    后端开发
                                </a>
                            </dt>
                            <dd>
                                <a href="h/jobs/list_Java?labelWords=label"

                                   class="curr"

                                >Java</a>
                                <a href="h/jobs/list_C%2B%2B?labelWords=label"

                                   class="curr"

                                >C++</a>
                                <a href="h/jobs/list_PHP?labelWords=label"

                                   class="curr"

                                >PHP</a>
                                <a href="h/jobs/list_%E6%95%B0%E6%8D%AE%E6%8C%96%E6%8E%98?labelWords=label"


                                >数据挖掘</a>
                                <a href="h/jobs/list_C?labelWords=label"

                                   class="curr"

                                >C</a>
                                <a href="h/jobs/list_C%23?labelWords=label"


                                >C#</a>
                                <a href="h/jobs/list_.NET?labelWords=label"


                                >.NET</a>
                                <a href="h/jobs/list_Hadoop?labelWords=label"


                                >Hadoop</a>
                                <a href="h/jobs/list_Python?labelWords=label"


                                >Python</a>
                                <a href="h/jobs/list_Delphi?labelWords=label"


                                >Delphi</a>
                                <a href="h/jobs/list_VB?labelWords=label"


                                >VB</a>
                                <a href="h/jobs/list_Perl?labelWords=label"


                                >Perl</a>
                                <a href="h/jobs/list_Ruby?labelWords=label"


                                >Ruby</a>
                                <a href="h/jobs/list_Node.js?labelWords=label"


                                >Node.js</a>
                            </dd>
                        </dl>
                        <dl class="reset">
                            <dt>
                                <a href="h/jobs/list_移动开发?labelWords=label">
                                    移动开发
                                </a>
                            </dt>
                            <dd>
                                <a href="h/jobs/list_HTML5?labelWords=label"


                                >HTML5</a>
                                <a href="h/jobs/list_Android?labelWords=label"

                                   class="curr"

                                >Android</a>
                                <a href="h/jobs/list_iOS?labelWords=label"

                                   class="curr"

                                >iOS</a>
                                <a href="h/jobs/list_WP?labelWords=label"


                                >WP</a>
                            </dd>
                        </dl>


                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <a class="subscribe" href="subscribe.html" target="_blank">订阅职位</a>
        </div>


    </div><!-- end #container -->
</div><!-- end #body -->




<script src="__S__js/home.min.js"></script>
<script type="text/javascript" src="__S__lagou/style/js/core.min.js"></script>
<script>
    $(function() {
        $( "#accordion" ).accordion({
            collapsible: true
        });
    });
</script>


        <!--内容区底部-->
        <!-- 模态框（Modal） -->
<div class="modal fade" id="hs-new-fold-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    新建文件夹
                </h4>
            </div>
            <div class="modal-body">
                <input type="text" id="folder_name" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary folder-confirm" >
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
        <script src="__S__bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>



