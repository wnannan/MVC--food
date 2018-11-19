let {table,$,layer} = layui;
table.render({
    elem: '#table',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'id', title: 'ID', width: 50, sort: true},    //数据库表中的字段名对应要显示的表头
        {field: 'shopname', title: '店铺名称', width: 86},
        {field: 'thumb', title: '缩略图', templet:`<div><img src="{{d.thumb}}" alt=""></div>`},
        {field: 'title', title: '所属分类', width: 88},
        {field: 'sale', title: '销量', width: 70, sort: true},
        {field: 'score', title: '评分', width: 70, sort: true},
        {field: 'notice', title: '公告'},
        {field: 'fee', title: '费用', width: 66, sort: true},
        {field: 'views', title: '实景图', templet: function (d) {
            //    d当前数据
                let arr = d.views.split(',');
                let html = "<div>";
                arr.forEach(ele=>{
                    html += `
                    <img src="${ele}">
                    `;
                });
                html += `</div>`;

                return html;
            }},
        {field: 'slogan', title: '理念'},
        {field: 'stype', title: '类型', width: 60},
        {field: 'phone', title: '联系方式'},
        {fixed: 'right', title:'操作', toolbar: '#barDemo'},
    ]],    //表头，必填二维数组
    url: '/10.24food/index.php/manageshop/query',
    page: true,  //分页，默认每页10条数据
    limit: 3,
    loading: true,
    toolbar: '#toolbarDemo',
    id: 'testReload',
    autoSort: false,
})
// 多选删除
table.on('toolbar(test)',function(obj){
    var checkStatus = table.checkStatus(obj.config.id);
    if(obj.event == 'delete'){
        let data = checkStatus.data;
        // console.log(data);
        let arr = data.map(ele=>ele.id);
        // console.log(arr);
        $.ajax({
            url: '/10.24food/index.php/manageshop/del',
            data: {id:arr.join()},
            success: function (res) {
                if(res == 'yes'){
                    alert('删除成功');
                    location.href = '/10.24food/index.php/manageshop/query';
                }else if(res == 'no'){
                    alert('删除失败');
                }
            }
        })
    }
});
//监听行工具事件
table.on('tool(test)', function(obj){
    var data = obj.data;
    if(obj.event === 'del'){
        layer.confirm('真的删除行么', function(index){
            obj.del();
            layer.close(index);
            $.ajax({
                url: '/10.24food/index.php/manageshop/deletes',
                data: {id:data.id},
                dataType: 'json',
                success: function(res){
                    if(res == 'yes'){
                        layer.open({
                            type:1,
                            title: '删除成功',
                            btn: '确定',
                            time: 3000,
                        });
                        location.href = '/10.24food/index.php/manageshop/query';
                    }else if(res == 'no'){
                        layer.open({
                            type:1,
                            title: '删除失败',
                            btn: '确定',
                            time: 3000,
                        });
                    }
                }
            })
        });
    } else if(obj.event === 'edit'){
        location.href = '/10.24food/index.php/manageshop/edit?id='+data.id;
    }
});
// 搜索
$('.demoTable .layui-btn').on('click', function(){
    let id = $('#id').val();
    let shopname = $('#shopname').val();
    let title = $("#title").val();
    table.reload('testReload', {
        page: {
            curr: 1 //重新从第 1 页开始
        }
        ,where: {
            // id: id,
            // shopname: shopname,
            // cid: cid
        //    属性名和变量名相同，ES6
            id,
            shopname,
            title
        }
    });
});
//排序
table.on('sort(test)',function (obj) {
    table.reload('testReload', {
        initSort: obj //记录初始排序，如果不设的话，将无法标记表头的排序状态。
        ,where: { //请求参数（注意：这里面的参数可任意定义，并非下面固定的格式）
            field: obj.field //排序字段
            ,order: obj.type //排序方式
        },
        page: {
            curr: 1
        }
    });
})
