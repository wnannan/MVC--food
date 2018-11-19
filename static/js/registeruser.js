$(function () {
//    点击注册按钮，取消默认事件
//    获取input数据
//     form.serialize();
//     let fd = new FormData(form[0]);
//    AJAX请求
    $.validator.addMethod('password',function (val,ele) {
        return this.optional(ele) || /[a-z0-9A-Z]{6,8}$/.test(val);
    },'6-8位字母或数字');
    let btn = $('input[type=submit]');
    $('#myform').validate({
        rules: {
            phone: {
                required: true,
                minlength: 11,
                remote: {
                    url: '/10.24food/index.php/my/checkusername',
                    type: 'POST',
                    data: {
                        phone: function () {
                            return $('input[name=phone]').val();
                        }
                    }
                }
            },
            password: {
                required: true,
                password: true,
                minlength: 6
            },
            password1: {
                required: true,
                password: true,
                equalTo: '#password'
            }
        },
        message: {
            phone: {
                required: "请输入手机号",
                minlength: "最小长度为11位",
                romate: "手机号已注册",
            },
            password: {
                required: "请输入密码",
                minlength: "最小长度为6位"
            },
            password1: {
                required: "请输入密码",
                equalTo: "两次密码需一致"
            }
        },
        submitHandler: function (forms) {
            let form = $('form[id=myform]');
            let fd = new FormData(form[0]);
            $.ajax({
                url: '/10.24food/index.php/my/registercheck',
                type: 'POST',
                data: fd,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(res){
                    if(res.msg == 0){
                        alert('注册成功');
                        location.href="/10.24food/index.php/my/logincheck"
                    }else {
                        alert('注册失败');
                    }
                }
            });
        }
    });
})