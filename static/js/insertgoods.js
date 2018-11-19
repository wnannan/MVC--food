//解构
let {$,upload,form} = layui;
let thumb = $('input:hidden[name=thumb]');
// let views = $('input:hidden[name=views]');
// let imgBox = $('.imgBox');
let imgBox = $('.imgBox');  //缩略图
// 单图上传  缩略图
upload.render({
    elem: '#test2' //绑定元素
    ,url: '/10.24food/index.php/upload' //上传接口
    ,acceptMime:'image/jpg, image/jpeg, image/webp, image/png, image/gif'
    ,exts: 'jpg|jpeg|webp|png|gif'
    ,done: function(res,index,upload){
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
        //点击imgBox中的删除
        imgBox.on('click','.layui-icon-face-cry',function () {
            $(this).closest('li').remove();
            thumb.val('');
        });
    }
});

form.on('select(shop)', function(data){
/*        console.log(data.elem); //得到select原始DOM对象
        console.log(data.value); //得到被选中的值
        console.log(data.othis); //得到美化后的DOM对象*/
    $.ajax({
        url: '/10.24food/index.php/managegoods/init2',
        data: {id:data.value},
        dataType: 'json',
        success: function (res) {
            let sel = $("#gid");
            let html = "";
            for(let v in res){
                html += `<option value="${res[v].gid}"> ${res[v].title} </option>`;
            }
            sel.html(html);
            form.render('select');
        }
    })
});
form.on('submit(submit)',function (data) {
    // console.log(data.field);
    if(!data.field.thumb){
        layer.alert('请上传缩略图');
        return false;
    }
    // let qs = $('form').serialize();
    delete data.field.file;
    // data.field.views = data.field.views.slice(0,-1);
    $.ajax({
        type: 'POST',
        url: '/10.24food/index.php/managegoods/insert',
        data: data.field,
        dataType: 'json',
        success: function (res) {
            if(res.code == 0){
                alert('插入成功');
                location.href = '/10.24food/index.php/managegoods';
            }
        }
    });
    return false;
});


