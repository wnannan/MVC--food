let {table,$,layer} = layui;
table.render({
    elem: '#table',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'id', title: 'ID', width: 50, sort: true},    //数据库表中的字段名对应要显示的表头
        {field: 'title', title: '食品名称', width: 86},
        {field: 'thumb', title: '缩略图', width: 130, templet:`<div><img src="{{d.thumb}}" alt=""></div>`},
        {field: 'des', title: '食品描述', width: 130},
        {field: 'discount', title: '折扣价', width: 90, sort: true},
        {field: 'price', title: '现价', width: 80, sort: true},
        {field: 'count', title: '销量'},
        {field: 'cname', title: '所属分类', width: 100, sort: true},
        {field: 'shopname', title: '所属店铺', width: 150},
        {fixed: 'right', title:'操作', width: 120, toolbar: '#barDemo'},
    ]],    //表头，必填二维数组
    url: '/10.24food/index.php/managegoods/query',
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
            url: '/10.24food/index.php/managegoods/del',
            data: {id:arr.join()},
            success: function (res) {
                if(res == 'yes'){
                    alert('删除成功');
                    location.href = '/10.24food/index.php/managegoods/query1';
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
    console.log(data);
    if(obj.event === 'del'){
        layer.confirm('真的删除行么', function(index){
            obj.del();
            layer.close(index);
            $.ajax({
                url: '/10.24food/index.php/managegoods/deletes',
                data: {id:data.id},
                dataType: 'json',
                success: function(res){
                    alert(1);
                    if(res == 'yes'){
                        alert();
                        layer.open({
                            type:1,
                            title: '删除成功',
                            btn: '确定',
                            time: 3000,
                        });
                        location.href = '/10.24food/index.php/managegoods/query1';
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
        location.href = '/10.24food/index.php/managegoods/edit?id='+data.id+'&sid='+data.sid;
    }
});
// 搜索
$('.demoTable .layui-btn').on('click', function(){
    let id = $('#id').val();
    let cname = $('#cname').val();
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
            cname,
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
});

