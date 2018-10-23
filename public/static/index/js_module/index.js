/**
  项目JS主入口
  **/    
  layui.define(['layer', 'form', 'table', 'carousel', 'util', 'jquery'], function(exports){
  	var layer = layui.layer
  	,form = layui.form
  	,table = layui.table
  	,carousel = layui.carousel
  	,util = layui.util
  	,$ = layui.$;

  // layer.msg('rigth');
  //data table render
  var tableIns = table.render({
		  elem: '#index_table' //指定原始表格元素选择器（推荐id选择器）
		  // ,height: 1000 //容器高度
		  ,limit:30
		  // ,skin:'line'
		  ,url:'/index/index/today_data'
		  ,text: {
		  	none: '暂无相关数据'
		  }
		  ,size:'lg'
		  ,even:true
		  ,initSort:{field:'starttime',type:'desc'}
		  // ,where : {
		  // 	order_type : 'today'
		  // }
		  ,page:{
		  	// layout: ['limit', 'count', 'prev', 'page', 'next', 'skip'],
		  	limit: 5,
		  	limits: [5,10,15,20,25],
		  	groups: 1 

		  }
		  ,cols: [[
		  {
		  	field:'id',
		  	title:'id',
		  	// width:'5%',
		  	sort:true,
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
		  	sort:true,
		  	align:'center'


		  }

		  ]]

		  ,done:function(e){
		  	best_sty(e.top_price_id,'最高单价',2);
		  	best_sty(e.top_time_id,'今日首单',1);
		  }
		  // ,//设置表头


		});



	//排序后重新添加徽章样式
	table.on('sort(order_table)', function(obj){ 

// tableIns.reload('order_table', {
// 	initSort:obj
// 	,where:{
// 		sort_reload:true
// 		,field:obj.field
// 		,order: obj.type
// 	},done:function(e){

// console.log('table done');

// 	}
// });


	});

	//slider render
	carousel.render({
		elem:'#slider',
		width:'100%',
		anim:'fade',
		height:'320px;',
		indicator:'none'
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

	//特殊徽章样式处理，id：要处理的行的id，str:展示内容
	function best_sty(id,str,type) {

		var change_dom = $(document).find("td[data-content='"+id+"']");
		if (type == 1) {
		$("#index_table").attr('top_time_id',id);
			change_dom.next("td[data-field='liable_person']").find("div").css({"font-weight":"bold","font-family":"'微软雅黑'","font-size":"1rem"}).prepend("<span class='layui-badge'>"+ str +"</span>");
		} else {
		$("#index_table").attr('top_price_id',id);
			change_dom.nextAll("td[data-field='price']").find("div").css({"font-weight":"bold","font-family":"'微软雅黑'","font-size":"1rem"}).prepend("<span class='layui-badge'>"+ str +"</span>");
		}
		change_dom.nextAll("td[data-field='price']").css({"font-weight":"bold"});


	}

	$("#today_data").on("click", function(e){
		  	// window.location.href="#index_table";
		  	// 重载今日数据
		  	tableIns.reload({
		  		url : '/index/index/today_data',
		  		where: {order_type : 'today'},
		  		page:{
		  			limit: 10,
		  			limits: [10,20,30,40,50],
		  			groups: 5

		  		},
		  		done: function (e) {
				  	best_sty(e.top_price_id,'今日最高单价',2);
				  	best_sty(e.top_time_id,'今日首单',1);
			   		$("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
			   	}
			   });
		  	
		  });






	$("#history_data").on("click", function (e) {

			// 历史记录 重载数据
			tableIns.reload({
				url : '/index/index/getdata',
				where: {order_type : 'all'},
		  page:{
		  	limit: 10,
		  	limits: [10,20,30,40,50],
		  	groups: 5

		  },
		  			done: function (e) {
				  	best_sty(e.top_price_id,'历史最高单价',2);
			   		$("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
			   	}
			   });
		});


// $("html,body").animate({scrollTop: $("#index_table").offset().top}, 1000);
	  exports('index', {}); //注意，这里是模块输出的核心，模块名必须和use时的模块名一致
	});    