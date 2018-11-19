$(function () {

    $.validator.addMethod('password',function (val,ele) {
        return this.optional(ele) || /[a-z0-9A-Z]{6,8}$/.test(val);
    },'请输入6-8位的数字或字母');

    $('#myform').validate({
        rules: {
            phone: {
                required: true,
                minlength: 11
            },
            password: {
                required: true,
                password: true,
                minlength: 6
            }
        },
        message: {
            phone: {
                required: "请输入手机号",
                minlength: "最小长度为11位"
            },
            password: {
                required: "请输入密码",
                minlength: "最小长度为6位"
            }
        },
        submitHandler: function (forms) {
            let form = $('form[id=myform]');
            let fd = new FormData(form[0]);
            // console.log(form);
            $.ajax({
                url: '/10.24food/index.php/my/logincheck',
                type: 'POST',
                data: fd,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(res){
                    // console.log(res);
                    if(res.code == 0){
                        if(location.search){
                            // console.log(location.search);
                            let redirect = location.search.substring(location.search.indexOf('='))[1];
                            location.href = '/10.24food/index.php'+redirect;
                        }else{
                            location.href='/10.24food/index.php';
                        }
                    }else if(res.code == 1) {
                        alert(res.msg);
                    }
                }
            });
        }
    })
})