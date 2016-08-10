<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:57:"C:\wamp\www\la\public/../app/index\view\note\artList.html";i:1467037079;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1466911701;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467036643;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1466909681;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1466510318;}*/ ?>
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
                        <input type="text" class="form-control" id="search-title">
               <span class="input-group-btn">
                  <a class="btn btn-primary" id="search-btn" type="button">
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
$('#search-btn').on('click',function(){
    var title=$('#search-title').val();
    window.location.href='__SITE__list/t/'+title;
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
        <div id="body">
et
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <h4 class="list-group-item-heading">
                            笔记
                        </h4>
                    </a>

                    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="list-group-item">

                        <a href="__SITE__art/id/<?php echo $v['id']; ?>"><h4 class="list-group-item-heading"><?php echo $v['title']; ?></h4></a>


                        <p class="list-group-item-text">
                            <span>复习次数：<?php echo $v['review_count']; ?></span><span>复习时间：<?php echo $v['review_time']; ?></span><span>复习阶段：</span><span
                                class="<?php echo ($v['review_status']==1)?'text-warning':'text-danger'; ?>"><?php echo $v['status']; ?></span></p>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </div>
            </div>


        </div>
    </div>
</div>

<script>
    $(function () {









    })
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



