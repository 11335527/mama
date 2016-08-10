<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:61:"C:\wamp\www\la\public/../app/index\view\project\proIntro.html";i:1468221478;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1467539997;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:58:"C:\wamp\www\la\public/../app/index\view\public\bottom.html";i:1468221641;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1467040116;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>码麻-周凯-技术笔记</title>
    <link rel="stylesheet" href="__S__bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="__S__fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="__S__fonts/fontawesome/css/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="__S__css/btn-shine.css" media="screen" type="text/css"/>
    <link rel="stylesheet" href="__S__css/hover-min.css" media="screen" type="text/css"/>
    <script src="__S__js/jquery-1.12.4.js"></script>

    <!--<link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">-->
    <link href="__S__highlight/styles/solarized-dark.css" rel="stylesheet">



</head>
<body>





        <!--内容区顶部导航-->
        <nav class="navbar navbar-default" role="navigation" >
    <div class="container">
        <div class="row">
        <div class="navbar-header">
            <a  class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="visible-xs">

                <a href="__SITE__"><img src="__S__images/logo.gif" alt="" height="70px" style="padding: 5px 0"></a>
            </div>
            <div class="hidden-xs">

                <a href="__SITE__"><img src="__S__images/logo-70.gif" alt="" ></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class=" nav navbar-nav">
                <li class="<?php echo ($menu=='index')?'active':''; ?>"><a href="__SITE__" class="hvr-underline-from-center">首页</a></li>
                <li class="<?php echo ($menu=='note')?'active':''; ?>"><a href="__SITE__note" class="hvr-underline-from-center">笔记</a></li>
                <li><a href="__SITE__project" class="hvr-underline-from-center">项目</a></li>
                <li><a href="__SITE__me" class="hvr-underline-from-center">关于码麻</a></li>

            </ul>


            <div>
                <div class="navbar-form navbar-left" role="search">
                    <div class="input-group ">
                        <input type="text" class="form-control" id="search-title" style="border-style:none;background-color: #181e23;">
               <span class="input-group-btn">
                  <a class="btn btn-primary" id="search-btn" style="border: 1px solid #181e23;background-color: #181e23">
                      <i class="fa fa-search" style="font-size: 18px;color: #5cb85c"></i>
                  </a>
               </span>
                    </div><!-- /input-group -->
                </div>

            </div>

            <div class="pull-right navbar-form hidden-xs" >
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
    $('#search-btn').on('click', function () {
        var title = $('#search-title').val();
        window.location.href = '__SITE__list/t/' + title;
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
        <!--<link rel="stylesheet" type="text/css" href="__S__h5-video/css/reset.css"/>-->
<link rel="stylesheet" type="text/css" href="__S__h5-video/css/willesPlay.css"/>
<script src="__S__h5-video/js/willesPlay.js" type="text/javascript" charset="utf-8"></script>

<div class="container" id="mama-body">
    <div class="row">

        <div class="col-md-12">
            <h3 style="margin-bottom: 20px;">海尔词典项目简介</h3>
            <!--<video style="height: 100%; width: 100%; display: block;" controls>-->
                <!--<source src="__S__project/abc.mp4" type="video/mp4">-->
                <!--<source src="movie.ogg" type="video/ogg">-->
                <!--您的浏览器不支持 video 标签。-->
            <!--</video>-->

        <div id="willesPlay">

            <div class="playContent">
                <div class="turnoff">
                    <ul>
                        <!--<li><a href="javascript:;" title="喜欢" class="glyphicon glyphicon-heart-empty"></a></li>-->
                        <li><a href="javascript:;" title="关灯"
                               class="btnLight on "><i class="fa fa-desktop"></i></a></li>
                        <!--<li><a href="javascript:;" title="分享" class="glyphicon glyphicon-share"></a></li>-->
                    </ul>
                </div>
                <video width="100%" height="100%" id="playVideo">
                    <source src="__S__project/abc.mp4" type="video/mp4">
                    当前浏览器不支持 video直接播放，点击这里下载视频： <a href="/">下载视频</a>
                </video>
                <div class="playTip glyphicon glyphicon-play"></div>
            </div>
            <div class="playControll">
                <div class="playPause playIcon"></div>
                <div class="timebar">
                    <span class="currentTime">0:00:00</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar"
                             aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                    </div>
                    <span class="duration">0:00:23</span>
                </div>
                <div class="otherControl">
                    <span class="volume glyphicon glyphicon-volume-down"></span>
                    <span class="fullScreen glyphicon glyphicon-fullscreen"></span>
                    <div class="volumeBar">
                        <div class="volumewrap">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 8px;height: 40%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>




        <div class="col-md-12" style="margin-top: 30px;">
            <hr style="border: 1px solid #ddd">
            <h4 class="text-primary">开发组员：</h4>
            <p>金一(ios)、丁宏贺(android)、张想想(php)、周凯(php)</p>
            <h4 class="text-primary">负责模块：</h4>
            <p>API接口开发，搭建后台</p>
            <h4 class="text-primary">框架：</h4>
            <p>bootstrap、tp5</p>
            <h4 class="text-primary">开发周期：</h4>
            <p>一个月</p>
        </div>
        <div class="col-md-12">
            <hr style="border: 1px solid #ddd">

            <h4>项目截图：</h4>
            <div class="col-md-2">
                <img src="__S__project/img/1.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/2.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/3.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/4.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/5.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/6.png" alt="" class="img-responsive">
            </div>


            <div class="col-md-2">
                <img src="__S__project/img/7.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/8.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/13.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/10.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/11.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-2">
                <img src="__S__project/img/12.png" alt="" class="img-responsive">
            </div>
        </div>


    </div>
</div>
<footer class="footer bg-default" style="padding: 10px 0;display: none">
    <div class="container">
        <p class="text-muted" style="margin: 0">MaMa&nbsp;|&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank">鲁ICP备15034061号-1</a></p>
    </div>
</footer>
<script>
    $(function(){
        //footer:margin-top
        var $prevDiv = $("#mama-body");
        var $footer = $("footer");
        var all = $(window).height();//是文档窗口高度
        var top = $prevDiv.offset().top;//是标签距离顶部高度
        var scroll = $(document).scrollTop();//是滚动条高度
        var height = $prevDiv.height();//是标签高度
        var f = $footer.height();
        //你要的高度
        var margin_top = all - height - (top - scroll) - f - 20;
        if (margin_top > 0) {
            $footer.css('margin-top', margin_top);
        } else {
            $footer.css('margin-top', '30px');
        }
        $footer.fadeIn("slow");
    });
</script>
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


    $('#hi-token').keydown(function(event){

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

    $('#search-title').on('keydown', function (event) {

        switch (event.keyCode) {
            case 13:
                $('#search-btn').trigger('click');
                break;
        }

    });
</script>
        
<script src="__S__bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>


</body>
</html>



