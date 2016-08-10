<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:54:"C:\wamp\www\la\public/../app/index\view\note\note.html";i:1468396191;s:51:"C:\wamp\www\la\public/../app/index\view\layout.html";i:1466512850;s:58:"C:\wamp\www\la\public/../app/index\view\public\header.html";i:1468576954;s:55:"C:\wamp\www\la\public/../app/index\view\public\nav.html";i:1467556559;s:57:"C:\wamp\www\la\public/../app/index\view\public\modal.html";i:1468287654;s:58:"C:\wamp\www\la\public/../app/index\view\public\footer.html";i:1468219892;}*/ ?>
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
        <link rel="stylesheet" href="__S__/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">


<script type="text/javascript" src="__S__/zTree/js/jquery.ztree.all-3.5.js"></script>

<div id="rMenu">
    <ul class="smart_menu_ul">

        <li class="smart_menu_li" id="m_check" onclick="setEdit();">重命名</li>
        <li class="smart_menu_li" id="m_del" onclick="removeTreeNode();">删除目录</li>
        <li class="smart_menu_li" id="m_folder" onclick="newFolder();">新建文件夹</li>

    </ul>
</div>



    <div class="row">


        <div class="col-md-2" style="height: 100%;margin-top: -20px;padding-top: 20px">
            <ul id="tree" class="ztree"></ul>
        </div>

        <div class="col-md-2" style="height: 1200px;background-color: #fbfbfb;padding: 20px 8px;margin-top: -20px">
            <div style="margin: 8px 0">
                <a class="btn btn-success btn-sm hvr-round-corners" id="new-art">新建笔记</a>
                <a class="btn btn-primary btn-sm hvr-round-corners" id="art-save">保存</a>
            </div>
            <div class="list-group" id="art-list">

                <?php foreach($artList as $vo): ?>
                <abbr title="<?php echo $vo['title']; ?>" style="border: none;cursor:pointer">
                    <a href="javascript:void (0);" data-id="<?php echo $vo['id']; ?>" class="list-group-item">
                        <p class="list-group-item-text">
                            <?php echo $vo['title']; ?>
                        </p>
                    </a>
                </abbr>
                <?php endforeach; ?>
                <?php echo $artList->render(); ?>
            </div>
        </div>
        <link rel="stylesheet" href="__S__editor/dist/css/wangEditor.min.css">
        <script src="__S__editor/dist/js/wangEditor.min.js"></script>
        <div class="col-md-8 art-editor" style="background-color: white;margin-top: -20px">

            <form id="form">
                <input type="text" class="art-title" name="title" placeholder="请输入标题">
                <input type="hidden" name="id" id="art-id">
                <!-- 加载编辑器的容器 -->
                <div id="editor" style="height: 1176px;"></div>

            </form>

            <div class="hs-btn-float hvr-pulse-shrink" style="z-index: 1" id="art-save2"><p>保存</p><p>笔记</p></div>
        </div>
    </div>




<!--右键菜单-->
<link rel="stylesheet" href="__S__/smartMenu/smartMenu.css">
<script src="__S__/smartMenu/jquery-smartMenu-min.js"></script>

<SCRIPT type="text/javascript">

var $art_list=$('#art-list');
    //右键菜单
    var data = [[{
        text: "阅读",
        func: function () {
            var $this = $(this);
            var id = $this.attr('data-id');


      window.location.href='__SITE__art/id/'+id;

        }
    },{
        text: "删除",
        func: function () {
            var $this = $(this);
            var id = $this.attr('data-id');


            $.post('__INDEX__note/delArt',{id:id},function(msg){
                switch (msg.status){
                    case 1:
                        $this.parent().remove();
                        break;
                    case 3:
                        $('#alert-modal').modal();
                        break;
                }

            })

        }
    }]];
