<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:54:"C:\wamp\www\la\public/../app/index\view\note\edit.html";i:1467340503;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1467539997;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468286762;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
        <div class="container">



    <link rel="stylesheet" href="__S__editor/dist/css/wangEditor.min.css">
    <script src="__S__editor/dist/js/wangEditor.min.js"></script>

    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12 " style="min-height: 860px;padding-top: 30px">





                    <form id="form">
                        <input type="text" class="art-title" name="title" value="<?php echo $info['title']; ?>">
                        <input type="hidden" name="id" id="art-id" value="<?php echo $info['id']; ?>">
                        <!-- 加载编辑器的容器 -->
                        <div id="editor" style="height: 1207px;"><?php echo $info['content']; ?></div>

                    </form>





            <div class="hs-btn-float hvr-pulse-shrink" style="z-index: 1" id="art-save"><p>提交</p><p>编辑</p></div>

        </div>

        <div class="col-md-3">
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




        </div>
    </div>
</div>

<script>
    $(function () {

        //初始化编辑器
        var editor = new wangEditor('editor');
        editor.config.uploadImgUrl = '__INDEX__image/editorUpload';
        editor.config.emotions = {
            // 支持多组表情

            // 第一组，id叫做 'default'
            'default': {
                title: '默认',  // 组名称
                data: [  // data 还可以直接赋值为一个表情包数组
                    // 第一个表情
                    {
                        'icon': '/static/editor/qq_expression/1.gif',
                        'value': '[惊讶]'
                    },
                    // 第二个表情
                    {
                        'icon': 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/60/horse2_thumb.gif',
                        'value': '[神马]'
                    }
                    // 下面还可以继续，第三个、第四个、第N个表情。。。
                ]
            }
        };
        editor.create();
        //保存笔记


        $('#art-save').on('click', function () {

            var fd = new FormData($('#form')[0]);

            //找出内容中的图片
            var content = editor.$txt.html();
            $(content).find('img').each(function (index) {
                fd.append('src[]', $(this).attr('src'));
            });



            fd.append('content', content);

            $.ajax({
                type: 'post',
                url: '__INDEX__note/saveArt',
                data: fd,
                dataType: 'json',
                success: function (msg) {
                    //令牌





                    var $editor = $(".art-editor");
                    switch (msg.status){
                        case 1:

                         window.self.location=document.referrer;

                            break;
                        case 0:
                            var alert=$('<div class="alert alert-warning" style="display: none"><strong>警告！</strong>'+msg.content+'</div>');
                            $editor.prepend(alert);
                            alert.slideDown('fast');
                            setTimeout(function(){
                                alert.slideUp('fast');
                                alert.remove();
                            },2000);
                            break;
                        case 3:
                            $('#alert-modal').modal();

                            break;
                    }

                },
                processData: false,  // 告诉jQuery不要去处理发送的数据
                contentType: false // 告诉jQuery不要去设置Content-Type请求头
            });

        });

        //复习按钮

        $('#review-btn').one('click',function(){
              var id=$(this).attr('data-id');
            $.post('__INDEX__note/review',{id:id},function(msg){
                switch(msg.status){
                    case 1:
                        $('#review-btn').css('background-color','#bbb');
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



<!-- 模态框（Modal） -->
<div class="modal fade" id="img-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" style="top: 1%;bottom: 1%;overflow: scroll">


            <img src="" alt="" class="center-block">

</div>
<script>

//    var _w = parseInt($(window).width());//获取浏览器的宽度
//    $(".new_mess_c img").each(function(i){
//        var img = $(this);
//        var realWidth;//真实的宽度
//        var realHeight;//真实的高度
////这里做下说明，$("<img/>")这里是创建一个临时的img标签，类似js创建一个new Image()对象！
//        $("<img/>").attr("src", $(img).attr("src")).load(function() {
//            /*
//             如果要获取图片的真实的宽度和高度有三点必须注意
//             1、需要创建一个image对象：如这里的$("<img/>")
//             2、指定图片的src路径
//             3、一定要在图片加载完成后执行如.load()函数里执行
//             */
//            realWidth = this.width;
//            realHeight = this.height;
////如果真实的宽度大于浏览器的宽度就按照100%显示
//            if(realWidth>=_w){
//                $(img).css("width","100%").css("height","auto");
//            }
//            else
//        });
//    });

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



