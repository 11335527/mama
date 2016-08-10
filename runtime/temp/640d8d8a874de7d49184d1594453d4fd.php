<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:50:"C:\wamp\www\la\public/../app/index\view\Me\me.html";i:1466927036;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1466911701;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1466920514;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1466909681;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1466510318;}*/ ?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>嗨术-周凯-技术笔记</title>
    <link rel="stylesheet" href="__S__bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="__S__fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="__S__fonts/fontawesome/css/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="__S__css/btn-shine.css" media="screen" type="text/css"/>
    <link rel="stylesheet" href="__S__css/hover-min.css" media="screen" type="text/css"/>
    <script src="__S__js/jquery-1.12.4.js"></script>

    <!--<link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">-->
    <link href="__S__highlight/styles/solarized-dark.css" rel="stylesheet">
    <style>

        .tips{width:702px;margin:0 auto; height: 50px; line-height: 50px; text-align: center; font-family: "微软雅黑"; font-size: 30px; padding: 25px 0px;}
        .bredcolor{color:#fff;}
        .produter {width:250px; height:35px; margin:0 auto 450px auto; position:relative; z-index:100;
            -webkit-perspective:400px;
            -moz-perspective:400px;
            perspective:400px;
            -webkit-perspective-origin: 50% 100%;
            -moz-perspective-origin: 50% 100%;
            perspective-origin: 50% 100%;
        }
        /* produter下所有div的统一设置 */
        .produter div {position:absolute; padding:10px;
            -webkit-transform-style:preserve-3d;
            -moz-transform-style:preserve-3d;
            transform-style:preserve-3d;
            top:100%; left:0; width:230px;
            -webkit-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .produter .odd {background:#ddd;
            -moz-transform:rotateX(-180deg);
            -webkit-transform:rotateX(-180deg);
            -webkit-transition: 1s;
            -moz-transition: 1s;
            -o-transition: 1s;
            transition: 1s;
        }
        .produter .even {background:#eee;
            -moz-transform:rotateX(180deg);
            -webkit-transform:rotateX(180deg);
            -webkit-transition: 1s;
            -moz-transition: 1s;
            -o-transition: 1s;
            transition: 1s;
        }
        .produter .first {background:#ddd;
            -moz-transform:rotateX(-100deg);
            -webkit-transform:rotateX(-100deg);
            -webkit-transition: 0.6s;
            -moz-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }
        .produter .last {box-shadow:0 15px 10px -10px rgba(0,0,0,0.3); border-radius: 0 0 10px 10px;}
        .produter:hover .sub {
            -moz-transform:rotateX(0deg);
            -webkit-transform:rotateX(0deg);
        }

        .produter .sub img {display:block; float:left; padding:0 10px 10px 0; width: 48px; height: 48px;}
        .produter .sub p {font: normal 12px/15px arial, sans-serif; color:#000; padding:0; margin:0;}
        .produter .sub p span {display:block; font: bold 14px/18px arial, sans-serif; color:#069;}
        .produter .sub p a {font: normal 12px/15px arial, sans-serif; color:#09c;}
        .produter .sub p a:hover {text-decoration:none;}
        .produter a.main {display:block; font: bold 15px/35px arial, sans-serif; text-align:center; text-decoration:none; color:#fff; background:#069; border-radius:10px 10px 0 0; position:relative; z-index:100;}
    </style>


</head>
<body>





        <!--内容区顶部导航-->
        <nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="row">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="__SITE__"><img src="__S__images/logo.gif" alt="" height="70"></a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class=" nav navbar-nav">
                <li class="<?php echo ($menu=='index')?'active':''; ?>"><a href="__SITE__" class="hvr-underline-from-center">首页</a></li>
                <li class="<?php echo ($menu=='note')?'active':''; ?>"><a href="__SITE__note" class="hvr-underline-from-center">笔记</a></li>
                <li><a href="__SITE__project" class="hvr-underline-from-center">项目</a></li>
                <li><a href="__SITE__me" class="hvr-underline-from-center">关于嗨术</a></li>

            </ul>


            <div>
                <form class="navbar-form navbar-left" role="search">
                    <div class="input-group ">
                        <input type="text" class="form-control" >
               <span class="input-group-btn">
                  <a class="btn btn-primary" type="button">
                      搜索
                  </a>
               </span>
                    </div><!-- /input-group -->
                </form>

            </div>

            <div class="pull-right navbar-form" >
                <div class="switch">
                    <input type="checkbox" name="toggle" <?php echo (\think\Session::get('token')==3699)?'checked':''; ?>>
                    <label for="toggle"><i class="fa fa-key"></i></label>
                    <span></span>
                </div>
                <!--<script src="js/index.js"></script>-->
            </div>


        </div>
        </div>
    </div>

</nav>
<script>
    $(".navbar-nav a").on("mouseenter mouseleave",function(e) {
        var w = $(this).width();
        var h = $(this).height();
        var x=(e.pageX-this.offsetLeft-(w/2))*(w>h?(h/w):1);
        var y=(e.pageY-this.offsetTop-(h/2))*(h>w?(w/h):1);
        var dirNum=Math.round((((Math.atan2(y,x)*(180/Math.PI))+180)/90)+3)%4;
        /*
         dirNum:0,1,2,3 ---> t r b l
         以上代码是网友分享
         以下代码是模仿拉勾网首页的一个小效果做的
         */

        var eventType = e.type;
        var aPos=['.hvr-bounce-to-top','.hvr-bounce-to-right','.hvr-bounce-to-bottom','.hvr-bounce-to-left'];
//        var aPos2=['.hvr-bounce-to-bottom','.hvr-bounce-to-left','.hvr-bounce-to-top','.hvr-bounce-to-tight'];
//        if(eventType == 'mouseenter'){
//            $(this).addClass(aPos[dirNum]);
//        }else{
//            $(this).addClass(aPos2[dirNum]);
//        }
    });

    $('.switch input').on('change',function(){
        var status=$(this).prop("checked");
        console.log(status);
        if(status){
            $('.switch>input').prop("checked",false);

            $('#alert-modal').modal();
        }else {
            $.post('__INDEX__index/cleanToken',{},function(msg){
                    $('.switch>input').prop("checked",false);
            });
        }

    });
</script>
        

    <link rel="stylesheet" href="__S__me-banner/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="__S__me-banner/css/style.css"> <!-- Resource style -->
    <script src="__S__me-banner/js/modernizr.js"></script> <!-- Modernizr -->
    <style>
        .cd-hero{ font-family: "microsoft yahei";}

    </style>

<section class="cd-hero" style="margin-top: -20px">
    <ul class="cd-hero-slider autoplay">
        <li class="selected">
            <div class="cd-full-width">
                <h2>周凯</h2>
                <p>2013年毕业与烟台南山学院，流浪至今 </p>
                <a  class="cd-btn">查看更多</a>
            </div> <!-- .cd-full-width -->
        </li>

        <li>
            <div class="cd-half-width" style="padding-top: 100px">
                <h2>技能图</h2>

               <dl class="dl-horizontal " style="color: white;text-align: left">
                   <p><dt>前端</dt>
                   <dd>精通HTML、DIV+CSS、Jquery、bootstrap</dd></p>

                   <p><dt>PHP</dt>
                <dd>通晓php底层原理，设计模式。精通thinkphp框架，掌握Memcache/Redis等缓存技术，页面静态化，API接口开发</dd></p>
                   <p><dt>Mysql</dt>
                <dd>合理的表结构设计，熟悉事务、触发器、存储过程、sql编程、主从复制等技巧</dd></p>
                   <p><dt>服务器</dt>
                <dd>熟悉linux常用命令、linux搭建LAMP环境。</dd></p>
                   <p><dt>团队协作</dt>
                <dd>SVN版本控制工具的搭建与运用</dd></p>
                   <p><dt>设计</dt>
                <dd>可独立完成活动图片的设计与制作，精通ps</dd></p>
                   <p><dt>编辑器</dt>
                <dd>PhpStrom</dd></p>
            </dl>
                <a  class="cd-btn">查看更多</a>

            </div> <!-- .cd-half-width -->

            <div class="cd-half-width cd-img-container">
                <img src="__S__me-banner/assets/tech-1.jpg" alt="tech 1">

            </div> <!-- .cd-half-width.cd-img-container -->
        </li>

        <li>
            <div class="cd-half-width cd-img-container">
                <img src="__S__me-banner/assets/tech-2.jpg" alt="tech 2">
            </div> <!-- .cd-half-width.cd-img-container -->

            <div class="cd-half-width">
                <h2>技能列表</h2>
                <p>杂</p>
                <a  class="cd-btn">查看更多</a>
            </div> <!-- .cd-half-width -->

        </li>

        <li class="cd-bg-video">
            <div class="cd-full-width">
                <h2>作品展示</h2>
                <p>有设计作品和编程作品</p>
                <a  class="cd-btn">查看更多</a>
            </div> <!-- .cd-full-width -->

            <div class="cd-bg-video-wrapper" data-video="__S__me-banner/assets/video/video">
                <!-- video element will be loaded using jQuery -->
            </div> <!-- .cd-bg-video-wrapper -->
        </li>

        <li>
            <div class="cd-full-width">
                <h2>个人生活</h2>
                <p>宅</p>
                <a  class="cd-btn">查看更多</a>
            </div> <!-- .cd-full-width -->
        </li>
    </ul> <!-- .cd-hero-slider -->

    <div class="cd-slider-nav">
        <nav>
            <span class="cd-marker item-1"></span>

            <ul>
                <li class="selected"><a href="#0">介绍</a></li>
                <li><a href="#0">经历</a></li>
                <li><a href="#0">技术</a></li>
                <li><a href="#0">作品</a></li>
                <li><a href="#0">生活</a></li>
            </ul>
        </nav>
    </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

<script src="__S__me-banner/js/main.js"></script> <!-- Resource jQuery -->

        <!--内容区底部-->
        <!-- 模态框（Modal） -->
<div class="modal fade" id="hs-new-fold-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;padding-bottom: 0">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h2 class="modal-title " style="color: white;text-align: center">
                    <span class="fa  fa-folder-open-o " style="color: #fddd02"></span>&nbsp; 新建文件夹
                </h2>
            </div>
            <div class="modal-body">
                <input type="text" id="folder_name" class="form-control">
            </div>
            <div style="text-align: center;margin-bottom: 20px">
                <a type="button" class="btn btn-default"
                   data-dismiss="modal">关闭
                </a>
                <a type="button" class="btn btn-success folder-confirm">
                    确认
                </a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->

</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;padding-bottom: 0">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h2 class="modal-title " style="color: white;text-align: center">
                    <span class="fa fa-spin fa-key " style="color: #fddd02"></span>&nbsp; 请输入令牌
                </h2>
            </div>
            <div class="modal-body">
                <input type="password" id="hi-token" class="form-control">
            </div>
            <div style="text-align: center;margin-bottom: 20px">
                <a type="button" class="btn btn-default"
                   data-dismiss="modal">关闭
                </a>
                <a type="button" class="btn btn-success token-confirm">
                    确认
                </a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script>



    $(window).keydown(function(event){
        switch(event.keyCode) {
            case 13:
                $(".token-confirm").trigger('click');
                break;
        }
    });

    $('#alert-modal').on('click', '.token-confirm', function () {

        var token = $('#hi-token').val();
        $.post('__INDEX__index/verify', {token: token}, function (msg) {
            switch (msg.status) {
                case 1:
                    $('.switch>input').prop("checked", true);
                    $('#alert-modal').modal('hide');

                    break;
                case 0:

                    var alert = $('<div class="alert alert-warning" style="display: none;margin-bottom: 5px"><strong>警告！</strong>' + msg.content + '</div>');
                    $('#hi-token').before(alert);
                    alert.slideDown('fast');
                    setTimeout(function () {
                        alert.slideUp('fast');
                        alert.remove();
                    }, 2000);

                    break;

            }

        });
    });


    $('#alert-modal').on('shown.bs.modal',function(){

        $('#hi-token').focus();
    });
</script>
        <script src="__S__bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>
</body>
</html>