$art_list.find('.list-group-item').smartMenu(data);












    //左侧菜单标题缩写
    $('abbr').each(function(){
        var str=$(this).attr('title');
        if(document.body.clientWidth<=1366){
            if(str.length>11){
                $(this).find('p').html(str.substr(0,11)+'…');
            }
        }else if(document.body.clientWidth>1366&&document.body.clientWidth<=1920){
            if(str.length>17){
                $(this).find('p').html(str.substr(0,17)+'…');
            }
        }


    });

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




    //新建笔记
    $('#new-art').on('click',function(){
        $('.art-title').val('');
        $('#art-id').val('');
        editor.$txt.html('<p><br></p>');
    });



    //保存笔记

    $('#art-save2').on('click', function () {
        $('#art-save').trigger('click');
    });
    $('#art-save').on('click', function () {

        var fd = new FormData($('#form')[0]);

        //找出内容中的图片
        var content = editor.$txt.html();
        $(content).find('img').each(function (index) {
            fd.append('src[]', $(this).attr('src'));
        });

        fd.append('dir_id', dir_id);

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
                        if (msg.content.type == 1) {

                            var text_title=msg.content.data.title;
                            if(text_title.length>16){
                                var text=text_title.substr(0,15)+'...';
                            }
                            else {
                                var text=text_title;
                            }
                            var a = $('<abbr title="'+msg.content.data.title+'" style="border: none;cursor:pointer">'+
                                    '<a href="javascript:void (0);" data-id="<?php echo $vo['id']; ?>" class="list-group-item">'+
                                    '<p class="list-group-item-text">'+text+
                                    '</p></a></abbr>');
                            $('#art-list').prepend(a);

                            var alert=$('<div class="alert alert-success" style="display: none"><strong>成功！</strong>新增成功</div>');
                            $editor.prepend(alert);
                            alert.slideDown('fast');
                            setTimeout(function(){
                                alert.slideUp('fast');
                                alert.remove();
                            },2000);
                            $('#art-id').val(msg.content.data.id);

                        } else {
                            var title = $('.art-title').val(),
                                    id = $('#art-id').val();
                            $('.list-group-item[data-id="' + id + '"]>.list-group-item-text').html(title);

                            var alert=$('<div class="alert alert-success" style="display: none"><strong>成功！</strong>更新成功</div>');
                            $editor.prepend(alert);
                            alert.slideDown('fast');
                            setTimeout(function(){
                                alert.slideUp('fast');
                                alert.remove();
                            },2000);
                        }
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



    //读取笔记内容
    $art_list.on('click','.list-group-item',function(){
        var id=$(this).attr('data-id');
        $.post('__INDEX__note/readArt',{id:id},function(msg){

            $('.art-title').val(msg.title);
            $('#art-id').val(msg.id);
            editor.$txt.html(msg.content);

        },'json');
    });


    var setting = {
        view: {
            dblClickExpand: false
        },

        callback: {
//            beforeClick: beforeClick,
            onClick: onClick,
//            onAsyncSuccess: onAsyncSuccess,
            onRightClick: OnRightClick,
            beforeRename: BeforeRename

        },
        data: {
            simpleData: {
                enable: true,
                idKey: "id",
                pIdKey: "pid"
            }
        }
    };

    var zNodes=<?php echo $dirList; ?>;
    var dir_id = 1;
    var aid = 1;
    var zTree, rMenu;






    function onClick(event, treeId, treeNode, clickFlag) {
        dir_id = treeNode.id;

        //       ajax实现无刷新页面同步地址栏;
        var state = {
//            title: '无刷新页面',
//            url: "__SITE__note"
        };
        window.history.pushState(state, '上传标题', "__SITE__note/" + dir_id);

        $.post('__INDEX__note/ajaxNote',{dir_id:dir_id},function(msg){

            var $art_list=$('#art-list');
            $art_list.empty();
            for(var key in msg){

                console.log(msg[key]);

                var str=msg[key].title;
                console.log(str);
                if(document.body.clientWidth<=1366){
                    if(str.length>11){
                        str=str.substr(0,11)+'…';
                    }
                }else if(document.body.clientWidth>1366&&document.body.clientWidth<=1920){
                    if(str.length>18){
                        str=str.substr(0,18)+'…';
                    }
                }





                var abbr=$(' <abbr title="'+msg[key].title+'" style="border: none;cursor:pointer">'+
                        '<a href="javascript:void (0);" data-id="'+msg[key].id+'" class="list-group-item">'+
                        '<p class="list-group-item-text">'+str+
                        ' </p></a></abbr>');

                $art_list.append(abbr);
            }
        });



    }
    function OnRightClick(event, treeId, treeNode) {
       dir_id=treeNode.id;
        if (!treeNode && event.target.tagName.toLowerCase() != "button" && $(event.target).parents("a").length == 0) {
            zTree.cancelSelectedNode();
            showRMenu("root", event.clientX, event.clientY);
        } else if (treeNode && !treeNode.noR) {
            zTree.selectNode(treeNode);
            showRMenu("node", event.clientX, event.clientY);
        }
    }
    function showRMenu(type, x, y) {
        $("#rMenu ul").show();
        if (type == "root") {
            $("#m_del").hide();
            $("#m_check").hide();
            $("#m_unCheck").hide();
        } else {
            $("#m_del").show();
            $("#m_check").show();
            $("#m_unCheck").show();
        }
        rMenu.css({"top": y + "px", "left": x + "px", "visibility": "visible"});

        $("body").bind("mousedown", onBodyMouseDown);
    }

    function hideRMenu() {
        if (rMenu) rMenu.css({"visibility": "hidden"});
        $("body").unbind("mousedown", onBodyMouseDown);
    }
    function onBodyMouseDown(event) {
        if (!(event.target.id == "rMenu" || $(event.target).parents("#rMenu").length > 0)) {
            rMenu.css({"visibility": "hidden"});
        }
    }

    function removeTreeNode() {
        hideRMenu();
        var nodes = zTree.getSelectedNodes();
        if (nodes && nodes.length > 0) {
            if (nodes[0].children && nodes[0].children.length > 0) {
                var msg = "要删除的节点是父节点，如果删除将连同子节点一起删掉。\n\n请确认！";
                if (confirm(msg) == true) {
                    zTree.removeNode(nodes[0]);

                    console.log(nodes[0].id);

                }
            } else {
                var treeNode = nodes[0];
                $.post('__INDEX__note/delDir', {id: treeNode.id},function(msg){
                    if(msg.status==3){
                        $('#alert-modal').modal();
                    }else {
                        zTree.removeNode(nodes[0]);
                    }

                });



            }
        }
    }
    function setEdit() {

        var nodes = zTree.getSelectedNodes(),
                treeNode = nodes[0];
        if (nodes.length == 0) {
            alert("请先选择一个节点");
            return;
        }
        zTree.editName(treeNode);

        hideRMenu();
    }

    function BeforeRename(treeId, treeNode, newName, isCancel) {

        $.post('__INDEX__note/updateDirName', {id: treeNode.id, name: newName},function(msg){
            if(msg.status==3){
                $('#alert-modal').modal();
            }
        });
    }
    function showCode(str) {
        var code = $("#code");
        code.empty();
        for (var i = 0, l = str.length; i < l; i++) {
            code.append("<li>" + str[i] + "</li>");
        }
    }
    function newFolder() {
        var nodes = zTree.getSelectedNodes();
        aid = nodes[0].id;
        console.log(90);
        $('#hs-new-fold-modal').modal();
    }
    function filter(treeId, parentNode, childNodes) {
        if (!childNodes) return null;
        for (var i = 0, l = childNodes.length; i < l; i++) {
            childNodes[i].name = childNodes[i].name.replace(/\.n/g, '.');
        }
        return childNodes;
    }







    $(function(){
        var t = $("#tree");
        var treeObj = $.fn.zTree.init(t, setting, zNodes);
        zTree = $.fn.zTree.getZTreeObj("tree");
        rMenu = $("#rMenu");
        treeObj.expandAll(true);
        dir_id="<?php echo $dir_id?>";

        var node = zTree.getNodeByParam("id", dir_id, null);
        zTree.selectNode(node);



        //绑定确认文件夹操作
        var folder_modal=$('#hs-new-fold-modal');
        folder_modal.on('click','.folder-confirm', function () {
            folder_modal.modal('hide');
            var name=$('#folder_name').val();
            console.log(33);
            $.post('__INDEX__/note/newDir', {pid: aid, name: name}, function (msg) {
                if(msg.status==3){
                    $('#alert-modal').modal();
                }else {
                    var idd = msg.pid;
                    var fnode = treeObj.getNodeByParam("id", idd, null);
                    treeObj.addNodes(fnode, msg);
                }

            });

        });




    });




</SCRIPT>
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



