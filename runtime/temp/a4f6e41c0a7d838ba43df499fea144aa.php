<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:53:"C:\wamp\www\la\public/../app/index\view\note\art.html";i:1468475065;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1468576954;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:58:"C:\wamp\www\la\public/../app/index\view\public\bottom.html";i:1468548897;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468287654;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
    <link href="__S__highlight/styles/tomorrow.css" rel="stylesheet">



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
        <div class="container" id="mama-body">




    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12 bg-default" style="min-height: 860px">

            <div class="page-header" style="border-bottom: 1px solid #ddd;margin-top: 20px ">
                <h3 style="margin-top: 0" ><?php echo $info['title']; ?>
                    <small><span class="label label-success"><?php echo $info['dirName']['name']; ?></span></small>
                </h3>
                <ul class="list-inline text-muted" style="margin-bottom: 0px;">
                    <li><small>创建时间：<span class="text-primary"><?php echo $info['create_time']; ?></span></small></li>
                    <li  class="hidden-xs"><small>下次复习时间：<span class="text-primary"><?php echo $info['review_time']; ?></span></small></li>
                    <li><small>复习次数：<span class="text-primary" id="review_count"><?php echo $info['review_count']; ?></span></small></li>
                    <li  class="hidden-xs"><small>复习状态：<span class="text-danger" id="review_status"><?php echo $info['status']; ?></span></small></li>
                    <li class="pull-right hidden-xs"><a class="text-primary " href="__SITE__edit/<?php echo $info['id']; ?>"><small>编辑</small></a></li>

                </ul>
            </div>


            <div class="art-body">
                <?php echo $info['content']; ?>
            </div>
            <div class="hidden-xs">
                <div class="hs-btn-float hvr-buzz" style="bottom: 240px" ><a href="#" style="color: white;text-decoration: none"><p>返回</p><p>顶部</p></a></div>
                <div class="hs-btn-float hvr-buzz" style="bottom: 180px" ><a href="__SITE__edit/<?php echo $info['id']; ?>" style="color: white;text-decoration: none"><p>编辑</p><p>笔记</p></a></div>
                <?php if($info['review_count'] > '6'): ?>
                <div class="hs-btn-float " style="bottom: 120px;background-color: #888" ><p>不再</p><p>复习</p></div>
                <div class="hs-btn-float  "  style="background-color: #888"><p>复习</p><p>完成</p></div>
                <?php else: ?>

                <div class="hs-btn-float hvr-buzz not-review" data-id="<?php echo $info['id']; ?>" style="bottom: 120px" ><p>不再</p><p>复习</p></div>
                <div class="hs-btn-float hvr-buzz review-btn" data-id="<?php echo $info['id']; ?>"><p>复习</p><p>完成</p></div>
                <?php endif; ?>

            </div>

        </div>

        <div class="visible-xs" style="margin-bottom: 1px">&nbsp;</div>
        <div class=" visible-xs text-center" style="margin-bottom:30px;">
            <a class="btn btn-success hvr-round-corners btn-sm" href="#" style="color: white;text-decoration: none">返回顶部</a>
            <!--<a class="btn btn-success btn-sm" href="__SITE__edit/<?php echo $info['id']; ?>" style="color: white;text-decoration: none">编辑笔记</a>-->
            <a href="javascript:void (0);"  class="btn btn-success btn-sm  hvr-round-corners review-btn"  data-id="<?php echo $info['id']; ?>">复习完成</a>
        </div>

        <div class="col-md-3" style="padding-top: 0">
            <div>


                <textarea name="text" class="form-control" id="digest" style=" resize: none;margin-bottom: 10px" cols="30" rows="3"></textarea>
                <div class=" text-right">

                    <a href="javascript:void (0);" id="digest-confirm"  class="btn btn-success btn-sm hvr-round-corners">笔记摘要</a>
                </div>

            </div>
            <div class="list-group" id="digest-list">

                <?php foreach($info['digest'] as $vo): ?>
                <div  class="list-group-item">
                    <p class="list-group-item-text"><?php echo $vo['content']; ?></p>
                    <p style="margin-bottom: 0"><small class="text-primary"><span ><?php echo $vo['create_time']; ?></span></small></p></div>

                <?php endforeach; ?>
            </div>


            <div class="list-group" id="art-list">
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">

                       类目最新笔记
                    </h4>
                </div>
                <?php foreach($artList as $vo): ?>
                <abbr title="<?php echo $vo['title']; ?>" style="border: none;cursor:pointer">
                    <a href="__SITE__art/id/<?php echo $vo['id']; ?>" data-id="<?php echo $vo['id']; ?>" class="list-group-item">
                        <p class="list-group-item-text">
                            <?php echo $vo['title']; ?>
                        </p>
                    </a>
                </abbr>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>
