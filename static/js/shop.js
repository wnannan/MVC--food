$(function () {
    let con = $('.num');
    // num = con;
    let car = $('.footer .img');
    let cover = $('.cover>.info');
    let count = 0;
    let type = $('.ch li');
    let num = $('.img .count');

    let list = $('.m-r');
    let lis = null;
    let menu = $('.m-l>li');
    let menus = $('.m-l');
    let scrollR = null;
    let yigou = null;
        //AJAX
    $.ajax({
        url: '/10.24food/index.php/shop/detail',
        data: {id:location.search.split('=')[1]},
        dataType: 'json',
        success: function (res) {
            // console.log(res);
            let titles = res.map(ele=>ele.title);
            renderTitle(titles);
            // console.log(titles);
            renderList(res);
            initScroll();
        }
    })

    //选项卡
    type.each(function (index,val) {
        $(this).on('click',function () {
            $(this).addClass('type').siblings().removeClass('type');
            if(index == 2){
                $('.goodstype').hide();
                $('.store-wrapper').css('z-index','3');
            }else{
                $('.goodstype').show();
            }
        })
    })

    //购物添加内容
    let cars = {
        total: 0,
        numbers: 0,
        fee: 3,
        discount: 0,
        goods: []
    };
    list.on('click','.add',function () {
        let id = $(this).closest('div.info').attr('id');
        let data = cars.goods.filter(ele=>ele.id==id);
        let info = JSON.parse($(this).closest('div.info').attr('data'));
        if(data.length){
            numbers = ++data[0].numbers;
            $(this).prev('span.num').text(numbers);
        }else {
            info.numbers = 1;
            cars.goods.push(info);
            $(this).prevAll('.jian').addClass('hot');
            $(this).prev('span.num').text(1);
        }
        calcTotal();
        calcnum();
        saveCar();
    })
    list.on('click','.jian',function () {
        let id = $(this).closest('div.info').attr('id');
        let data = cars.goods.filter(ele=>ele.id == id);
        numbers = --data[0].numbers;
        if(numbers){
            $(this).next('span.num').text(numbers);
        }else if(numbers <= 0) {
            cars.goods = cars.goods.filter(ele=>ele.id != id);
            $(this) .removeClass('hot');

            $(this).next('span.num').text("");
        }
        calcTotal();
        calcnum();
        saveCar();
    })

    //计算总价
    function calcTotal(){
        let total = 0;
        cars.goods.forEach(ele=>{
            total += ele.discount * ele.numbers;
        });
        //保留两位小数
        cars.total = total.toFixed(2);
        cars.discount = (total * 0.9).toFixed(2);
        $('p.price').text('￥'+cars.discount);
        $('.text>del').text('￥'+cars.total);
        if(total > 20){
            $('.footer>a').text('去结算');
        }else{
            $('.footer>a').text(`还差￥${20-cars.total}起送`);
        }
    }
    //计算数量
    function calcnum(){
        let numbers = 0;
        cars.goods.forEach(ele=>{
            numbers += ele.numbers;
        })
        cars.numbers = numbers;
        $('span.count').text(cars.numbers);
        if(cars.numbers){

            $('.footer .img').addClass('hot');
            $('.footer>a').addClass('hot');
        }else{

            $('.footer .img').removeClass('hot');
            $('.footer>a').removeClass('hot');
        }
    }

    //结算
    $('.footer').on('click','a.hot',function () {
        $.ajax({
            type: 'POST',
            url: '/10.24food/index.php/shop/car',
            data: cars,
            dataType: 'json',
            success: function (res) {
                if(res.code == 0){
                    location.href = '/10.24food/index.php/shop/confirm?oid=' + res.orderid;
                }else if(res.code == 1){
                    location.href = '/10.24food/index.php/my?redirect=/shop?id=14';
                }else if(res.code ==2){
                    location.href = '/10.24food/index.php/shop?id=14';
                }
            }
        })
    })

    //点击购物车
    let flag = true;
    car.on('click',function () {
        // console.log(cars.goods[0]['title']);
        if(flag){
            renderCar(cars.goods[0]);
            $('.cover').css('display','block');
            let height = cover.outerHeight();
            cover.css('transform',`translateY(-${height}px)`);
        }else{
            $('.cover').css('display','none');
            cover.css('transform','translate3d(0,0,0)');
        }
        yigou.refresh();
        flag = !flag;
    })

    //点击购物车的加减
    $('.yigou>ul').on('click','.add',function () {
        id = $(this).closest('li.content').attr('cid');
        $('#'+id).find('.add').trigger('click');
        // $('.cou>span').text(cars.numbers);
        // $('#'+id).find('span.num').text('￥'+(cars.discount * cars.numbers).toFixed(2));
        saveCar();
    })
    $('.yigou>ul').on('click','.jian',function () {
        id = $(this).closest('li.content').attr('cid');
        $('#'+id).find('.jian').trigger('click');
        // $('.cou>span').text(cars.numbers);
        // $('#'+id).find('span.num').text('￥'+(cars.discount * cars.numbers).toFixed(2));
        saveCar();
    })

    //清空购物车
    $('.info-del>small').on('click',function () {
        flag = true;
        cover.css('transform','translate3d(0,0,0)');
        //过渡结束
        cover.on('webkitTransitionEnd',function () {
            cover.off('webkitTransitionEnd');
            clearCar();
            cancelCar();
        })
    });

    //内容清空
    function clearCar() {
        cars.goods = [];
        cars.total = 0;
        cars.discount = 0;
        cars.numbers = 0;
        car.removeClass('hot');
        $('.cover').css('display','none');
        $('.text>.price').text("");
        $('.text>del').text("");
        $('.footer>a').text("20元起送").removeClass('hot');
        $('.img .jian').removeClass('hot');
        $('span.num').text("");
    }

    //渲染购物车
    function renderCar(arr){
    //    清空内容
        $('div.yigou>ul').empty();
    //    添加内容
        let html = "";
        cars.goods.forEach(ele=>{
            html += `<li class="content" cid="${ele.id}">
							<p>${ele.title}</p>
							<span><small>￥</small>${(ele.discount * ele.numbers).toFixed(2)}</span>
							<div class="cou">
								<div class="jian"><img src="/10.24food/static/images/jian.png" alt="" /></div>
								<span class="num">${ele.numbers}</span>
								<div class="add"><img src="/10.24food/static/images/add.png" alt="" /></div>
							</div>
						</li>`;
        })
        $('div.yigou>ul').html(html);
    }

    //购物车的内容滚动
    yigou = new IScroll('.yigou',{
        probeType: 3,
        mousewheel: true,
        scrollBars: true,
        click: true,
        fadeScrollbars: true
    })

    //商家滚动
    let store = new IScroll('.store-wrapper',{
        probeType: 3,
        mousewheel: true,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    })

    //左右两侧分类和商品滚动
    function initScroll() {
        lis = $('.m-r>li');
        //每一分类的高度
        let heights = 0;
        let arr = [];
        arr.push(heights);
        for (let i=0;i<lis.length;i++){
            heights += lis[i].offsetHeight;
            arr.push(heights);
        }

        let scrollL = new IScroll('.wrapper', {
            probeType: 3,
            mousewheel: true,
            scrollbars: true,
            click: true,
            fadeScrollbars: true
        })
        scrollR = new IScroll('.wrapper-goods', {
            probeType: 3,
            mousewheel: true,
            scrollbars: true,
            click: true,
            fadeScrollbars: true
        })

        //点击左侧分类，右侧滚动到相应位置
        menus.on('click', 'li', function () {
            let index = $(this).index();
            // $('li',menus).removeClass('cake').filter(this).addClass('cake');
            $('li',menus).removeClass('cake').eq(index).addClass('cake');
            // $('li',menus).addClass('cake').siblings('li').removeClass('cake');
            scrollR.scrollTo(0, -arr[index], 500, IScroll.utils.ease.circular);
        });

        //右侧滚动，左侧相应分类添加样式
        scrollR.on('scroll', function () {
            let y = this.y | 0;
            let index = scroll(y);
            $('li',menus).removeClass('cake').eq(index).addClass('cake');
            // menu.eq(index).addClass('cake').siblings().removeClass('cake');
        });
        function scroll(y) {
            for(let i=0;i<arr.length;i++){
                let tops = arr[i];
                let bottoms = arr[i+1];
                if((!bottoms && y<0) || (-y>tops && -y<bottoms)){
                    return i;
                }
            }
            return 0;
        }
    }

    //渲染 标题
    function renderTitle(arr) {
        menus.empty();
        let html = "";
        for(let i=0;i<arr.length;i++){
            if(i==0){
                html += `<li class="cake">${arr[i]}</li>`;
            }else {
                html +=`<li>${arr[i]}</li>`;
            }
        }
        menus.html(html);
    }
    //渲染 列表
    function renderList(arr) {
        list.empty();
        let html = "";
        for(let i=0;i<arr.length;i++){
            html += `<li>
						<h4>${arr[i]['title']}</h4>
							${rendergoods(arr[i]['goods'])}
						</li>`;
        }
        list.html(html);

    }
    //每个分类下的商品
    function rendergoods(arr) {
        let html = "";

        for(let i=0;i<arr.length;i++) {
            // console.log(JSON.stringify(arr[i]));
            html += `<div class="info" id="${arr[i]['id']}" data=${JSON.stringify(arr[i])}>
										<div class="m-r-img">
											<img src="${arr[i]['thumb']}"/>
										</div>
										<div class="text">
											<h6><a href="#">${arr[i]['title']}</a></h6>
											<p>好评率90%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月销30</p>
											<span class="price">￥${arr[i]['discount']}</span>
											<div class="img">
												<div class="jian"><img src="/10.24food/static/images/jian.png" alt="" /></div>
												<span class="num"></span>
												<div class="add"><img src="/10.24food/static/images/add.png" alt="" /></div>
											</div>
										</div>
									</div>`;
        }
        return html;
    }

//    本地保存
    function saveCar() {
        localStorage.cars = JSON.stringify(cars);
    }
    function cancelCar() {
        cars = {
            total: 0,
            numbers: 0,
            fee: 3,
            discount: 0,
            goods: []
        };
        localStorage.cars = JSON.stringify(cars);
    }
})