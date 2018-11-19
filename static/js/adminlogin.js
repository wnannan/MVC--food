// let form = layui.form;
let {form,$,layer} = layui;
//用户名密码输入验证
form.verify({
    username: function(value,item){
        if(!/[a-z]{3,10}/.test(value)){
            return '用户名必须是3-10位的字母';
        }
    },
    password: [
        /^[\S]{4,12}$/
        ,'密码必须4到12位，且不能出现空格'
    ]
})

//事件监听，跳出弹框
form.on('submit(formDemo)',function(data){
    // data: let qu = $('form').serialize();

    $.ajax({
        url: '/10.24food/index.php/adminlogin/check',
        data: data.field,
        success: function (res) {
            if(res == 'success'){
                layer.open({
                    type: 0,
                    title: '登录成功',
                    content: `欢迎${data.field.username}`,
                    btn: '关闭',
                    area: ['200px','150px'],
                    time: 3000,
                    btnAlign: 'c',
                    skin: 'demo-class'
                })
                location.href = '/10.24food/index.php/managecate';
            }else {
                layer.open({
                    type: 0,
                    title: '登录失败',
                    content: '请重新登录',
                    btn: '关闭',
                    area: ['200px','150px'],
                    time: 3000,
                    btnAlign: 'c',
                    skin: 'demo-class'
                })
            }

        }
    })
    return false;
})