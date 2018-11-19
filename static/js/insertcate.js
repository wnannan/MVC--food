//解构
let {$,upload,form} = layui;
let thumb = $('input:hidden');
let imgBox = $('.imgBox');
upload.render({
    elem: '#test1' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMine:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,done: function(res,index,upload){
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
        //点击imgBox中的删除
        imgBox.on('click','.layui-icon-face-cry',function () {
            $(this).closest('li').remove();
            thumb.val('');
        });
    }
});




form.on('submit(submit)',function (data) {
    // let qs = data.field;
    if(!data.field.thumb){
        layer.alert('请上传图片');
        return false;
    }
    let qs = $('form').serialize();
    $.ajax({
        url: '/10.24food/index.php/managecate/insert1',
        data: qs,
        dataType: 'json',
        success: function (res) {
            if(res.code == 0){
                alert('插入成功');
                location.href = '/10.24food/index.php/managecate/insert';
            }
        }
    });
    return false;
});
