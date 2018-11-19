$(function () {
    let oid = location.search.split('=')[1];
    let iscroll = null;

    iscroll = new IScroll('.scroll',{
        probeType: 3,
        mousewheel: true,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    })

    $.ajax({
        type: 'POST',
        url: '/10.24food/index.php/order/order',
        data: {oid},
        dataType: 'json',
        success: function (res) {
            order(res);
        }
    })
    function order(arr) {
        $('ul.order').empty();
        let html = "";
        arr.forEach(ele=>{
            html += `
            <li class="s-b-a oid">
				<div class="img">
					<img src="${ele.thumb}" alt="" />
				</div>
				<div class="s-text">
					<h6><a href="http://localhost/10.24food/index.php/shop">${ele.sname}</a></h6>
					<span>订单已送达</span>
					<p>￥ ${ele.discount}</p>
					<div class="a">
						<a href="/10.24food/index.php">再来一单</a>
						<a href="#">评价晒图</a>
					</div>
				</div>
			</li>
        `;
        })
        $('ul.order').html(html);
        iscroll.refresh();
    }
})