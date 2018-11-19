//解构
let {$,upload,form} = layui;
let thumb = $('input:hidden:eq(0)');
let views = $('input:hidden:eq(1)');
console.log(views);
let imgBox1 = $('.imgBox1'); //单图
let imgviews = $('.imgBox');
let arr = [];

upload.render({
    elem: '#test2' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMime:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,done: function(res){
        let lis = $('.imgBox1>li');
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

            $('<li>').html(html).appendTo(imgBox1);
        }
            imgBox1.on('click','.layui-icon-face-cry',function () {
                $(this).closest('li').remove();
                thumb.val('');
            });

    }
});
//多图
upload.render({
    elem: '#test1' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMime:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,multiple: true
    ,done: function(res){
        let lis = $('.imgBox>li');
        // console.log(lis);

            //上传完毕回调
            let html = `
                        <img src="${res.msg}" alt="" id="views">
                        <div class="mask"></div>
                        <div class="button">
                            <i class="layui-icon layui-icon-face-smile"></i>
                            <i class="layui-icon layui-icon-face-cry"></i>
                        </div>
                    `;
        let val = views.val();
        if(!val){
            views.val(res.msg);
        }else{
            views.val(val+','+res.msg);
        }
        arr.push(res.msg);
        $('<li>').html(html).appendTo(imgviews);
    }
});
imgviews.on('click','.layui-icon-face-cry',function () {
    let lis = $(this).closest('li');
    let index = lis.index();
    lis.remove();
    arr.splice(index,1);
    views.val(arr.join(','));
})

form.on('submit(submit)',function (data) {
    // let qs = data.field;
    // if(!data.field.thumb){
    //     layer.alert('请上传图片');
    //     return false;
    // }
    let qs = $('form').serialize();
    $.ajax({
        type: 'GET',
        url: '/10.24food/index.php/manageshop/update',
        data: qs,
        dataType: 'json',
        success: function (res) {
            if(res.code == 0){
                alert('修改店铺成功');
                location.href = '/10.24food/index.php/manageshop/query1';
            }
        }
    });
    return false;
});