<footer class="footer bg-default" style="padding: 10px 0;display: none">
    <div class="container">
        <p class="text-muted" style="margin: 0"><a href="__SITE__log" target="_blank">MaMa</a>&nbsp;|&nbsp;<a
                href="__SITE__contact">联系码麻</a>&nbsp;|&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank">鲁ICP备15034061号-1</a></p>
    </div>
</footer>
<script>

    window.onload=function(){

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

        $('.art-body img').addClass('img-responsive');

        $('body').on('dblclick','.art-body img',function(){
            var src=$(this).attr('src');
            var $img=$('#img-modal').find('img');
            $img.attr('src',src);
            $('#img-modal').modal();
        });
        //复习按钮

        $('.review-btn').one('click',function(){
              var id=$(this).attr('data-id');
            $.post('__INDEX__note/review',{id:id},function(msg){
                switch(msg.status){
                    case 1:
                        $('.review-btn').css('background-color','#888');
                        var count=$('#review_count');
                        var num=parseInt(count.html(),10)+1;
                        count.html(num);

                        if(num==7){
                            $('#review_status').html('复习完成');
                        }
                        break;

                    case 3:
                        $('#alert-modal').modal();
                        break;
                }

            })
        });

        $('.not-review').one('click',function(){
            var id=$(this).attr('data-id');
            $.post('__INDEX__note/reviewComplete',{id:id},function(msg){
                switch(msg.status){
                    case 1:
                        $('.not-review').css('background-color','#888');
                        $('.review-btn').css('background-color','#888');
                        var count=$('#review_count').html(7);
                            $('#review_status').html('复习完成');
                        break;

                    case 3:
                        $('#alert-modal').modal();
                        break;
                }

            })
        });

        //添加摘要
        $('#digest-confirm').on('click', function () {

            var content= $('#digest').val(),
                    aid="<?php echo $_GET['id'];?>";
            $.post('__INDEX__note/addDigest', {
                content:content,
                aid: aid
            }, function (msg) {

                var $digest=$('#digest');

                switch(msg.status){
                    case 1:
                        var a=$(' <a href="#" class="list-group-item">'+
                                '<p class="list-group-item-text">'+content+'</p>'+
                                '<p style="margin-bottom: 0"><small class="text-primary"><span >'+msg.content.create_time+'</span></small></p></a>');
                        $('#digest-list').prepend(a);
                        $digest.val('');
//                        var alert=$('<div class="alert alert-success" style="display: none;margin-bottom: 5px"><strong>成功</strong>添加成功</div>');
//                        $digest.before(alert);
//                        alert.slideDown('fast');
//                        setTimeout(function(){
//                            alert.slideUp('fast');
//                            alert.remove();
//                        },1000);

                        break;
                    case 0:
                        var alert=$('<div class="alert alert-warning" style="display: none;margin-bottom: 5px"><strong>警告！</strong>'+msg.content+'</div>');
                        $digest.before(alert);
                        alert.slideDown('fast');
                        setTimeout(function(){
                            alert.slideUp('fast');
                            alert.remove();
                        },1000);
                        break;
                    case 3:
                        $('#alert-modal').modal();
                        break;
                }



            });
        });

    };
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



<!-- 模态框（Modal） -->
<div class="modal fade" id="img-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" style="top: 0;padding-top: 10px;padding-bottom: 10px;overflow: scroll">


            <img src="" alt=""  style="margin: auto;display: block">

</div>
<script>


    $('#img-modal img').on('click',function(){
        $('#img-modal').modal('hide');
    });
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



