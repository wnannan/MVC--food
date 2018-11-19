$(function () {
    //查看订单
    let str = location.search.split('?')[1].split('&');
    let money = str[0].split('=')[1];
    let oid = str[1].split('=')[1];
    $('h5>span').text(money);
    $('.footer a:last').attr('href','/10.24food/index.php/order/init?oid='+oid);
})