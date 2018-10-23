<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\WWW\ZQ\public/../application/index\view\contents\index.html";i:1533197988;s:51:"D:\WWW\ZQ\application\index\view\Public\header.html";i:1528798554;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>管理系统</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
</head>
<body>


  <div class="layui-fluid">
    <div class="layui-card">

      <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="lay-from1">
        <div class="layui-form-item">
          <div class="layui-inline">
            <label class="layui-form-label">公司名称</label>
            <div class="layui-input-inline">
              <input type="text" name="company_name" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-inline">
            <label class="layui-form-label">签单人</label>
            <div class="layui-input-inline">
              <input type="text" name="staff_name" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-inline">
            <label class="layui-form-label">时间</label>
            <div class="layui-input-inline">
              <input type="text" name="start_t" placeholder="请输入" autocomplete="off" class="layui-input" id="search-date">
            </div>
          </div>

          
          <div class="layui-inline">
            <label class="layui-form-label">订单类型</label>
            <div class="layui-input-inline">
              <select name="type" lay-filter="type_scarch">
                <option value="">请选择类型</option>
                <?php if(is_array($types) || $types instanceof \think\Collection || $types instanceof \think\Paginator): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                     <option value="<?php echo $key; ?>"><?php echo $type; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </div>
          </div>
          <div class="layui-inline">
            <button class="layui-btn layuiadmin-btn-list" lay-submit lay-filter="lay-search" >
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
          </div>
        </div>
      </div>



      <div class="layui-card-body">
        <div style="padding-bottom: 10px;">
          <button class="layui-btn layuiadmin-btn-list" data-type="batchdel">删除</button>
          <button class="layui-btn layuiadmin-btn-list" data-type="add" id="add_order">添加</button>
        </div>

        
        <table id="order-table" lay-filter="lay-order-t"></table> 


<div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-4" style=" ">
  <div class="layui-table-box">
    <div class="layui-table-header">
      <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
      <thead>
      <tr>
        <th data-field="0" data-unresize="true">
          <div class="layui-table-cell laytable-cell-4-0 laytable-cell-checkbox">
            <input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
            <div class="layui-unselect layui-form-checkbox" lay-skin="primary">
              <i class="layui-icon layui-icon-ok"></i>
            </div>
          </div>
        </th>
        <th data-field="id">
          <div class="layui-table-cell laytable-cell-4-id">
            <span>文章ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc"></i><i class="layui-edge layui-table-sort-desc"></i></span>
          </div>
        </th>
        <th data-field="label" data-minwidth="100">
          <div class="layui-table-cell laytable-cell-4-label">
            <span>文章标签</span>
          </div>
        </th>
        <th data-field="title">
          <div class="layui-table-cell laytable-cell-4-title">
            <span>文章标题</span>
          </div>
        </th>
        <th data-field="author">
          <div class="layui-table-cell laytable-cell-4-author">
            <span>作者</span>
          </div>
        </th>
        <th data-field="uploadtime">
          <div class="layui-table-cell laytable-cell-4-uploadtime">
            <span>上传时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc"></i><i class="layui-edge layui-table-sort-desc"></i></span>
          </div>
        </th>
        <th data-field="status" data-minwidth="80">
          <div class="layui-table-cell laytable-cell-4-status" align="center">
            <span>发布状态</span>
          </div>
        </th>
        <th data-field="7" data-minwidth="150">
          <div class="layui-table-cell laytable-cell-4-7" align="center">
            <span>操作</span>
          </div>
        </th>
      </tr>
      </thead>
      </table>
    </div>


  </div>
  <div class="layui-table-page">
    <div id="layui-table-page4">
      <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2">
        <a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits">
        <select lay-ignore="">
          <option value="10" selected="">10 条/页</option>
          <option value="15">15 条/页</option>
          <option value="20">20 条/页</option>
          <option value="25">25 条/页</option>
          <option value="30">30 条/页</option>
        </select>
        </span>
      </div>
    </div>
  </div>
  <style>
.laytable-cell-4-0{ width: 48px; }.laytable-cell-4-id{ width: 100px; }.laytable-cell-4-label{ width: 230px; }.laytable-cell-4-title{ width: 230px; }.laytable-cell-4-author{ width: 230px; }.laytable-cell-4-uploadtime{ width: 230px; }.laytable-cell-4-status{ width: 230px; }.laytable-cell-4-7{ width: 230px; }
  </style>
