//解构
let {$,upload,form} = layui;
let thumb = $('input:hidden:eq(0)');
let imgBox = $('.imgBox');
upload.render({
    elem: '#test1' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMine:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,done: function(res){
        let lis = $('.imgBox>li');
        if(lis.length){
            $('img',lis).attr('src',res.msg);
            thumb.val(res.msg);

        }else {
            //上传完毕回调
            let html = `
                        <img src="${res.msg}" alt="" id="thumb">
                        <div class="mask"></div>
                        <div class="button">
                            <i class="layui-icon layui-icon-face-smile"></i>
                            <i class="layui-icon layui-icon-face-cry"></i>
                        </div>
                    `;
            thumb.val(res.msg);

            $('<li>').html(html).appendTo(imgBox);
        }
            imgBox.on('click','.layui-icon-face-cry',function () {
                $(this).closest('li').remove();
                thumb.val('');
            });

    }
});

form.on('submit(submit)',function (data) {
    // let qs = data.field;
    // if(!data.field.thumb){
    //     layer.alert('请上传图片');
    //     return false;
    // }
    let qs = $('form').serialize();
    $.ajax({
        url: '/10.24food/index.php/managecate/update',
        data: qs,
        dataType: 'json',
        success: function (res) {
            if(res.code == 0){
                alert('修改栏目成功');
                location.href = '/10.24food/index.php/managecate';
            }
        }
    });
    return false;
});
