//解构
let {$,upload,form} = layui;
let thumb = $('input:hidden[name=thumb]');
let views = $('input:hidden[name=views]');
let imgBox = $('.imgBox');
let imgBox1 = $('.imgBox1');  //缩略图
let arr = [];
// 多图上传  实景
upload.render({
    elem: '#test1' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMime:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,multiple: true //发送多次请求
    ,done: function(res){
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
        $('<li>').html(html).appendTo(imgBox);
    }
});
//点击多图删除
imgBox.on('click','.layui-icon-face-cry',function () {
    let lis = $(this).closest('li');
    let index = lis.index();
    lis.remove();
    arr.splice(index,1);
    views.val(arr.join(','));
});
// 单图上传  缩略图
upload.render({
    elem: '#test2' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMime:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,done: function(res,index,upload){
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
        //点击imgBox中的删除
        imgBox1.on('click','.layui-icon-face-cry',function () {
            $(this).closest('li').remove();
            thumb.val('');
        });
    }
});

form.on('submit(submit)',function (data) {
    // console.log(data.field);
    if(!data.field.thumb){
        layer.alert('请上传缩略图');
        return false;
    }
    if(!data.field.views){
        layer.alert('请上传实景图');
        return false;
    }
    // let qs = $('form').serialize();
    delete data.field.file;
    // data.field.views = data.field.views.slice(0,-1);
    $.ajax({
        type: 'POST',
        url: '/10.24food/index.php/manageshop/insert',
        data: data.field,
        dataType: 'json',
        success: function (res) {
            if(res.code == 0){
                alert('插入成功');
                location.href = '/10.24food/index.php/manageshop';
            }
        }
    });
    return false;
});
