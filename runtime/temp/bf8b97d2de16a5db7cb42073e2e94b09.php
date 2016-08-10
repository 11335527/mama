<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:50:"C:\wamp\www\la\public/../app/index\view\me\me.html";i:1468281189;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1467539997;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:58:"C:\wamp\www\la\public/../app/index\view\public\bottom.html";i:1468280201;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468287654;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
        
<div class="container hidden-xs " id="mama-body">
	<div style="text-align: center;padding-top: 50px">
		<div>
			<img src="__S__images/zhoukai.jpg" alt="" height="200px" class="img-circle">
			<h2>周凯</h2>
			<h4>2013年毕业与烟台南山学院，软件工程专业,毕业后做了2年UI,于14年底开始PHP开发。</h4>

		</div>



		<div class="mr_title">
			<span class="mr_title_l"></span><span class="mr_title_c">个人资料</span><span class="mr_title_r"></span>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<table class="table text-center intro-table" >

					<tbody>
					<tr>
						<td>姓名：周凯</td>
						<td>QQ:11335527</td>

					</tr>
					<tr>
						<td>出生：1990</td>
						<td>籍贯:吉林-长春</td>

					</tr>
					<tr>
						<td>院校：烟台南山学院</td>
						<td>专业:软件工程</td>
					</tr>

					<tr>
						<td>就读时间：2010-2013</td>
						<td>学历:专科</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>


		<div>
			<div class="mr_title">
				<span class="mr_title_l"></span><span class="mr_title_c">专业技能</span><span class="mr_title_r"></span>
			</div>
			<dl class="dl-horizontal " style="text-align: left">
				<p><dt>前端</dt>
				<dd>精通HTML、DIV+CSS、Jquery、bootstrap</dd></p>
				<p><dt>PHP</dt>
				<dd>通晓php底层原理，设计模式。精通tp5框架，掌握Memcache/Redis等缓存技术，页面静态化，API接口开发</dd></p>
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

		</div>
		<div>
			<div class="mr_title">
				<span class="mr_title_l"></span><span class="mr_title_c">技能评价</span><span class="mr_title_r"></span>
			</div>


				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#bar-1").dxChart({
							dataSource: [
								{day: "PHP", sales: 92},
								{day: "Mysql", sales: 86},
								{day: "Jquery", sales: 88},
								{day: "TP5", sales: 96},
								{day: "Html/css", sales: 78},
								{day: "Bootstrap", sales: 90},
								{day: "Linux", sales: 66},
								{day: "PS", sales: 88},
								{day: "SVN", sales: 82},
								{day: "Premiere", sales: 30}
							],

							series: {
								argumentField: "day",
								valueField: "sales",
								name: "熟练度",
								type: "bar",
								color: '#5cb85c'
							}
						});


					});


				</script>
				<div id="bar-1" style="height: 440px; width: 100%;"></div>




		</div>

		<div>
			<div class="mr_title">
				<span class="mr_title_l"></span><span class="mr_title_c">工作经历</span><span class="mr_title_r"></span>
			</div>


			<div class="div">
				<h4>亿点时代科技有限公司<small>2016.5-2016.7</small></h4>
				<span class="label label-success">PHP工程师</span>
			</div>
			<div class="div">
				<h4>山东康贝电商<small>2014.8-2016.3</small></h4>
			<span class="label label-success">美工、PHP程序员</span>
			</div>

			<div class="div">
				<h4>LADY百分百淘宝店<small>2014.5-2014.7</small></h4>
				<span class="label label-success">美工</span>
			</div>

			<div class="div">
				<h4>淘宝店-美工设计服务<small>2013.4-2014.4</small></h4>
				<span class="label label-success">美工</span>
			</div>


			<div class="div">
				<h4>青岛晨之晖信息服务有限公司 <small>2012.11-2013.3</small></h4>
				<span class="label label-success">网站销售</span>
			</div>

		</div>

		<div>
			<div class="mr_title">
				<span class="mr_title_l"></span><span class="mr_title_c">自我描述</span><span class="mr_title_r"></span>
			</div>
			<div>
				<p>从设计转编程，不是不爱设计，而是深深的被编程所吸引，编程像是赋予了自己更大的创造力，可以‘设计’更多的东西，我高中是个特别厌烦学习的人，编程让我变了一个人，上班的路上背单词，下班后感觉吃饭都是在挤占学习时间，自己变的越来越宅了。多数的时间都让给了编程，感觉就像跟年龄在赛跑，26岁是人记忆力衰退的分隔线，我尽量争取在有能力学习的时候去学习更多。</p>

			</div>


			<div style="margin-bottom: 150px"></div>

		</div>

	</div>
</div>