</div>





        <script type="text/html" id="buttonTpl">
          {{#  if(d.status){ }}
            <button class="layui-btn layui-btn-xs">已发布</button>
          {{#  } else { }}
            <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button>
          {{#  } }}
        </script>
        <script type="text/html" id="table-content-list">
          <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
          <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
        </script>


  <script type="text/html" id="bar_tem">
  <a class="layui-btn layui-btn-xs" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
  
  <!-- 这里同样支持 laytpl 语法，如： -->
  {{#  if(d.auth > 2){ }}
    <a class="layui-btn layui-btn-xs" lay-event="check">审核</a>
  {{#  } }}
</script>


      </div>
    </div>
  </div>

  <script src="/static/layuiadmin/layui/layui.js"></script>


  <script>
    var table_id = "<?php echo $controller; ?>";
    layui.use(['table','layer','jquery','form','laydate'], function(){
      var table = layui.table,layer = layui.layer, $ = layui.jquery,form = layui.form,laydate = layui.laydate;
      var table_c1 = [[ //综合订单
      {fixed: 'left', align: 'center', title:'状态', type:'checkbox'}
          ,{field: 'id', title:'ID',  sort: true, width: '5%',align:'center'}
          ,{field: 'num', title:'订单号'}
          ,{field: 'company_cname', title:'公司名称',align:'center' }
          ,{field: 'type', title:'业务类型',  align:'center'}
          ,{field: 'price', title:'价格', sort: true,align:'center'}
          ,{field: 'liable_person', title:'签单人',align:'center' }
          ,{field: 'department_name', title:'部门',width:'5%',align:'center'}
          ,{field: 'starttime', title: '日期时间',sort: true,align:'center'}
          ,{fixed: 'right', align:'center',title:'操作', toolbar: '#bar_tem' }
          ]];

      var table_c2 = [[//服务包
          {fixed: 'left', align:'center', title:'状态', type:'checkbox'},
          {field: 'id', title:'ID',  sort: true, width: '5%',align:'center'},

          {field:'company_name', title:'公司名称',width:'15%',align:'center'},
          {field:'url', title:'网址',align:'center'},
          {field:'price',title:'价格',sort:true,align:'center'},
          {field: 'staff_name', title:'签单人',width:'5%',align:'center' },
          {field: 'department_name', title:'部门',align:'center'},
          {field: 'start_t', title: '日期时间',width:'8%',sort: true,align:'center'},
          {field: 'end_t', title: '日期时间',width:'8%',sort: true,align:'center'},
          {fixed: 'right', align:'center',title:'操作', toolbar: '#bar_tem' }

      ]];





      switch(table_id)
      {
        case 'orderweb': 
        var table_c = table_c2;
        var con_url = "<?php echo url('orderweb/showpweb'); ?>";
        break;

        default:
        var table_c = table_c1;
        var con_url = "<?php echo url('contents/page_contents'); ?>";

      }

     var mytable =  table.render({
        elem: '#order-table',
        cols: table_c,
        id:'lay-order-t',
        // url: '/index/bigdata/getdata',
        url: con_url,
        page: true,
        limits:[10,20,30,40,50],
        limit:10

      });




     $("#add_order").on("click", function(){
      layer.open({
        type: 2,
        content: "<?php echo url('index/orderweb/add'); ?>",
        area: ['100%', '100%'],
        // area: ['700px', '500px'],
        title:"添加订单",
        id:'add_o'
        // bar:true

      });
     });

    form.on('select(type_scarch)', function(data){
      var c_type = data.value;

        mytable.reload({
          url:"<?php echo url('index/orderweb/showpweb'); ?>",
          page:true,
          where:{type:c_type}
        })
      // console.log(data.value); //得到被选中的值

    });

    laydate.render({
      elem: '#search-date',
      type:'month'
    });



    form.on('submit(lay-search)',function(data){
      mytable.reload({
        url:"<?php echo url('index/orderweb/showpweb'); ?>",
        page:true,
        where:{condition:data.field}
      })
    });

  })
  </script>

</body>
</html>
