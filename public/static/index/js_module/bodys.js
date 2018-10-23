/**
  项目JS主入口
  **/    
  layui.define(function(exports){

  	var layer = layui.layer
  	,form = layui.form
  	,table = layui.table
  	,util = layui.util
  	 ,carousel = layui.carousel
  	,element = layui.element
  	,$ = layui.$;
  // layer.msg('rigth');
  // 
 layui.use(['table'], function(){
    var $ = layui.$
    ,table = layui.table;

  //col_config
  var table_render_config = [[
		  {
		  	field:'id',
		  	title:'id',
		  	width:'8%',
		  	// sort:true,
		  	align:'center',
		  	templet: '<div>{{d.id}}</div>'

		  },

		  {
		  	field:'liable_person',
		  	title:'负责人',
		  	align:'center'

		  },

		  {
		  	field:'name',
		  	title:'地区',
		  	align:'center',
		  	width:'6%'

		  },
		  {
		  	field:'deparment',
		  	title:'部门',
		  	align:'center',
		  	width:'10%'

		  },
		  {
		  	field:'type',
		  	title:'业务类型',
		  	align:'center'
		  },

		  {
		  	field:'price',
		  	title:'订单金额',
		  	sort:true,
		  	align:'center',
		  	templet: '<div>{{d.price}}元</div>'


		  },

		  {
		  	field:'starttime',
		  	title:'回款时间',
		  	// sort:true,
		  	align:'center'


		  }

		  ]];



var top_table_config = [[
		  {
		  	field:'id',
		  	title:'id',
		  	width:'10%',
		  	// sort:true,
		  	align:'center',
		  	templet: '<div>{{d.id}}</div>'

		  },

		  {
		  	field:'liable_person',
		  	title:'负责人',
		  	align:'center',
		  	width:'20%'

		  },
		   {
		  	field:'price',
		  	title:'订单金额',
		  	sort:true,
		  	align:'center',
		  	templet: '<div>{{d.price}}元</div>'


		  },

		  {
		  	field:'starttime',
		  	title:'回款时间',
		  	// sort:true,
		  	align:'center',
		  	templet: '<div>{{d.starttime}}</div>'


		  },{
		  	field:'name',
		  	title:'位置',
		  	// align:'center',
		  	// width:'10%'
		  	width:100

		  }]

		  // {align:'center', title:'地区', colspan:3}



		  // ],		  [,
		  // {
		  // 	field:'deparment',
		  // 	title:'部门',
		  // 	// align:'center',
		  // 	// width:'10%'

		  // },
		  // {
		  // 	field:'deparment',
		  // 	title:'部门',
		  // 	// align:'center',
		  // 	// width:'10%'

		  // }]




		  ];


//top 表格
  var top_tables = table.render({
		  elem: '#top_data' //指定原始表格元素选择器（推荐id选择器）
			  // ,height: 1000 //容器高度
			  // ,limit:30
			  // ,skin:'line'
			  ,cols: top_table_config
			  ,url:'/index/bigdata/top_datas'
			  ,text: {
			  	none: '暂无相关数据'
			  }
			  ,size:'lg'
			  ,even:true
			  ,page:false
			  ,limit:10
			  ,initSort:{field:'price',type:'desc'}
			  // ,done: function(e){
			  // 	best_sty('#top_data', e.top_price_id, '榜首', 1);
			  // }

		});




  var today_data = table.render({
		  elem: '#today_data' //指定原始表格元素选择器（推荐id选择器）
		  // ,height: 1000 //容器高度
		  // ,skin:'line'
		  ,url:'/index/bigdata/today_data'
		  // ,text: {
		  // 	none: '暂无相关数据'
		  // }
		  // ,size:'lg'
		  // ,even:true
		  // ,initSort:{field:'starttime',type:'desc'}
		  // ,where : {
		  // 	order_type : 'today'
		  // }
		  ,page:true
		  ,cols: table_render_config

		  // ,done:function(e){
		  // 	best_sty('#today_data', e.top_price_id,'最高单价',2);
		  // 	best_sty('#today_data', e.top_time_id,'今日首单',1);
		  // }
		  // ,//设置表头


		});

// 历史记录表格
  // var history_table = table.render({
		//   elem: '#history_data' //指定原始表格元素选择器（推荐id选择器）
		//   // ,height: 1000 //容器高度
		//   // ,limit:30
		//   // ,skin:'line'
		//   ,cols: table_render_config
		//   ,url:'/index/bigdata/getdata'
		//   ,text: {
		//   	none: '暂无相关数据'
		//   }
		//   ,page: true
		//   // ,size:'lg'
		//   // ,even:true
		//   // ,initSort:{field:'starttime',type:'desc'}
		//   // ,where : {
		//   // 	order_type : 'today'
		//   // }
		//   // ,page:{
		//   // 	limit: 5,
		//   // 	limits: [5,10,15,20,25],
		//   // 	groups: 5

		//   // }
		//   // ,done:function(e){
		//   // 	best_sty('#history_data', e.top_price_id, '最高单价',2);
		//   // 	// best_sty(e.top_time_id,'今日首单',1);
		//   // }
		//   // // ,//设置表头


		// });








	// //排序后重新添加徽章样式
	// table.on('sort(today_table)', function(obj){ 

	// 	var top_price = $("#today_data").attr("top_price_id");
	// 	var top_time = $("#today_data").attr("top_time_id");

	// 	best_sty('#today_data', top_price, '最高单价', 2);
	// 	best_sty('#today_data', top_time, '今日首单', 1);

	// });

		//排序后重新添加徽章样式
	table.on('sort(history_table)', function(obj){ 
		console.log(obj);
		var top_price = $("#history_data").attr("top_price_id");
		// var top_time = $("#history_data").attr("top_time_id");
		best_sty('#history_data', top_price, '最高单价', 2);
		// best_sty(top_time, '今日首单', 1);

	});




  });





layui.use(['util'], function(){
	var $ = layui.$, util = layui.util;
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


})



	//特殊徽章样式处理，table_dom: 表格id,id：要处理的行的id，str:展示内容
	function best_sty(table_dom, id,str,type) {

		var change_dom = $(document).find(table_dom ).find("td[data-content='"+id+"']");
		console.log(id);
		console.log(change_dom);
		change_dom.css({"background":"#000"});
		if (type == 1) {
		$(table_dom).attr('top_time_id',id);
			change_dom.next("td[data-field='liable_person']").find("div").css({"font-weight":"bold","font-family":"'微软雅黑'","font-size":"1rem"}).prepend("<span class='layui-badge'>"+ str +"</span>");
		} else {
		$(table_dom).attr('top_price_id',id);
			change_dom.nextAll("td[data-field='price']").find("div").css({"font-weight":"bold","font-family":"'微软雅黑'","font-size":"1rem"}).prepend("<span class='layui-badge'>"+ str +"</span>");
		}
		change_dom.nextAll("td[data-field='price']").css({"font-weight":"bold"});


	}





	// $("#today_data").on("click", function(e){
	// 	  	// window.location.href="#index_table";
	// 	  	// 重载今日数据
	// 	  	tableIns.reload({
	// 	  		url : '/index/index/today_data',
	// 	  		where: {order_type : 'today'},
	// 	  		page:{
	// 	  			limit: 10,
	// 	  			limits: [10,20,30,40,50],
	// 	  			groups: 5

	// 	  		},
	// 	  		done: function (e) {
	// 			  	best_sty('#today_data', e.top_price_id, '今日最高单价',2);
	// 			  	best_sty('#today_data', e.top_time_id, '今日首单',1);
	// 		   		$("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
	// 		   	}
	// 		   });
		  	
	// 	  });






	// $("#history_data").on("click", function (e) {

	// 		// 历史记录 重载数据
	// 		tableIns.reload({
	// 			url : '/index/index/getdata',
	// 			where: {order_type : 'all'},
	// 	  page:{
	// 	  	limit: 10,
	// 	  	limits: [10,20,30,40,50],
	// 	  	groups: 5

	// 	  },
	// 	  			done: function (e) {
	// 			  	best_sty('#history_data', e.top_price_id,'历史最高单价',2);
	// 		   		$("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
	// 		   	}
	// 		   });
	// 	});


// $("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
	  exports('bodys', {}); //注意，这里是模块输出的核心，模块名必须和use时的模块名一致
	});