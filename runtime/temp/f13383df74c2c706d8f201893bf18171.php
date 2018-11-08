<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\WWW\ZQ\public/../application/admin\view\staff_data\index.html";i:1541583012;}*/ ?>
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
                <button type="button" class="btn btn-outline btn-default" id="add_user">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default" id="del_method">
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
                                <div class="fixed-table-container" style="padding-bottom: 36px;">
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

<div class="row col-sm-12" id="user_c" style="display: none">


    <div class="ibox-content col-sm-12">
        <form action="" id="contents_from">
            <input type="text" class="hidden" value="" name="staff_id" id="staff_id">
            <div class="form-group col-sm-6">
                <label>姓名：</label>
                <input type="text" id="staff_name" name="staff_name" placeholder="请输入姓名" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label>性别：</label>
                <!--                 <input type="email" placeholder="请输入姓名" class="form-control"> -->
                <div class="radio">
                    <label class="radio-inline">  <input type="radio" name="sex" id="sex1" value="男"> 男</label>
                    <label class="radio-inline">  <input type="radio" name="sex" id="sex2" value="女"> 女</label>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label>部门：</label>

                <select class="form-control"  name="d_id" id="deparids">
                    <?php if(is_array($depart) || $depart instanceof \think\Collection || $depart instanceof \think\Paginator): $i = 0; $__LIST__ = $depart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>

                    <option value="<?php echo $row['d_id']; ?>" id="depart<?php echo $row['d_id']; ?>"><?php echo $row['department']; ?></option>


                    <?php endforeach; endif; else: echo "" ;endif; ?>



                </select>
            </div>



            <div class="form-group col-sm-6">
                <label>职务：</label>
                
                <select class="form-control"  name="post_id" id="son_postrow" >

                </select>
            </div>

            <div class="form-group col-sm-6">
                <label>公司座机：</label>
                <input type="text" id="company_tel" name="seat" placeholder="请输入您的座机" class="form-control" required="required">
            </div>
            <div class="form-group col-sm-6">
                <label>手机号：</label>
                <input type="text" id="mobile" name="mobile" placeholder="请输入手机号" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                <label>入职日期：</label>
                <input type="text" id="worktime" name="worktime" placeholder="请输入您注册的E-mail" class="form-control"  >
            </div>
            <div class="form-group col-sm-6">
                <label>出生日期：</label>
                <input type="text" id="birthday_mouth" name="birthday_mouth" placeholder="请输入您注册的E-mail" class="form-control">
            </div>

            <div class="col-sm-12 text-center edit_btn" style="display: none">
                <button type="button" class="btn btn-success" id="itstrue">确认</button>
                <button type="button" class="btn btn-success" id="reset_btn">取消</button>
            </div>

            <div class="col-sm-12 text-center read_btn" style="display: none">
                <button type="button" class="btn btn-success" >确认</button>
            </div>
        </form>
    </div>

</div>

<!-- 全局js -->
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>

<!-- 自定义js -->
<script src="/static/admin/js/content.js?v=1.0.0"></script>

<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>

<!-- Bootstrap table -->
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="/static/admin/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/static/admin/js/plugins/validate/messages_zh.min.js"></script>
<!-- Peity -->
<!-- <script src="/static/admin/js/demo/bootstrap-table-demo.js"></script> -->

<script>


    function table_render(){

     $("#testtable").bootstrapTable({
        columns:[{
            checkbox:true,
            visible:true
        },{
            field:'staff_name',
            title:'用户名'
        },{
            field:'department.department',
            title:'部门'
        },{
            field:'staff_id',
            title:'操作',
            formatter: actionFormatter
        }],
        // data:[{
        //     id:1,
        //     staff_name:'王群',
        //     department:'济南销售一部'
        // },{
        //     id:2,
        //     staff_name:'王群',
        //     department:'济南销售一部'
        // },{
        //     id:3,
        //     staff_name:'王群',
        //     department:'济南销售一部'
        // }],
        url:"<?php echo url('staff_data/showdatas'); ?>",
        search:true,
        sortable:true,
        pageSize:5,
        sortOrder:'desc',
        pageList:[5,10,20,50,'All'],
        pagination:true,
        toolbar:'#testToolbar',

    }); // init via javascript


 }



    table_render();


