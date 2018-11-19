$(function () {
    let oid = location.search.split('=')[1];
    let total = '';
    $.ajax({
        url: '/10.24food/index.php/shop/orderdetail',
        type: 'POST',
        data: {oid},
        dataType: 'json',
        success: function (res) {
            discount = res.order.discount;
            shopname(res.shopname);
            goods(res.goods);
            order(res.order.discount,res.order.fee,res.order.numbers,res.order.total);
        }
    });
    //点击支付成功
    $('.footer>a').on('click',function () {
        location.href = `/10.24food/index.php/shop/paysuccess?money=${discount}&oid=${oid}`;
    })

    function shopname(arr) {
        $('p.title').text(arr);
    }
    function goods(arr) {
        $('.goods').empty();
        let html = "";
        arr.forEach(ele=>{
            html += `
                    <li>
                        <div class="zuozuo">
                            <img src="${ele.thumb}"/>
                        </div>
                        <div class="youyou">
                            <p class="title">${ele.title}</p>
                            <p class="discount">¥ ${ele.discount}</p>
                            <p class="numbers">x ${ele.numbers}</p>
                        </div>
                    </li>
                   `;
        })
        $('.goods').html(html);
    }
    function order(discount,fee,numbers,total) {
        $('.text>del').text(total);
        $('.img .count').text(numbers);
        $('.text>.price').text(discount);
        $('.fee>span').text(fee);
    }
})