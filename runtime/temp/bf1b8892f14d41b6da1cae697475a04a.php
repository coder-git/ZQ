<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\WWW\ZQ\public/../application/admin\view\user\show.html";i:1534817829;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>ZQ 后台主题UI框架 - Bootstrap Table</title>
    <meta name="keywords" content="ZQ后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="ZQ是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    <link href="/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Bootstrap table <a href="http://bootstrap-table.wenzhixin.net.cn/zh-cn/" target="_blank">http://bootstrap-table.wenzhixin.net.cn/zh-cn/</a></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">选项1</a>
                        </li>
                        <li><a href="#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <!-- toolbar start -->
            <div class="btn-group hidden-xs" id="testToolbar" role="group">
                <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                </button>
            </div>
            <!-- toolbar end -->

            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <h4 class="example-title">员工表</h4>
                        <div class="example">
                            <div class="bootstrap-table">
                                <div class="fixed-table-toolbar"></div>
                                <div class="fixed-table-container" style="height: 250px; padding-bottom: 36px;">
                                    <div class="fixed-table-header" style="margin-right: 0px;">
                                        <table class="table table-hover" style="width: 624px;">
                                        </table>
                                    </div>
                                    <div class="fixed-table-body">
                                        <div class="fixed-table-loading" style="top: 37px; display: none;">正在努力地加载数据中，请稍候……</div>
                                        <table data-toggle="table" id="testtable"  data-mobile-responsive="true" class="table table-hover" style="margin-top: -36px;"></table>
                                    </div>
<!--                                 <div class="fixed-table-footer" style="display: none;">
                                    <table>
                                        <tbody><tr></tr></tbody>
                                    </table>
                                </div>
                                data-url="/static/admin/js/demo/table_base.json" 
                            -->
                            <div class="fixed-table-pagination" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>


</div>


</div>

<div class="row col-sm-12" id="user_c">


    <div class="ibox-content col-sm-12">
        <form action="">
            <div class="form-group col-sm-6">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label>用户名</label>
                <input type="email" placeholder="请输入您注册的E-mail" class="form-control">
            </div>
        </form>
    </div>

</div>

<!-- 全局js -->
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>

<!-- 自定义js -->
<script src="/static/admin/js/content.js?v=1.0.0"></script>

<script src="/static/admin/js/plugins/layer/layer.min.js"></script>

<!-- Bootstrap table -->
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>

<!-- Peity -->
<!-- <script src="/static/admin/js/demo/bootstrap-table-demo.js"></script> -->

<script>

    $("#testtable").bootstrapTable({
        columns:[{
            checkbox:true,
            visible:true
        },{
            field:'staff_name',
            title:'用户名'
        },{
            field:'department',
            title:'部门'
        },{
            field:'id',
            title:'操作',
            formatter: actionFormatter
        }],
        data:[{
            id:1,
            staff_name:'王群',
            department:'济南销售一部'
        },{
            id:2,
            staff_name:'王群',
            department:'济南销售一部'
        },{
            id:3,
            staff_name:'王群',
            department:'济南销售一部'
        }],
        search:true,
        toolbar:'#testToolbar',

    }); // init via javascript

    $(window).resize(function () {
        $('#testtable').bootstrapTable('resetView');
    });


    //操作栏的格式化
    function actionFormatter(value, row, index) {
        var id = value;
        var result = "";
        result += "<a href='javascript:;' class='btn btn-xs green' onclick=\"EditViewById('" + id + "', view='view')\" title='查看'><span class='glyphicon glyphicon-search'></span></a>";
        result += "<a href='javascript:;' class='btn btn-xs blue' onclick=\"EditViewById('" + id + "')\" title='编辑'><span class='glyphicon glyphicon-pencil'></span></a>";
        result += "<a href='javascript:;' class='btn btn-xs red' onclick=\"DeleteByIds('" + id + "')\" title='删除'><span class='glyphicon glyphicon-remove'></span></a>";

        return result;
    }


    function EditViewById(id,view){
        if (view) {
            layer.open({
                type:1,
                content:$("#user_c"),
                area:['500px']
            });
        } else {
            layer.msg('编辑');
        }
    }


</script>



</body>

</html>
