//解构
let {$,form} = layui;

form.on('submit(submit)',function (data) {
    // let qs = $('form').serialize();
    //FormData表单  type:post，原生DOM对象
    let fd = new FormData($('form')[0]);

    $.ajax({
        url: '/10.24food/index.php/managegtype/insert',
        data: fd,
        dataType: 'json',
        type: 'post',
        processData:false,
        contentType:false,
        success: function (res) {
            if(res.code == 0){
                alert('插入成功');
                location.href = '/10.24food/index.php/managegtype';
            }
        }
    });
    return false;
});
