$(function () {
    let page=0, order="cid", limit=5, cid=0;
    let pages = 1;//对应的页数
    let flag = false, flag1 = true;

    let iscroll = new IScroll('.s-b',{
        probeType: 3,
        mousewheel: true,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    });
    iscroll.on('scroll',function () {
        if(this.y>60){
            $('.scorllup').css('display','block');
            flag = true;
            return;
        }
        if(this.y>=0 &&this.y<60){
            $('.scorllup').css('display','none');
            return;
        }
        // console.log(this.y,this.maxScrollY);
        //向下滑动
        /*if(this.maxScrollY - this.y >60){
            $('.scorllend').css('display','block');
            flag = true;
            return ;
        }
        if(this.maxScrollY - this.y >0 && this.maxScrollY - this.y < 60){
            $('.scorllend').css('display','none');
            return ;
        }*/
    });
    //滚动结束
    iscroll.on('scrollEnd',function () {
        if(flag && flag1){
            getData();
        }
    });
    //分类
    $('.dh>li').on('click',function(){
        cid = $(this).attr('cid');
        page = 0;
        order = "cid";
        pages = 1;
        $('.s-s').empty();
        $(this).addClass('hot').siblings('li').removeClass('hot');
        getData();
    })
    $('.dh>li').triggerHandler('click');
    //排序
    $('.s-a>li').on('click',function () {
        page = 0;
        order = $(this).attr('type');
        pages = 1;
        $('.s-s').empty();
        $(this).addClass('hot').siblings('li').removeClass('hot');
        getData();
    })
    //获取数据
    function getData(){
        page++;
        if(page > pages){
            alert('没有了~');
            return;
        }
        flag = false;
        flag1 = false;
        $('.bgimg').css('display','flex');
        $.ajax({
            url: '/10.24food/index.php/food/lists/',
            data: {
                page: page,
                order: order,
                limit: limit,
                cid: cid,
                pid: location.search.split('=')[1]
            },
            dataType: 'json',
            success: function (res) {
                //页数
                pages = res.pages;
                //请求的结果
                render(res.result);
            }
        })
    }
    function render(data){
        $('.bgimg').css('display','none');
        flag1 = true;
        let html = '';
        data.forEach(ele=>{
            html += `<li class="s-b-a">
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
							<p>${ele.stype} <span class="b">学府街505m</span></p>
							<p>满88减5；满128减10；满188减15</p>
						</div>
					</li>`;
        });
        $('.s-s').html(function (index,value) {
            return html+value;
        });
        iscroll.refresh();
    }
});
