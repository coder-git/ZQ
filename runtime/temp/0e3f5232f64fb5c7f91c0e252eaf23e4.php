<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\WWW\ZQ\public/../application/index\view\index\index.html";i:1528796457;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css">
	<style>
	.big_city{height: 10rem;line-height: 10rem;border-radius: 5px;background: #e2e2e2;}
	.big_city p {font-size: 1.5rem;text-align: center;color:#fff;}
	.layui-body{overflow-y: scroll;}



	@media screen and (min-width:1200px){
		#slider{height: 750px;}

	}

	@media screen and (min-width:992px) and (max-width: 1199px){
		#slider{height: 500px;}
	}

	@media screen and (min-width:768px) and (max-width: 991px){
		#slider{height: 300px;}
	}

	@media screen and (min-width:480px) and (max-width: 767px){
		#slider{height: 200px;}
	}
</style>
</head>
<body>
	<script>
		console.log(screen);
	</script>
	<!-- [if lt IE 9]> 
<div class="browser-happy">
    <div class="up_browser">
        <p>本站不支持IE9以下浏览器访问！</p>
        <p style="width: 1em;height: 1em;"> </p>
        <p style="width: 1em;height: 1em;"> </p>
        <a href="http://browsehappy.com/"  class="layui-btn layui-btn-normal">立即更新</a>
        <p style="width: 1em;height: 1em;"> </p>

        <a href="javascript:;" class="close_this"> 强行访问 </a>
    </div>
</div>

<![endif] -->


<!-- <div class="layui-container">
	<div class="layui-row layui-col-space10">
		<div class="layui-col-xs12 layui-col-sm12 layui-col-md6" style="text-align: center;">
			
			<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="//music.163.com/outchain/player?type=2&id=27406244&auto=0&height=32"></iframe>
		</div>
		<div class="layui-col-xs12 layui-col-sm12 layui-col-md6" style="text-align: center;">
			<span class="layui-badge-dot"></span>
			<span class="layui-badge-dot layui-bg-orange"></span>
			<span class="layui-badge-dot layui-bg-green"></span>
			<span class="layui-badge-dot layui-bg-cyan"></span>
			<span class="layui-badge-dot layui-bg-blue"></span>
			<span class="layui-badge-dot layui-bg-black"></span>
			<span class="layui-badge-dot layui-bg-gray"></span>
		</div>
	</div>
</div>
-->

<hr class="layui-bg-gray">
<?php echo THINK_VERSION  ?>

<div class="nav" style="display: none;">
	<ul class="layui-nav layui-nav-tree layui-nav-side" lay-filter="test">
		<!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;">默认展开</a>
				<dl class="layui-nav-child">
					<dd><a href="javascript:;">选项1</a></dd>
					<dd><a href="javascript:;">选项2</a></dd>
					<dd><a href="">跳转</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item">
				<a href="javascript:;">解决方案</a>
				<dl class="layui-nav-child">
					<dd><a href="">移动模块</a></dd>
					<dd><a href="">后台模版</a></dd>
					<dd><a href="">电商平台</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item"><a href="">产品</a></li>
			<li class="layui-nav-item"><a href="">大数据</a></li>
		</ul>
	</div>



<!-- 	<div class="layui-container">


		<div class="layui-row layui-col-space10">
			<div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
				<a href="javascript:void(0);"><i class="layui-icon layui-icon-home" style="font-size: 2rem;"></i></a>
			</div>
			<div class="layui-col-xs6 layui-col-sm6 layui-col-md6" style="text-align: right;">
				<a href="javascript:void(0);">
					<i class="layui-icon layui-icon-spread-left" style="font-size: 2rem;"></i>
				</a>
			</div>

		</div>
	</div> -->
	<div class="layui-container">
		<div class="layui-row layui-col-space10">
			<div class="layui-carousel" id="slider">
				<div id="arr_imgs" carousel-item="">
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>
					<div><img src="/static/index/images/tiger.jpg" style="max-width: 100%"></div>

				</div>
			</div>
		</div>

	</div>
	<div class="layui-container">
		<div class="layui-row layui-col-space10">
			<div class="layui-col-xs12 layui-col-sm6 layui-col-md6" >
				<div class="big_city">
					<p id="today_data">今日新单</p>
				</div>
			</div>
			<div class="layui-col-xs12 layui-col-sm6 layui-col-md6" >
				<div class="big_city">
					<p id="history_data">历史榜单</p>
				</div>
			</div>
		</div>
		<div class="layui-row layui-col-space10">
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #009688;"><p>济南</p></div></div>
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #5FB878;"><p>济宁</p></div></div>
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #393D49;"><p>聊城</p></div></div>
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #1E9FFF;"><p>德州</p></div></div>
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #FFB800;"><p>邹城</p></div></div>
			<div class="layui-col-xs6 layui-col-sm4 layui-col-md3 layui-col-lg2"><div class="big_city" style="background: #FF5722;"><p>江门</p></div></div>
		</div>

		<div class="layui-row layui-col-space10">
		</div>
		<table id="index_table" lay-filter="order_table" lay-skin="line" >

		</table>


	</div>

	<script src="/static/layuiadmin/layui/layui.js"></script>
	<script> 
		layui.config({
  base: '/static/index/js_module/' //你存放新模块的目录，注意，不是layui的模块目录
}).use('index1'); //加载入口
</script>
<script>
	//layui.use(['layer', 'jquery'], function(){
		//var layer = layui.layer,$ = layui.jquery;

	// });

</script>

</body>
</html>