<div class="container visible-xs">
	<div   style="text-align: center;padding-top: 50px">
		<img src="__S__images/zhoukai.jpg" alt="" height="150px" class="img-circle">
		<h2>周凯</h2>
		<p>2013年毕业与烟台南山学院，软件工程专业,毕业后做了2年UI,于14年底开始PHP开发。</p>
		<div class="mr_title">
			<span class="mr_title_l" style="width: 30px"></span><span class="mr_title_c">个人资料</span><span class="mr_title_r" style="width: 30px"></span>
		</div>
		<table class="table table-condensed" style="text-align: left;border: 0">

			<tbody>
			<tr>
				<td>姓名：周凯</td>
				<td>QQ:11335527</td>

			</tr>
			<tr>
				<td>出生：1990</td>
				<td>籍贯:吉林-长春</td>

			</tr>
			<tr>
				<td>院校：烟台南山学院</td>
				<td>专业:软件工程</td>
			</tr>

			<tr>
				<td>就读时间：2010-2013</td>
				<td>学历:专科</td>
			</tr>
			</tbody>
		</table>

	</div>
	<div style="text-align: center">
		<div class="mr_title">
			<span class="mr_title_l"  style="width: 30px"></span><span class="mr_title_c">技能评价</span><span class="mr_title_r"  style="width: 30px"></span>
		</div>


		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$("#bar-2").dxChart({
					dataSource: [
						{day: "PHP", sales: 92},
						{day: "Mysql", sales: 86},
						{day: "Jquery", sales: 88},
						{day: "TP5", sales: 96},
						{day: "Html/css", sales: 78},
						{day: "Bootstrap", sales: 90},
						{day: "Linux", sales: 66},
						{day: "PS", sales: 88},
						{day: "SVN", sales: 82},
						{day: "Premiere", sales: 30}
					],

					series: {
						argumentField: "day",
						valueField: "sales",
						name: "熟练度",
						type: "bar",
						color: '#5cb85c'
					}
				});


			});


		</script>
		<div id="bar-2" style="height: 440px; width: 100%;"></div>




	</div>
	<div  style="text-align: center;padding-top: 30px">
		<div class="mr_title">
			<span class="mr_title_l" style="width: 30px"></span><span class="mr_title_c">专业技能</span><span class="mr_title_r" style="width: 30px"></span>
		</div>
		<dl class="dl-horizontal " style="text-align: left">
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
	</div>

	<div style="text-align: center">
		<div class="mr_title">
			<span class="mr_title_l" style="width: 30px"></span><span class="mr_title_c">工作经历</span><span class="mr_title_r" style="width: 30px"></span>
		</div>


		<div class="div">
			<h5>亿点时代科技有限公司<small>2016.5-2016.7</small></h5>
			<span class="label label-success">PHP工程师</span>
		</div>
		<div class="div">
			<h5>山东康贝电商<small>2014.8-2016.3</small></h5>
			<span class="label label-success">美工、PHP程序员</span>
		</div>

		<div class="div">
			<h5>LADY百分百淘宝店<small>2014.5-2014.7</small></h5>
			<span class="label label-success">美工</span>
		</div>

		<div class="div">
			<h5>淘宝店-美工设计服务<small>2013.4-2014.4</small></h5>
			<span class="label label-success">美工</span>
		</div>


		<div class="div">
			<h5>青岛晨之晖信息服务有限公司 <small>2012.11-2013.3</small></h5>
			<span class="label label-success">网站销售</span>
		</div>

	</div>

	<div style="text-align: center">
		<div class="mr_title">
			<span class="mr_title_l" style="width: 30px"></span><span class="mr_title_c">自我描述</span><span class="mr_title_r" style="width: 30px"></span>
		</div>
		<div>
			<p>从设计转编程，不是不爱设计，而是深深的被编程所吸引，编程像是赋予了自己更大的创造力，可以‘设计’更多的东西，我高中是个特别厌烦学习的人，编程让我变了一个人，上班的路上背单词，下班后感觉吃饭都是在挤占学习时间，自己变的越来越宅了。多数的时间都让给了编程，感觉就像跟年龄在赛跑，26岁是人记忆力衰退的分隔线，我尽量争取在有能力学习的时候去学习更多。</p>

		</div>




	</div>
	<div style="margin-bottom: 50px"></div>
</div>


<footer class="footer bg-default" style="padding: 10px 0;display: none">
    <div class="container">
        <p class="text-muted" style="margin: 0"><a href="__SITE__log" target="_blank">MaMa</a>&nbsp;|&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank">鲁ICP备15034061号-1</a></p>
    </div>
</footer>
<script src="__S__/js/globalize.min.js"></script>
<script src="__S__/js/dx.chartjs.js"></script>
<script>
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



