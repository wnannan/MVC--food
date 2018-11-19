$(function () {
    let cate  = new Swiper('.cate', {
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
        },
    });
    let banner  = new Swiper('.banner', {
        direction: 'horizontal',
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
        },
        loop: true,
    });
    let scroll = new IScroll('.s-b',{
        probeType: 3,
        mousewheel: true,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    })

    let order = null;
    let clicks = $('ul.s-a');
    clicks.on('click','li',function () {
        order = $(this).attr('name');
        $('.s-a>li').removeClass('hot').filter(this).addClass('hot');
        get();
    })

    $('ul.s-a>li:first').trigger('click');

    function get(){
        $.ajax({
            url: '/10.24food/index.php/index/shop',
            data: {
                order: order
            },
            dataType: 'json',
            success: function (res) {
                orders(res);
            }
        })
    }

    function orders(arr) {
        $('.s-s').empty();
        let html = "";
        arr.forEach(ele=>{
            html += `
            <div class="s-b-a">
					<div class="img">
						<img src="${ele.thumb}" alt="" />
					</div>
					<div class="s-text">
						<h6><a href="/10.24food/index.php/shop?id=${ele.id}">${ele.shopname}</a></h6>
						<div class="img">
							<img src="/10.24food/static/images/star1.png" alt="">
							<div class="star" style="width: calc(${ele.score}20%)">
								<img src="/10.24food/static/images/star.png" alt="">
							</div>
						</div>
						<p>28人推荐<span class="a">芭比娃娃蛋糕</span></p>
						<p>甜点饮品 <span class="b">学府街505m</span></p>
						<p>满88减5；满128减10；满188减15</p>
					</div>
				</div>
            `;
        })
        $('.s-s').html(html);
        scroll.refresh();
    }
})

