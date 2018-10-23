/**
  项目JS主入口
  以依赖layui的layer和form模块为例
  **/    
  layui.define(['layer', 'form', 'table', 'util', 'jquery', 'laydate'], function(exports){
  	var layer = layui.layer
  	,form = layui.form
  	,table = layui.table
  	,laydate = layui.laydate
  	,util = layui.util
  	,$ = layui.$;

  // layer.msg('rigth');
  //data table render
  table.render({
		  elem: '#show_table' //指定原始表格元素选择器（推荐id选择器）
		  ,height: 500 //容器高度
		  ,limit:30
		  // ,skin:'line'
		  ,size:'lg'
		  ,even:true
		  ,initSort:{field:'money_time',type:'desc'}
		  ,page:true
		  ,cols: [[
		  {
		  	fixed:'left',
		  	field:'checkbox',
		  	type:'checkbox'

		  },
		  {
		  	field:'number',
		  	title:'序列',
		  	type:'numbers'
		  },

		  {
		  	field:'id',
		  	title:'用户id',
		  	width:'10%',
		  	sort:true,
		  	align:'center'

		  },

		  {
		  	field:'worker_name',
		  	title:'员工姓名',
		  	align:'center'

		  },

		  {
		  	field:'worker_place',
		  	title:'所属地区',
		  	align:'center'

		  },
		  {
		  	field:'order_type',
		  	title:'业务类型',
		  	align:'center'
		  },

		  {
		  	field:'order_money',
		  	title:'订单金额',
		  	sort:true,
		  	align:'center'


		  },

		  {
		  	field:'money_time',
		  	title:'回款时间',
		  	sort:true,
		  	align:'center'


		  },
		  {fixed: 'right',title:'操作',align:'center', toolbar: '#edit_bar'}//工具条

		  ]],//设置表头
		  data:[
		  {"id":'1',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'57000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'58000',"money_time":'2018-05-24'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'53000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'58000',"money_time":'2018-05-23'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'58000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'广东',"order_type":'推广',"order_money":'52000',"money_time":'2018-05-23'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'51000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'58000',"money_time":'2018-05-23'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'5000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'568000',"money_time":'2018-05-26'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'528000',"money_time":'2018-05-23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'400',"money_time":'2018-05-23'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'5000',"money_time":'2018-05-23 12:04:23'},
		  {"id":'2',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'7800',"money_time":'2018-05-23 12:04:23'},
		  {"id":'3',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'3000',"money_time":'2018-05-29 12:04:23'},
		  {"id":'10',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'2300',"money_time":'2018-05-23 12:05:23'},
		  {"id":'9',"worker_name":'张某某',"worker_place":'济南',"order_type":'官网',"order_money":'3450',"money_time":'2018-05-23 12:04:23'}
		  ]

		});



//laydate render 
laydate.render({
	elem:"#data_date",
	type:'month',
	format:'yyyy年M月'
});


//fixbar render
util.fixbar({
	bar1: true
	,css:{right:80,bottom:80}
	,click: function(type){
		console.log(type);
		if(type === 'bar1'){
			alert('点击了bar1')
		}
	}
});
	  //form render
	  //
	 // form.render({
	 // 	elem:
	 // })

	 $("#today_data").on("click", function(e){
	 	window.location.href="http://www.baidu.com";
	 });

	 $("#add_data").on("click", function(){
	 	layer.msg('添加内容',{icon:7});
	 });


	 $("#del_data").on("click", function(){
	 	layer.msg('删除内容',{icon:7});
	 });

	 $(".add_icon").on("click", function(){
	 	layer.msg('只是装饰用',{icon: 6});
	 });


  exports('add', {}); //注意，这里是模块输出的核心，模块名必须和use时的模块名一致
});    