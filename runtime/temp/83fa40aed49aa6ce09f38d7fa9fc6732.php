<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:60:"C:\wamp\www\la\public/../app/index\view\project\project.html";i:1468230227;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1467539997;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468287654;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
        <!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <link rel="stylesheet" type="text/css" href="__S__3d-show/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="__S__3d-show/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="__S__3d-show/css/component.css" />
    <script src="__S__3d-show/js/modernizr.custom.js"></script>
</head>
<body class="demo-1">
<canvas id="Mycanvas" class="hidden-xs" style="margin-top: -20px"></canvas>
<main class="hidden-xs" >

    <div class="isolayer isolayer--scroll1 isolayer--shadow" style="top: -200px;">
        <ul class="grid grid--effect-flip">
            <li class="grid__item">
                <a class="grid__link" href="__SITE__haier">
                    <img class="grid__img layer" src="__S__3d-show/img/project/haier_2.jpg" alt="Canvas Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/wireframe.png" alt="Wireframe Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/haier_1.jpg" alt="01" />
                    <span class="grid__title">海尔全球员工沟通平台</span>
                </a>
            </li>
            <li class="grid__item">
                <a class="grid__link" href="http://www.topp123.com/anti">
                    <img class="grid__img layer" src="__S__3d-show/img/canvas.png" alt="Canvas Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/anti_2.jpg" alt="Wireframe Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/anti_1.jpg" alt="021" />
                    <span class="grid__title">锐登溯源防伪系统</span>
                </a>
            </li>
            <li class="grid__item">
                <a class="grid__link" href="__SITE__proIntro">
                    <img class="grid__img layer" src="__S__3d-show/img/canvas.png" alt="Canvas Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/abc_2.jpg" alt="Wireframe Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/abc_1.jpg" alt="03" />
                    <span class="grid__title">海尔词典</span>
                </a>
            </li>
            <li class="grid__item">
                <a class="grid__link" href="http://www.zcool.com.cn/u/2068596">
                    <img class="grid__img layer" src="__S__3d-show/img/project/zcool_3.jpg" alt="Canvas Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/zcool_2.jpg" alt="Wireframe Dummy" />
                    <img class="grid__img layer" src="__S__3d-show/img/project/zcool_1.jpg" alt="03" />
                    <span class="grid__title">设计作品</span>
                </a>
            </li>


        </ul>
    </div>
</main>
<a class="pater hidden-xs" href="#" style="font-size: 12px;">
    <p class="pater__desc">项目案例</p>
</a>


<div class="container visible-xs" >
    <div  style="background-color: white;padding: 10px;margin-bottom: 20px">
        <a href="__SITE__proIntro"><img src="__S__3d-show/img/project/abc_1.jpg" alt="" class="img-responsive"></a>

        <h4 style="margin-top: 10px;padding-top:10px;border-top: 1px dashed #9d9d9d"><a class="text-primary" href="__SITE__proIntro">海尔词典</a></h4>
        <p>负责模块：<span class="text-primary">API,后台</span>&nbsp;&nbsp;开发周期：<span class="text-primary">30天</span></p>
    </div>
    <div style="background-color: white;padding: 10px;margin-bottom: 20px">
        <a href="http://www.topp123.com/haier"><img src="__S__3d-show/img/project/haier_1.jpg" alt="" class="img-responsive"></a>

        <h4 style="margin-top: 10px;padding-top:10px;border-top: 1px dashed #9d9d9d"><a class="text-primary" href="__SITE__haier">海尔全球沟通平台</a>
        </h4>
        <p>负责模块：<span class="text-primary">全栈</span>&nbsp;&nbsp;开发周期：<span class="text-primary">40天</span></p>
    </div>
    <div style="background-color: white;padding: 10px;margin-bottom: 20px">
        <a href="http://www.topp123.com/anti"><img src="__S__3d-show/img/project/anti_1.jpg" alt="" class="img-responsive"></a>

        <h4 style="margin-top: 10px;padding-top:10px;border-top: 1px dashed #9d9d9d"><a class="text-primary" href="http://www.topp123.com/anti">锐登溯源防伪系统</a>
        </h4>
        <p>负责模块：<span class="text-primary">全栈</span>&nbsp;&nbsp;开发周期：<span class="text-primary">60天</span></p>
    </div>
    <div style="background-color: white;padding: 10px;margin-bottom: 20px">
        <a href="http://www.zcool.com.cn/u/2068596"><img src="__S__3d-show/img/project/zcool_1.jpg" alt="" class="img-responsive"></a>

        <h4 style="margin-top: 10px;padding-top:10px;border-top: 1px dashed #9d9d9d"><a class="text-primary" href="http://www.zcool.com.cn/u/2068596">设计作品</a>
        </h4>
        <p>负责模块：<span class="text-primary">全栈</span>&nbsp;&nbsp;开发周期：<span class="text-primary">60天</span></p>
    </div>
