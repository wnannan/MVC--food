let {table,$,layer} = layui;
table.render({

    elem: '#table',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'gid', title: 'GID', sort: true},    //数据库表中的字段名对应要显示的表头
        {field: 'title', title: '店铺分类名称', edit:'text'},
        {field: 'shopname', title: '所属店铺'},
        {fixed: 'right', title:'操作', toolbar: '#barDemo', width:150},
    ]],    //表头，必填二维数组
    url: '/10.24food/index.php/managegtype/query1',
    page: true,  //分页，默认每页10条数据
    limit: 3,
    loading: true,
    toolbar: '#toolbarDemo',
    id: 'testReload',
    autoSort: true,
})
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
//头工具栏事件
table.on('toolbar(test)',function(obj){
    var checkStatus = table.checkStatus(obj.config.id);
    switch(obj.event){
        case 'getCheckData':
            var data = checkStatus.data;
            layer.alert(JSON.stringify(data));
            break;
        case 'getCheckLength':
            var data = checkStatus.data;
            layer.msg('选中了：'+ data.length + ' 个');
            break;
        case 'isAll':
            layer.msg(checkStatus.isAll ? '全选': '未全选');
            break;
    };
});
//监听行工具事件
table.on('tool(test)', function(obj){
    var data = obj.data;

    if(obj.event == 'del'){
        layer.confirm('真的删除行么', function(index){
            $.ajax({
                url: '/10.24food/index.php/managegtype/delete',
                data: {gid:data.gid},
                dataType: 'json',
                success: function(res){
                    obj.del();
                    layer.close(index);
                }
            })
        });
    }
});
// 搜索
$('.search').on('click', function(){
    let gid = $('#gid').val();
    let title = $('#title').val();
    let shopname = $("#shopname").val();
    table.reload('testReload', {
        // page: {
        //     curr: 1 //重新从第 1 页开始
        // },
        where: {
            gid,
            title,
            shopname
        }
    });
});
//编辑
table.on('edit(test)',function(obj){
    let index = layer.load();
    var value = obj.value,
        gid = obj.data.gid,
        field = obj.field;
    let fd = new FormData();
    fd.append('gid',gid);
    fd.append('field',field);
    fd.append('value',value);
    $.ajax({
        type: 'POST',
        url: '/10.24food/index.php/managegtype/update',
        data: fd,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(res){
            layer.close(index);
        }
    })
})