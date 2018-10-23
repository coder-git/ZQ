//以下为修改jQuery Validation插件兼容Bootstrap的方法，没有直接写在插件中是为了便于插件升级
        $.validator.setDefaults({
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function (element) {
                element.closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: "span",
            errorPlacement: function (error, element) {
                if (element.is(":radio") || element.is(":checkbox")) {
                    error.appendTo(element.parent().parent().parent());
                } else {
                    error.appendTo(element.parent());
                }
            },
            errorClass: "help-block m-b-none",
            validClass: "help-block m-b-none",
            submitHandler: function(form){
                // form.submit();
                var formval = $("#signupForm").serialize();

                $.ajax({
                    url:savefrom,
                    type:'post',
                    data:formval,
                    success: function(res){
                        if (res.code == 0) {
                            layer.msg(res.msg,{anim:0,time:1000},function(){
                                window.location.href=res.url;
                            });
                        } else {
                            layer.msg(res.msg,{anim:0,time:1000},function(){
                                window.location.href=res.url;
                            })
                        }
                    }

                });
                return false;
            }


        });

        //以下为官方示例
        $().ready(function () {
            // validate the comment form when it is submitted
            $("#commentForm").validate();

            // validate signup form on keyup and submit
            var icon = "<i class='fa fa-times-circle'></i> ";
            $("#signupForm").validate({
                rules: {
                    staff_name: {
                        required: true,
                        maxlength: 4
                    },
                    age: {
                        required:true,
                        digits:true,
                        max:80,
                        min:16,
                        rangelength:[1,3]
                    },
                    worktime: {
                        required: true,
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        rangelength:[10,11]

                    },
                    idcard: {
                        required: true,
                        rangelength:[18,18]
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    topic: {
                        required: "#newsletter:checked",
                        minlength: 2
                    },
                    agree: "required"
                },
                debug:true,
                messages: {
                    staff_name: {
                        requeired: icon + "请输入姓名",
                        maxlength: icon + "请正确输入姓名"
                    },
                    age: {
                        required: icon + '不能为空',
                        digits: icon + '请输入数字',
                        max: icon + '最大80',
                        min: icon + '不能小于16啊'
                    },
                    worktime:{
                        required: icon + "请选择入职日期"
                    },
                    mobile: {
                        rangelength: "请输入11位"
                    },
                    idcard: {
                        required: icon + "请输入您的身份证号",
                        rangelength: icon + "18位"
                    },
                    password: {
                        required: icon + "请输入您的密码",
                        minlength: icon + "密码必须5个字符以上"
                    },
                    confirm_password: {
                        required: icon + "请再次输入密码",
                        minlength: icon + "密码必须5个字符以上",
                        equalTo: icon + "两次输入的密码不一致"
                    },
                    email: icon + "请输入您的E-mail",
                    agree: {
                        required: icon + "必须同意协议后才能注册",
                        element: '#agree-error'
                    }
                },

            });

            // propose username by combining first- and lastname
            $("#username").focus(function () {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = firstname + "." + lastname;
                }
            });
        });