$(window).resize(function () {
    $('#testtable').bootstrapTable('resetView');
});



    //操作栏的格式化
    function actionFormatter(value, row, index) { 
        var id = value;
        // datass = row;
        // console.log(row);
        var datas = encodeURI(JSON.stringify(row));

        var result = "";
        result += "<a href='javascript:;' class='btn btn-xs green' onclick=\"EditViewById('" + datas + "', view='view')\" title='查看'><span class='glyphicon glyphicon-search'></span></a>";
        result += "<a href='javascript:;' class='btn btn-xs blue' onclick=\"EditViewById('" + datas + "', view='edit')\" title='编辑'><span class='glyphicon glyphicon-pencil'></span></a>";
        result += "<a href='javascript:;' class='btn btn-xs red' onclick=\"DeleteByIds('" + id + "')\" title='删除'><span class='glyphicon glyphicon-remove'></span></a>";

        return result;
    }


    function EditViewById(datas,view){
        var datass = JSON.parse(decodeURI(datas));
            var is = 1;

        if (view == 'view') {
            console.log(view + 'view');

//查看信息
layer.open({
    type:1,
    title:'查看信息',
    content:$("#user_c"),
    area:['500px','410px'],
    success: function(layero,index){
        $("#staff_name").val(datass.staff_name).attr("disabled","disabled");
        $("#company_tel").val(datass.seat).attr("disabled","disabled");
        $("#mobile").val(datass.mobile).attr("disabled","disabled");
        $("#worktime").val(datass.worktime).attr("disabled","disabled");
        $("#birthday_mouth").val(datass.birthday_mouth).attr("disabled","disabled");

        $("#depart"+datass.d_id).attr('selected','selected');
        $("#son_postrow").attr("disabled","disabled");
        $("#deparids").attr("disabled","disabled");
                    // $("#depart"+datass.d_id).attr('selected','selected');

                    datass.sex == '男' ? $("#sex1").attr('checked','checked') : $("#sex2").attr('checked','checked');
                    $("#sex1").attr("disabled","1");
                    $("#sex2").attr("disabled","1");
                    $(".read_btn").show();
                    addpost(datass.d_id,datass.post_id);


                    $(".read_btn > button").on("click",function(){
                        layer.close(layer.index);
                    })


                },
                end : function(index,layero){

                    $(":disabled").removeAttr('disabled');
                    $(".read_btn").hide();
                    // $("#contents_from")[0].reset();
                    document.getElementById("contents_from").reset();

                    // $("#contents_from > input:disabled").attr('1234132','1111');
                    // console.log($("#contents_from > input:disabled"));
                    // 
                    return true;
                }


            });

} else {
    console.log(view + 'edit');

//编辑
var lay_edit_index = layer.open({
    type:1,
    title:'修改信息',
    content:$("#user_c"),
    area:['80%','60%'],
    success: function(layero,index){
        $("#staff_id").val(datass.staff_id);
        $("#staff_name").val(datass.staff_name);
        $("#company_tel").val(datass.seat);
        $("#mobile").val(datass.mobile);
        $("#worktime").val(datass.worktime);


        $("#depart"+datass.d_id).attr('selected','selected');
        // $("#son_postrow")

                    // $("#depart"+datass.d_id).attr('selected','selected');

                    datass.sex == '男' ? $("#sex1").attr('checked','checked') : $("#sex2").attr('checked','checked');
                    addpost(datass.d_id,datass.post_id);


                    $(".edit_btn").show();
                    $("#itstrue").attr("action_type","edit");


                    laydate.render({
                        elem:'#worktime',
                        format: 'yyyy-MM-dd'
                    });

                    laydate.render({
                        elem:'#birthday_mouth',
                        format:'yyyy-MM'
                    });




                },
                end: function(index,layero){
                    // $("#contents_from")[0].reset();
                    document.getElementById("contents_from").reset();

                    $(".edit_btn").hide();
                }

            });



}

}


