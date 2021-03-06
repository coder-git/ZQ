<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\WWW\ZQ\public/../application/admin\view\user\index.html";i:1535078247;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>zq 后台主题UI框架 - 排版</title>
    <meta name="keywords" content="zq后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="zq是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    <link href="/static/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人信息</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <?php if(!empty($data) && isset($data)):?>
                    <div class="ibox-content table-responsive">
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <td class="text-center">姓名：<?php echo $data['staff_name']; ?></td>
                                <td class="text-center">性别： <?php echo $data['sex']; ?></td>
                                <td class="text-center">年龄：<?php echo $data['age']; ?></td>
                                
                                <td class="text-center">出生年月： <?php echo $data['birthday_mouth']; ?></td>
                                <td class="text-center">手机号：<?php echo $data['mobile']; ?></td>
                                <td class="text-center">入职时间： <?php echo $data['worktime']; ?></td>


                            </tr>
                            <tr class="text-center">
                                <td class="text-center">学历： <?php echo $data['education']; ?></td>
                                <td class="text-center">专业： <?php echo $data['subject']; ?></td>
                                <td class="text-center">身份证号：<?php echo $data['idcard']; ?></td>
                                <td class="text-center">毕业院校：<?php echo $data['school']; ?></td>
                                <td class="text-center">户籍地址：<?php echo $data['per_address']; ?></td>
                                <td class="text-center">现居地址：<?php echo $data['now_address']; ?></td>

                            </tr>
                            <tr class="text-center">
                                <td class="text-center">生日：<?php echo $data['birthday']; ?></td>
                                <td class="text-center">婚姻状况：<?php echo $data['marriage']; ?></td>
                                <td class="text-center">生育状况：<?php echo $data['child']; ?></td>
                            </tr>
                        </table>

                        <h5>在职信息</h5>
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <td class="text-center">职务：<?php echo $data['post']; ?></td>
                                <td class="text-center">部门： <?php echo $data['department']['department']; ?></td>
                                <td class="text-center">公司座机：<?php echo $data['seat']; ?></td>
                                
                                <td class="text-center">紧急联系电话： <?php echo $data['urgent_tel']; ?></td>
                                <td class="text-center">QQ号： <?php echo $data['qq']; ?></td>
                                <td class="text-center">百度hi号： <?php echo $data['hi']; ?></td>
                                <td class="text-center">邮箱地址： <?php echo $data['email']; ?></td>


                            </tr>
                            <tr class="text-center">
                                <td class="text-center">银行卡开户行：<?php echo $data['bank_name']; ?></td>
                                <td class="text-center">银行卡号： <?php echo $data['bank_num']; ?></td>
                                <td class="text-center">持卡人姓名：<?php echo $data['card_user']; ?></td>


                            </tr>

                        </table>



                    </div>

                    <?php else:?>
                    <h5>暂无个人信息，<a href="<?php echo url('user/edit'); ?>">去添加?</a></h5>
                    <?php endif;?>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>无样式列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <ul class="unstyled">
                            <li>立 志</li>
                            <li>
                            志不立，天下无可成之事。虽百工技艺，未有不本于志者。今学者旷废隳惰，玩岁愒时，而百无所成，皆由于志之未立耳。故立志而圣，则圣矣；立志而贤，则贤矣；志不立，如无舵之舟，无衔之马，漂荡奔逸，终亦何所底乎？昔人有言：「使为善而父母怒之，兄弟怨之，宗族乡党贱恶之，如此而不为善，可也。为善则父母爱之，兄弟悦之，宗族乡党敬信之，何苦而不为善、为君子？使为恶而父母爱之，兄弟悦之，宗族乡党敬信之，如此而为恶，可也。为恶则父母怒之，兄弟怨之，宗族乡党贱恶之，何苦必为恶、为小人？」诸生念此，亦可以知所立志矣。</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>无序列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <ul>
                            <li>勤 学</li>
                            <li>
                                已立志为君子，自当从事于学。凡学之不勤，必其志之尚未笃也。从吾游者，不以聪慧警捷为高，而以勤确谦抑为上。诸生试观侪辈之中，苟有「虚而为盈，无而为有」，讳己之不能，忌人之有善，自矜自是，大言欺人者，使其人资禀虽甚超迈，侪辈之中有弗疾恶之者乎？有弗鄙贱之者乎？彼固将以欺人，人果遂为所欺，有弗窃笑之者乎？苟有谦默自持，无能自处，笃志力行，勤学好问；称人之善，而咎己之失；从人之长，而明己之短，忠信乐易，表里一致者，使其人资禀虽甚鲁钝，侪辈之中，有弗称慕之者乎？彼固以无能自处，而不求上人，人果遂以彼为无能，有弗敬尚之者乎？诸生观此，亦可以知所从事于学矣。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>有序列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <ol>
                            <li>改过</li>
                            <li>
                                夫过者，自大贤所不免，然不害其卒为大贤者，为其能改也。故不贵于无过，而贵于能改过。诸生自思，平日亦有缺于廉耻忠信之行者乎？亦有薄于孝友之道，陷于狡诈偷刻之习者乎？诸生殆不至于此。不幸或有之，皆其不知而误蹈，素无师友之讲习规饬也。诸生试内省，万一有近于是者，固亦不可以不痛自悔咎，然亦不当以此自歉，遂馁于改过从善之心。但能一旦脱然洗涤旧染，虽昔为盗寇，今日不害为君子矣。若曰吾昔已如此，今虽改过而从善，将人不信我，且无赎于前过，反怀羞涩疑沮，而甘心于污浊终焉，则吾亦绝望尔矣。
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>强调</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p class="text-danger">醲肥辛甘非真味，真味只是淡；神奇卓异非至人，至人只是常。</p>
                        <p class="text-muted">宁有求全之毁，不可有过情之誉；宁有无妄之灾，不可有非分之福。</p>
                        <p class="text-primary">爱是万缘之根，当知割舍。识是众欲之本，要力扫除。</p>
                        <p class="text-success">一场闲富贵，狠狠争来，虽得还是失；百岁好光阴，忙忙过了，纵寿亦为夭。</p>
                        <p class="text-info">地宽天高，尚觉鹏程之窄小；云深松老，方知鹤梦之悠闲。</p>
                        <p class="text-warning">两个空拳握古今，握住了还当放手；一条竹杖挑风月，挑到时也要息肩。</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>引用</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="typography.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="typography.html#">选项1</a>
                                </li>
                                <li><a href="typography.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <blockquote>
                            <p>余通籍三十余年，官至极品， 而学业一无所成，德行一无可许，老人徒伤，不胜悚惶惭赧。今将永别，特立四条以教汝兄弟。一曰慎独则心安。自修之道，莫难于养心；养心之难，又在慎独。能慎独，则内省不疚，可以对天地质鬼神。人无一内愧之事，则天君泰然，此心常快足宽平，是人生第一自强之道，第一寻乐之方，守身之先务也。</p>
                            <small><strong>曾国藩</strong>-<cite title="" data-original-title="">曾国藩</cite></small>
                        </blockquote>

                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


</div>

<!-- 全局js -->
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>



<!-- 自定义js -->
<script src="/static/admin/js/content.js?v=1.0.0"></script>




</body>

</html>