</div>
<script src="__S__3d-show/js/imagesloaded.pkgd.min.js"></script>
<script src="__S__3d-show/js/masonry.pkgd.min.js"></script>
<script src="__S__3d-show/js/dynamics.min.js"></script>
<script src="__S__3d-show/js/classie.js"></script>
<script src="__S__3d-show/js/animOnScroll.js"></script>
<script src="__S__3d-show/js/main.js"></script>

<script>
    //定义画布宽高和生成点的个数
    var WIDTH = window.innerWidth, HEIGHT = window.innerHeight, POINT = 35;

    var canvas = document.getElementById('Mycanvas');
    canvas.width = WIDTH,
            canvas.height = HEIGHT;
    var context = canvas.getContext('2d');
    context.strokeStyle = 'rgba(0,0,0,0.2)',
            context.strokeWidth = 1,
            context.fillStyle = 'rgba(0,0,0,0.1)';
    var circleArr = [];

    //线条：开始xy坐标，结束xy坐标，线条透明度
    function Line (x, y, _x, _y, o) {
        this.beginX = x,
                this.beginY = y,
                this.closeX = _x,
                this.closeY = _y,
                this.o = o;
    }
    //点：圆心xy坐标，半径，每帧移动xy的距离
    function Circle (x, y, r, moveX, moveY) {
        this.x = x,
                this.y = y,
                this.r = r,
                this.moveX = moveX,
                this.moveY = moveY;
    }
    //生成max和min之间的随机数
    function num (max, _min) {
        var min = arguments[1] || 0;
        return Math.floor(Math.random()*(max-min+1)+min);
    }
    // 绘制原点
    function drawCricle (cxt, x, y, r, moveX, moveY) {
        var circle = new Circle(x, y, r, moveX, moveY)
        cxt.beginPath()
        cxt.arc(circle.x, circle.y, circle.r, 0, 2*Math.PI)
        cxt.closePath()
        cxt.fill();
        return circle;
    }
    //绘制线条
    function drawLine (cxt, x, y, _x, _y, o) {
        var line = new Line(x, y, _x, _y, o)
        cxt.beginPath()
        cxt.strokeStyle = 'rgba(0,0,0,'+ o +')'
        cxt.moveTo(line.beginX, line.beginY)
        cxt.lineTo(line.closeX, line.closeY)
        cxt.closePath()
        cxt.stroke();

    }
    //初始化生成原点
    function init () {
        circleArr = [];
        for (var i = 0; i < POINT; i++) {
            circleArr.push(drawCricle(context, num(WIDTH), num(HEIGHT), num(15, 2), num(10, -10)/40, num(10, -10)/40));
        }
        draw();
    }

    //每帧绘制
    function draw () {
        context.clearRect(0,0,canvas.width, canvas.height);
        for (var i = 0; i < POINT; i++) {
            drawCricle(context, circleArr[i].x, circleArr[i].y, circleArr[i].r);
        }
        for (var i = 0; i < POINT; i++) {
            for (var j = 0; j < POINT; j++) {
                if (i + j < POINT) {
                    var A = Math.abs(circleArr[i+j].x - circleArr[i].x),
                            B = Math.abs(circleArr[i+j].y - circleArr[i].y);
                    var lineLength = Math.sqrt(A*A + B*B);
                    var C = 1/lineLength*7-0.009;
                    var lineOpacity = C > 0.03 ? 0.03 : C;
                    if (lineOpacity > 0) {
                        drawLine(context, circleArr[i].x, circleArr[i].y, circleArr[i+j].x, circleArr[i+j].y, lineOpacity);
                    }
                }
            }
        }
    }

    //调用执行
    window.onload = function () {
        init();
        setInterval(function () {
            for (var i = 0; i < POINT; i++) {
                var cir = circleArr[i];
                cir.x += cir.moveX;
                cir.y += cir.moveY;
                if (cir.x > WIDTH) cir.x = 0;
                else if (cir.x < 0) cir.x = WIDTH;
                if (cir.y > HEIGHT) cir.y = 0;
                else if (cir.y < 0) cir.y = HEIGHT;

            }
            draw();
        }, 16);
    }

</script>
<script>
    (function() {
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        [].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
            new IsoGrid(el, {
                type : 'scrollable',
                transform : 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
                stackItemsAnimation : {
                    properties : function(pos) {
                        return {
                            translateZ: (pos+1) * 50,
                            rotateZ: getRandomInt(-3, 3)
                        };
                    },
                    options : function(pos, itemstotal) {
                        return {
                            type: dynamics.bezier,
                            duration: 500,
                            points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
                            //delay: (itemstotal-pos-1)*40
                        };
                    }
                },
                onGridLoaded : function() {
                    classie.add(document.body, 'grid-loaded');
                }
            });
        });
    })();
</script>
</body>
</html>

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



