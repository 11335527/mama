<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:44:"C:\wamp\www\la/app/index\view\note\note.html";i:1466233844;s:41:"C:\wamp\www\la/app/index\view\layout.html";i:1466183458;s:48:"C:\wamp\www\la/app/index\view\public\header.html";i:1466182686;s:45:"C:\wamp\www\la/app/index\view\public\nav.html";i:1466091355;s:47:"C:\wamp\www\la/app/index\view\public\modal.html";i:1466184553;s:48:"C:\wamp\www\la/app/index\view\public\footer.html";i:1465999817;}*/ ?>
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
        <link rel="stylesheet" href="__S__/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">



<script type="text/javascript" src="__S__/zTree/js/jquery.ztree.all-3.5.js"></script>

<div id="rMenu">
    <ul class="smart_menu_ul">

        <li class="smart_menu_li" id="m_check" onclick="setEdit();">重命名</li>
        <li class="smart_menu_li" id="m_del" onclick="removeTreeNode();">删除节点</li>
        <li class="smart_menu_li" id="m_folder" onclick="newFolder();">新建文件夹</li>

    </ul>
</div>



    <div class="row">


        <div class="col-md-2 bg-default" style="min-height: 1150px;">
            <ul id="tree" class="ztree"></ul>
        </div>

        <div class="col-md-2" style="min-height: 1150px;background-color: #eeeeee">
            <div style="margin: 8px 0">
                <button class="btn btn-success btn-sm" id="new-art">新建笔记</button>
                <button class="btn btn-primary btn-sm" id="art-save">保存</button>
            </div>
            <div class="list-group" id="art-list">

                <?php foreach($artList as $vo): ?>
                <abbr title="<?php echo $vo['title']; ?>" style="border: none;cursor:pointer"><a href="javascript:void (0);"
                                                                                 data-id="<?php echo $vo['id']; ?>"
                                                                                 class="list-group-item"
                                                                                 style="border-bottom:none;margin-bottom: 3px">

                    <p class="list-group-item-text">
                        <?php echo $vo['title']; ?>
                    </p>
                </a></abbr>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-8 art-editor">

            <form id="form">
                <input type="text" class="art-title" name="title" placeholder="请输入标题">
                <input type="hidden" name="id" id="art-id">
                <!-- 加载编辑器的容器 -->
                <script id="container" name="content" type="text/plain">
                </script>
            </form>
        </div>
    </div>



<!-- 配置文件 -->
<script type="text/javascript" src="__S__/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="__S__/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="__S__/ueditor/ueditor.parse.min.js"></script>
<!--右键菜单-->
<script type="text/javascript" src="__S__/smartMenu/jquery-smartMenu.js"></script>



<SCRIPT type="text/javascript">
    var ue = UE.getEditor('container', {
        initialFrameWidth: '100%',
        initialFrameHeight: '1000',
        toolbars: [
            [          'source', //源代码
                'undo', //撤销
                'redo', //重做
                'bold', //加粗
                'formatmatch', //格式刷

                'blockquote', //引用
                'pasteplain', //纯文本粘贴模式


                'horizontal', //分隔线
                'removeformat', //清除格式





                'inserttitle', //插入标题


                'insertcode', //代码语言
                'fontfamily', //字体
                'fontsize', //字号
                'paragraph', //段落格式
                'simpleupload', //单图上传


                'link', //超链接
                'emotion', //表情





                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐

                'forecolor', //字体颜色
                'backcolor', //背景色
                'insertorderedlist', //有序列表
                'insertunorderedlist', //无序列表
                'fullscreen', //全屏
                'autotypeset', //自动排版
                'inserttable', //插入表格
                'drafts', // 从草稿箱加载

                 ]
        ]

    });



    $('abbr').each(function(){
        var str=$(this).attr('title');
        if(str.length>9){
            $(this).find('p').html(str.substr(0,9)+'…');
        }
    });

    //新建笔记
    $('#new-art').on('click',function(){
        $('.art-title').val('');
        $('#art-id').val('');
        ue.setContent('');
    });



    //保存笔记
    $('#art-save').on('click', function () {

        var fd = new FormData($('#form')[0]);
        fd.append('dir_id', '<?php echo $_GET["dir"]?>');

        $.ajax({
            type: 'post',
            url: '__INDEX__note/saveArt',
            data: fd,
            dataType: 'json',
            success: function (msg) {
                var $editor = $(".art-editor");
                console.log(msg);
                if (msg.status.code == 0) {
                    if (msg.data.type == 1) {

                        var a = $('<a href="__SITE__article" class="list-group-item"><p class="list-group-item-text">' + msg.data.data.title + '</p></a>');
                        $('#art-list').append(a);

                        var alert=$('<div class="alert alert-success" style="display: none"><strong>成功！</strong>新增成功</div>');
                        $editor.prepend(alert);
                        alert.slideDown('fast');
                        setTimeout(function(){
                            alert.slideUp('fast');
                        },2000);

                    } else {
                        var title = $('.art-title').val(),
                                id = $('#art-id').val();
                        $('.list-group-item[data-id="' + id + '"]>.list-group-item-text').html(title);

                        var alert=$('<div class="alert alert-success" style="display: none"><strong>成功！</strong>更新成功</div>');
                        $editor.prepend(alert);
                        alert.slideDown('fast');
                        setTimeout(function(){
                            alert.slideUp('fast');
                        },2000);
                    }
                } else {
                    var alert=$('<div class="alert alert-warning" style="display: none"><strong>警告！</strong>'+msg.status.msg+'</div>');
                    $editor.prepend(alert);
                    alert.slideDown('fast');
                    setTimeout(function(){
                        alert.slideUp('fast');
                    },2000);
                }
            },
            processData: false,  // 告诉jQuery不要去处理发送的数据
            contentType: false // 告诉jQuery不要去设置Content-Type请求头
        });

    });

    //读取笔记内容
    $('#art-list').on('click','.list-group-item',function(){
        var id=$(this).attr('data-id');
        $.post('__INDEX__note/readArt',{id:id},function(msg){

            $('.art-title').val(msg.title);
            $('#art-id').val(msg.id);
            ue.setContent(msg.content);
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

        window.location.href='__SITE__note/dir/'+dir_id;


    }
    function OnRightClick(event, treeId, treeNode) {
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
                zTree.removeNode(nodes[0]);
                var treeNode = nodes[0];
                $.post('__INDEX__note/delDir', {id: treeNode.id})
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
        console.log(newName);
        console.log(treeNode);
        $.post('__INDEX__note/updateDirName', {id: treeNode.id, name: newName});
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







    $(document).ready(function(){
        var t = $("#tree");
        treeObj = $.fn.zTree.init(t, setting, zNodes);
        zTree = $.fn.zTree.getZTreeObj("tree");
        rMenu = $("#rMenu");
        treeObj.expandAll(true);
        dir_id="<?php echo $_GET['dir']?>";

        var node = treeObj.getNodeByParam("id", dir_id, null);
            treeObj.selectNode(node);



        //绑定确认文件夹操作
        var folder_modal=$('#hs-new-fold-modal');
        folder_modal.on('click','.folder-confirm', function () {
            folder_modal.modal('hide');
            var name=$('#folder_name').val();
            console.log(33);
            $.post('__INDEX__/note/newDir', {pid: aid, name: name}, function (msg) {
                var idd = msg.pid;
                var fnode = treeObj.getNodeByParam("id", idd, null);
                treeObj.addNodes(fnode, msg);
            }, 'json');

        });

    


    });




</SCRIPT>
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



