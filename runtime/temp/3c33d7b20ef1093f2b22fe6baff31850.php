<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:56:"C:\wamp\www\la\public/../app/index\view\index\index.html";i:1468503181;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1468576954;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:58:"C:\wamp\www\la\public/../app/index\view\public\bottom.html";i:1468548897;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468287654;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
            <div class="col-md-12 hs-menu">

                <div style="border-bottom: 1px solid #ddd"><h4 style="margin-left: 10px">导航</h4></div>
                <div style="  border-bottom:1px solid #ddd;">
                <span class="text-primary pull-left" style="padding: 15px">分类</span>
                <div class="hs-art-menu" ><ul class="list-inline" style="margin-bottom: 0">


                    <li><a href="__SITE__" class="<?php echo ($dir_id==0)?'btn btn-success btn-xs hvr-round-corners':''; ?>" >全部</a></li>
                        <?php foreach($dir as $vo): ?>

                    <li><a href="__SITE__dir/<?php echo $vo['id']; ?>"  class="<?php echo ($dir_id==$vo['id'])?'btn btn-success btn-xs hvr-round-corners':''; ?>"><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; ?>


                </ul></div>
                    </div>
                <div style="  border-bottom:1px solid #ddd;">
                    <span class="text-primary pull-left" style=" padding: 15px">菜单</span>
                    <div class="hs-art-menu" >
                        <ul class="list-inline" style="margin-bottom: 0">

                            <?php foreach($son as $vo): ?>

                            <li><a href="__SITE__dir/<?php echo $vo['id']; ?>"  class="<?php echo ($dir_id==$vo['id'])?'btn btn-success btn-xs hvr-round-corners':''; ?>" ><?php echo $vo['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="menu-footer">

                    <ul class="list-inline">
                        <li><a href="__SITE__dir/<?php echo !empty($dir_id)?$dir_id:'0'; ?>" class="<?php echo !empty($_GET['sort'])?'':'btn btn-success btn-xs hvr-round-corners'; ?>" style="margin-right: 30px;padding-left: 5px ;">最新</a></li>
                        <li><a href="__SITE__dir/<?php echo !empty($dir_id)?$dir_id:'0'; ?>/sort/review" class="<?php echo !empty($_GET['sort'])?'btn btn-success btn-xs hvr-round-corners':''; ?>" >复习</a></li>


                    </ul>
                </div>

            </div>

            <div class="col-md-9">
                <div class="list-group">


                    <?php if(is_array($article) || $article instanceof \think\Collection): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="list-group-item">

                        <h4 class="list-group-item-heading"><a href="__SITE__art/id/<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a>&nbsp;<small><span class="label label-success"><?php echo $v['dirName']['name']; ?></span></small></h4>

                        <ul class="list-inline text-muted" style="margin-bottom: 0px;">
                            <li class="hidden-xs"><small>创建时间：<span class="text-primary"><?php echo $v['create_time']; ?></span></small></li>
                            <li ><small>复习时间：<span class="text-primary"><?php echo $v['review_time']; ?></span></small></li>
                            <li><small>复习次数：<span class="text-primary" id="review_count"><?php echo $v['review_count']; ?></span></small></li>
                            <li  class="hidden-xs"><small>复习状态：<span class="text-danger" id="review_status"><?php echo $v['status']; ?></span></small></li>


                        </ul>

                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <?php echo $article->render(); ?>
                </div>
            </div>
            <div class="col-md-3">

                <div class="list-group" id="hs-plan">
                    <div class="list-group-item ">
                        <h4>学习清单 <span class="fa fa-plus-square-o pull-right" id="plan-plus"
                                   style="line-height: 22px;margin-right: 0"></span></h4>
                    </div>
                    <?php foreach($plan as $k=>$vo): ?>
                    <div data-id="<?php echo $vo['id']; ?>" class="list-group-item plan-list"><strong class="text-primary"><?php echo $k+1; ?>.</strong>&nbsp;<?php echo $vo['text']; ?></div>

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
<script src="http://apps.bdimg.com/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="__S__/smartMenu/smartMenu.css">
<script src="__S__/smartMenu/jquery-smartMenu-min.js"></script>
<script>
    $(function () {

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
            $footer.css('margin-top', '10px');
        }
        $footer.fadeIn("slow");

        var $plan = $('#hs-plan');

        //右键菜单
        var data = [[{
            text: "删除",
            func: function () {
                var $this = $(this);
                var id = $this.attr('data-id');
                console.log(id);

                $.post('__INDEX__note/delPlan',{id:id},function(msg){
                    switch (msg.status){
                        case 1:
                            $this.remove();
                            break;
                        case 3:
                            $('#alert-modal').modal();
                            break;
                    }

                })

            }
        }]];
        $plan.find('.plan-list').smartMenu(data);









        //移动plan事件
        $plan.sortable({
            cursor: "move",
            items: ".plan-list", //只是li可以拖动
            opacity: 0.6, //拖动时，透明度为0.6
            revert: true, //释放时，增加动画
            update: function (event, ui) { //更新排序之后
                var str = '';
                $('.plan-list').each(function () {
                    var dataId = $(this).attr('data-id');
                    str = str + dataId + ',';
                });
                $.post('__INDEX__note/SortPlan', {order: str},function(){

                });
            }
        });


        //添加plan
        $('#plan-plus').on('click', function () {

            var $this=$(this).parent().parent();
            var input = $('<div class="list-group-item plan-list"><input type="text" class="form-control hs-input"></div>');
            $this.after(input);
        });


        $plan.on('dblclick', '.plan-list', function () {
            var $this = $(this);
            var text = $this.text();
            var input = $('<input type="text" class="form-control hs-input" value="' + text + '">');
            $this.empty().append(input);
            input.focus();
        });

        $plan.on('blur', '.hs-input', function () {
            var $this = $(this).parent();
            var val = $(this).val();
            var id = $this.attr('data-id');
            var type= $this.attr('data-type');

            $.post('__INDEX__note/renamePlan', {id: id, text: val}, function (msg) {

                switch (msg.status) {
                    case 1:
                        $this.text(val);
                        break;
                    case 2:
                        $this.attr('data-id', msg.content);
                        $this.text(val);
                        break;
                    case 3:
                        $('#alert-modal').modal();
                        break;
                    case 0:

                        var alert = $('<div class="alert alert-warning" style="display: none"><strong>警告！</strong>' + msg.content + '</div>');
                        $this.before(alert);
                        alert.slideDown('fast');
                        setTimeout(function () {
                            alert.slideUp('fast');
                            alert.remove();
                        }, 2000);
                        break;
                }

            });

        });


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



