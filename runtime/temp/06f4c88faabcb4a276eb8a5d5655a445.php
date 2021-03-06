<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\WWW\ZQ\public/../application/admin\view\user\edit.html";i:1534835923;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 表单验证 jQuery Validation</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    <link href="/static/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
<!--         <div class="row">

            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>jQuery Validate 简介</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="tabs_panels.html#">选项1</a>
                                </li>
                                <li><a href="tabs_panels.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p>jquery.validate.js 是一款优秀的jQuery表单验证插件。它具有如下特点：</p>
                        <ul>
                            <li>安装简单</li>
                            <li>内置超过20种数据验证方法</li>
                            <li>直列错误提示信息</li>
                            <li>可扩展的数据验证方法</li>
                            <li>使用内置的元数据或插件选项来指定您的验证规则</li>
                            <li>优雅的交互设计</li>
                        </ul>
                        <p>官网：<a href="http://jqueryvalidation.org/" target="_blank">http://jqueryvalidation.org/</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>完善资料</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
<?php if(isset($data) && !empty($data)):?>
                        <form class="form-horizontal m-t" id="signupForm">

                            <div class="form-group col-sm-4">
                                <label class="col-sm-8 control-label">姓名：</label>
                                <div class="col-sm-4">
                                    <input id="staff_name" name="staff_name" class="form-control" type="text" value="<?php echo !empty($data['staff_name'])?$data['staff_name']:''; ?>">
                                    <!-- <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span> -->
                                </div>
                            </div>
                            <div class="form-group col-sm-2">

                                <div class="col-sm-10 text-center" >
                                    <label class="control-label sr-only">性别：</label>


                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="男" name="sex"  <?php if($data['sex'] == '男'): ?>checked=""<?php endif; ?>>
                                        <label for="inlineRadio1">男</label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio2" value="女" name="sex" <?php if($data['sex'] == '女'): ?>checked=""<?php endif; ?>>
                                        <label for="inlineRadio2">女</label>
                                    </div>


                                </div>
                            </div>
                            <div class="form-group col-sm-2">

                                <label class="col-sm-6 control-label">年龄：</label>
                                <div class="col-sm-6">
                                    <input id="age" name="age" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid" value="<?php echo $data['age']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-4 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="email" name="email" class="form-control" type="email" value="<?php echo $data['email']; ?>">
                                </div>

                            </div>
                            <div class="form-group col-sm-12"></div>


                            <div class="form-group col-sm-4">
                                <label class="col-sm-8 control-label">出生年月：</label>
                                <div class="col-sm-4">
                                    <input id="birthday_mouth" name="birthday_mouth" class="form-control layer-date" type="text" aria-required="true" aria-invalid="true" class="error" value="<?php echo $data['birthday_mouth']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-sm-4 control-label">入职时间：</label>
                                <div class="col-sm-8">
                                    <input id="worktime" name="worktime" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" value="<?php echo $data['worktime']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-sm-4 control-label">生日：</label>
                                <div class="col-sm-8">
                                    <input id="birthday" name="birthday" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" value="<?php echo $data['birthday']; ?>">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>请选择农历生日</span>
                                </div>
                            </div>
                            <div class="form-group col-sm-12"></div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">手机号：</label>
                                <div class="col-sm-8">
                                    <input id="mobile" name="mobile" class="form-control" type="text" value="<?php echo $data['mobile']; ?>"  digits:true aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">身份证号：</label>
                                <div class="col-sm-8">
                                    <input id="idcard" name="idcard" class="form-control" type="text" required="" value="<?php echo $data['idcard']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">户籍地址：</label>
                                <div class="col-sm-8">
                                    <input id="per_address" name="per_address" class="form-control" type="text" required="" value="<?php echo $data['per_address']; ?>">
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">现居地址：</label>
                                <div class="col-sm-8">
                                    <input id="now_address" name="now_address" class="form-control" type="text" required="" value="<?php echo $data['now_address']; ?>">
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">学历：</label>
                                <div class="col-sm-2">
                                    <input id="education" name="education" class="form-control" type="text" value="<?php echo $data['education']; ?>">
                                </div>
                                <label class="col-sm-1 control-label">专业：</label>
                                <div class="col-sm-2">
                                    <input id="subject" name="subject" class="form-control" type="text" value="<?php echo $data['subject']; ?>">
                                </div>
                                <label class="col-sm-1 control-label">毕业院校：</label>
                                <div class="col-sm-2">
                                    <input id="school" name="school" class="form-control" type="text" value="<?php echo $data['school']; ?>">
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">婚姻状况：</label>
                                <div class="col-sm-2">
                                    <input id="marriage" name="marriage" class="form-control" type="text" value="<?php echo $data['marriage']; ?>">
                                </div>
                                <label class="col-sm-1 control-label">生育状况：</label>
                                <div class="col-sm-2">
                                    <input id="child" name="child" class="form-control" type="text" value="<?php echo $data['child']; ?>">
                                </div>

                            </div>
                            <h5 class="col-sm-12 text-left">职业信息:</h5>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4 control-label">部门：</label>
                                    <div class="col-sm-8">
                                        <input id="deparment" name="deparment" class="form-control" type="text" required="" value="<?php echo $data['deparment']; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">

                                    <label class="col-sm-4 control-label text-center">职务：</label>
                                    <div class="col-sm-8">
                                        <input id="post" name="post" class="form-control" type="text" required="" value="<?php echo $data['post']; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4 control-label">QQ：</label>
                                    <div class="col-sm-8">
                                        <input id="qq" name="qq" class="form-control" type="text"  value="<?php echo $data['qq']; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">

                                    <label class="col-sm-4 control-label text-center">百度hi：</label>
                                    <div class="col-sm-8">
                                        <input id="hi" name="hi" class="form-control" type="text"  value="<?php echo $data['hi']; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-4 control-label text-center">公司座机：</label>
                                <div class="col-sm-8">
                                    <input id="seat" name="seat" class="form-control" type="text" value="<?php echo $data['seat']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-6 control-label text-center">紧急联系电话：</label>
                                <div class="col-sm-6">
                                    <input id="urgent_tel" name="urgent_tel" class="form-control" type="text" value="<?php echo $data['urgent_tel']; ?>">
                                </div>                                
                            </div>
                                <div class="col-sm-2"></div>

                        </div>

                            <div class="col-sm-12">


                            <div class="form-group col-sm-6">
                                <label class="col-sm-6 control-label">银行卡开户行：</label>
                                <div class="col-sm-6">
                                    <input id="bank_name" name="bank_name" class="form-control"  type="text" value="<?php echo $data['bank_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-sm-3 control-label text-center">银行卡号：</label>
                                <div class="col-sm-6">
                                    <input id="bank_num" name="bank_num" class="form-control" data-mask="9999 9999 9999 9999" type="text" value="<?php echo $data['bank_num']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-sm-6 control-label">持卡人姓名：</label>
                                <div class="col-sm-6">
                                    <input id="card_user" name="card_user" class="form-control" type="text" value="<?php echo $data['card_user']; ?>">
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                        </form>
<?php else:?>

 <form class="form-horizontal m-t" id="signupForm">

                            <div class="form-group col-sm-4">
                                <label class="col-sm-8 control-label">姓名：</label>
                                <div class="col-sm-4">
                                    <input id="staff_name" name="staff_name" class="form-control" type="text">
                                    <!-- <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span> -->
                                </div>
                            </div>
                            <div class="form-group col-sm-2">

                                <div class="col-sm-10 text-center" >
                                    <label class="control-label sr-only">性别：</label>


                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="男" name="sex" checked="">
                                        <label for="inlineRadio1">男</label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio2" value="女" name="sex" >
                                        <label for="inlineRadio2">女</label>
                                    </div>


                                </div>
                            </div>
                            <div class="form-group col-sm-2">

                                <label class="col-sm-6 control-label">年龄：</label>
                                <div class="col-sm-6">
                                    <input id="age" name="age" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid"  >
                                </div>
                            </div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-4 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="email" name="email" class="form-control" type="email" >
                                </div>

                            </div>
                            <div class="form-group col-sm-12"></div>


                            <div class="form-group col-sm-4">
                                <label class="col-sm-8 control-label">出生年月：</label>
                                <div class="col-sm-4">
                                    <input id="birthday_mouth" name="birthday_mouth" class="form-control layer-date" type="text" aria-required="true" aria-invalid="true" class="error" >
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-sm-4 control-label">入职时间：</label>
                                <div class="col-sm-8">
                                    <input id="worktime" name="worktime" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" >
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-sm-4 control-label">生日：</label>
                                <div class="col-sm-8">
                                    <input id="birthday" name="birthday" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" >
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>请选择农历生日</span>
                                </div>
                            </div>
                            <div class="form-group col-sm-12"></div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">手机号：</label>
                                <div class="col-sm-8">
                                    <input id="mobile" name="mobile" class="form-control" type="text"   digits:true aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">身份证号：</label>
                                <div class="col-sm-8">
                                    <input id="idcard" name="idcard" class="form-control" type="text" required=""  >
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">户籍地址：</label>
                                <div class="col-sm-8">
                                    <input id="per_address" name="per_address" class="form-control" type="text" required="">
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">现居地址：</label>
                                <div class="col-sm-8">
                                    <input id="now_address" name="now_address" class="form-control" type="text" required="" >
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">学历：</label>
                                <div class="col-sm-2">
                                    <input id="education" name="education" class="form-control" type="text" >
                                </div>
                                <label class="col-sm-1 control-label">专业：</label>
                                <div class="col-sm-2">
                                    <input id="subject" name="subject" class="form-control" type="text" >
                                </div>
                                <label class="col-sm-1 control-label">毕业院校：</label>
                                <div class="col-sm-2">
                                    <input id="school" name="school" class="form-control" type="text">
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 control-label">婚姻状况：</label>
                                <div class="col-sm-2">
                                    <input id="marriage" name="marriage" class="form-control" type="text" >
                                </div>
                                <label class="col-sm-1 control-label">生育状况：</label>
                                <div class="col-sm-2">
                                    <input id="child" name="child" class="form-control" type="text" >
                                </div>

                            </div>
                            <h5 class="col-sm-12 text-left">职业信息:</h5>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4 control-label">部门：</label>
                                    <div class="col-sm-8">
                                        <input id="deparment" name="deparment" class="form-control" type="text" required="" >
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">

                                    <label class="col-sm-4 control-label text-center">职务：</label>
                                    <div class="col-sm-8">
                                        <input id="post" name="post" class="form-control" type="text" required="" >
                                    </div>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4 control-label">QQ：</label>
                                    <div class="col-sm-8">
                                        <input id="qq" name="qq" class="form-control" type="text"  >
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">

                                    <label class="col-sm-4 control-label text-center">百度hi：</label>
                                    <div class="col-sm-8">
                                        <input id="hi" name="hi" class="form-control" type="text"  >
                                    </div>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-4 control-label text-center">公司座机：</label>
                                <div class="col-sm-8">
                                    <input id="seat" name="seat" class="form-control" type="text" >
                                </div>
                            </div>
                            <div class="form-group col-sm-4">

                                <label class="col-sm-6 control-label text-center">紧急联系电话：</label>
                                <div class="col-sm-6">
                                    <input id="urgent_tel" name="urgent_tel" class="form-control" type="text" >
                                </div>                                
                            </div>
                                <div class="col-sm-2"></div>

                        </div>

                            <div class="col-sm-12">


                            <div class="form-group col-sm-6">
                                <label class="col-sm-6 control-label">银行卡开户行：</label>
                                <div class="col-sm-6">
                                    <input id="bank_name" name="bank_name" class="form-control"  type="text" >
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-sm-3 control-label text-center">银行卡号：</label>
                                <div class="col-sm-6">
                                    <input id="bank_num" name="bank_num" class="form-control" data-mask="9999 9999 9999 9999" type="text" >
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-sm-6 control-label">持卡人姓名：</label>
                                <div class="col-sm-6">
                                    <input id="card_user" name="card_user" class="form-control" type="text" >
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                        </form>

                        <?php endif;?>




                    </div>
                </div>
            </div>
        </div>
 
    </div>


    <!-- 全局js -->
    <script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
        <script src="/static/admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- 自定义js -->
    <script src="/static/admin/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="/static/admin/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/static/admin/js/plugins/validate/messages_zh.min.js"></script>
    <script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/static/admin/js/demo/form-validate-demo.js"></script>
    <script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
    <script src="/static/admin/js/plugins/layer/layer.min.js"></script>
    <script src="/static/admin/js/plugins/moment/moment.js"></script>



    <script>

// dates.setFullYear(dates.getFullYear() -16);
var maxdate = moment().subtract(16,'years');
var mindate = moment().subtract(80,'years');
var savefrom = "<?php echo url('StaffData/save_profile'); ?>";



laydate.render({
  elem: '#birthday_mouth',
  type:'month',
  format: 'yyyy-MM',
  value:'1990-01',
  max:maxdate.format('YYYY-MM')

});
laydate.render({
  elem: '#worktime',
  min:'2009-01-01',
  max:7,
});
laydate.render({
  elem: '#birthday',
  min:mindate.format('YYYY-MM-DD'),
  max:maxdate.format('YYYY-MM-DD'),
  format:'yyyy年M月d',
  value:'1995年8月1'

});
</script>


</body>

</html>