function loaddatas() {
    // body...


    $.ajax({
        url:'<?php echo url("staff_data/showdatas"); ?>',
        type:'GET',
        success:function(res){
           console.log(res);
           return res;
       }
   })
}









//删除

//行内删除按钮
function DeleteByIds(id) {

    layer.confirm('确认删除吗？',{icon:3, title:'删除'},function(dom){
            var ids = [Number(id)];//bootstraptable 内置remove方法里参数value 必须为数组 [1,2]
            del_ajx(ids);
        });

}

//多选删除
$("#del_method").on("click",function(){


 var ids =  $.map($("#testtable").bootstrapTable('getSelections'), function (row) {
    return row.staff_id;


});

    del_ajx(ids);

});



//添加员工信息
$("#add_user").on("click",function(){

    var add_u_index = layer.open({
        type:1,
        content:$("#user_c"),
        area:["500px","400px"],
        success:function(index){
            console.log(index);

            console.log('this add mnethod.');


                    laydate.render({
                        elem:'#worktime',
                        format: 'yyyy-MM-dd'
                    });

                    laydate.render({
                        elem:'#birthday_mouth',
                        format:'yyyy-MM'
                    });

                    $(".edit_btn").show();
                    $("#itstrue").attr("action_type","add");


                    addpost();
        }, end:function(){
            // $("#contents_from")[0].reset();
            document.getElementById("contents_from").reset();
             $(".edit_btn").hide();

        }
    });
});




//封装ajax的删除
function del_ajx(ids){

    $.ajax({
        url: '<?php echo url("staff_data/deldatas"); ?>',
        type:"POST",
        data:{ids:ids},
        success:function(res){
            layer.msg(res.msg);
            if (res.code) {
                $('#testtable').bootstrapTable('remove', {field: 'staff_id', values: ids});
            }
        }
    });
}




$("#reset_btn").on("click",function(){
    // layer.close(lay_edit_index);
    layer.closeAll('page');

});


//添加编辑
$(document).find("#itstrue").on("click",function(res){


    var formdas = $("#contents_from").serialize();
    var atype = $(this).attr('action_type');


    var aurl = atype == 'edit' ? '<?php echo url("staff_data/editdatas"); ?>' : '<?php echo url("staff_data/adddatas"); ?>';
    console.log(aurl);
    var uname = $("#staff_name").val(), p_id = $("#son_postrow").val(), worktime = $("#worktime").val(), mobile = $("#mobile").val();
    if ($.trim(uname) && $.trim(p_id) && $.trim(worktime) && $.trim(mobile)) {

        $.ajax({
            url:aurl,
            type:'POST',
            data:formdas,
            success:function(res){


                if (res.code == 1) { 
                    console.log('res.code == 1');

                    $("#testtable").bootstrapTable('destroy');
                    table_render();
                    layer.msg(res.msg);

                    layer.closeAll('page');
                } else {
                    layer.msg(res.msg);
                }
                // layer.close(lay_edit_index);


                // layer.msg(res);
            },
            error:function(res){
                console.log('error');
            }
        });

    } else {

        layer.msg('用户名、部门、入职时间和手机号不能为空！'+'\n'+'如果不想添加了，请点叉或者取消。');
    }





});














//联动
$("#deparids").on("change",function(event){
    addpost($(this).val());
})


// <option value="<?php echo $row['d_id']; ?>" id="depart<?php echo $row['d_id']; ?>"><?php echo $row['department']; ?></option>
function addpost(did,postid){


if (!did) {
    did = 1;
}

 var posts = <?php echo json_encode($depart)?>;

 var postidtag = "#postid"+postid;

 $.each(posts,function(index,val){
    if (val['d_id'] == did) {
       $("#son_postrow").empty();

       $.each(val['post'],function(index,postval){

         $("#son_postrow").append("<option value="+index+" id='postid"+index+"'>"+postval+"</option>");

     })

   }
});

 $(document).find(postidtag).attr('selected','selected');

}



</script>



</body>

</html>