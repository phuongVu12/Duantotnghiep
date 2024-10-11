
    <section class="slider">
        <div class="container">
            <div class="side_bar">
                <h2><i class="fa-solid fa-bars"></i>Mua sắm theo danh mục </h2>
                <a href="#">Tất cả sản phẩm</a>
                <a href="#">Sản phẩm bán chạy</a>
                <a href="#">Sản phẩm mới</a>
                <a href="#">Top 10 sản phẩm yêu thích</a>
                <a href="#">Giày Lining</a>
                <a href="#">Giày Yonex</a>
                <a href="#">Giày Victor</a>
                <a href="#">Giày Adidas</a>
                <a href="#">Giày Nike</a>
            </div>

            <div class="slide-swp mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($banners_slider as $banner)
                        <div class="swiper-slide">
                            <a href="{{ $banner->link }}">
                                <img src="{{ asset('backend/giaodien/img/' . $banner->image) }}" alt="{{ $banner->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>



        </div>
    </section>



    <section class="features">
        <div class="container">
            <div class="feature_item">
                <img src="/backend/giaodien/img/Features/features1.png" alt="">
                <div class="text">
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Miễn phí vận chuyển đối với tất cả sản phẩm</p>
                </div>
            </div>

            <div class="feature_item">
                <img src="/backend/giaodien/img/Features/features2.png" alt="">
                <div class="text">
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Miễn phí vận chuyển đối với tất cả sản phẩm</p>
                </div>
            </div>

            <div class="feature_item">
                <img src="/backend/giaodien/img/Features/features3.png" alt="">
                <div class="text">
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Miễn phí vận chuyển đối với tất cả sản phẩm</p>
                </div>
            </div>

            <div class="feature_item">
                <img src="/backend/giaodien/img/Features/features4.png" alt="">
                <div class="text">
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Miễn phí vận chuyển đối với tất cả sản phẩm</p>
                </div>
            </div>

            <div class="feature_item">
                <img src="/backend/giaodien/img/Features/features5.png" alt="">
                <div class="text">
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Miễn phí vận chuyển đối với tất cả sản phẩm</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="banner">
        <div class="container">
            @foreach ($banners_small as $banner)
                <div class="banner_img">
                    <a href="{{ $banner->link }}">
                        <img src="{{ asset('backend/giaodien/img/' . $banner->image) }}" alt="{{ $banner->title }}">
                    </a>
                </div>
            @endforeach
        </div>
</section>




    <section class="slide slide_sale">
        <div class="container">

            <div class="sale_sec mySwiper">

                <div class="top_slide">
                    <h2>Đang giảm giá <span>sản phẩm</span></h2>
                </div>

                <div id="swiper_items_sale" class="products swiper-wrapper">



                </div>


                <div class="swiper-button-next btn-Swip"></div>
                <div class="swiper-button-prev btn-Swip"></div>

            </div>
        </div>
    </section>




    <section class="banner banner_big">
    <div class="container">
        @foreach ($banners_large as $banner)
            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="{{ $banner->link }}">
                    <img src="{{ asset('backend/giaodien/img/' . $banner->image) }}" alt="{{ $banner->title }}">
                </a>
            </div>
        @endforeach
    </div>
</section>


<section class="slide slide_product">
    <div class="container">
        <div class="top_slide">
            <h2>Giày Lining <span>sản phẩm</span></h2>
        </div>
        <div class="slide_with_img">
            <div class="categ_img">
                @if ($banners_dm1->isNotEmpty())
                    <a href="{{ $banners_position_4->first()->link }}">
                        <img src="{{ asset('backend/giaodien/img/' . $banners_position_4->first()->image) }}" alt="{{ $banners_position_4->first()->title }}">
                    </a>
                @endif
            </div>
            <div class="product_swip mySwiper">
                <div class="products other_product_swiper swiper-wrapper" id="other_product_swiper">
                    <!-- Nội dung sản phẩm -->
                </div>
                <div class="swiper-button-next btn-Swip"></div>
                <div class="swiper-button-prev btn-Swip"></div>
            </div>
        </div>
    </div>
</section>




<section class="slide slide_product">
    <div class="container">
        <div class="top_slide">
            <h2>Giày Yonex<span> Sản phẩm</span></h2>
        </div>
        <div class="slide_with_img">
            <div class="product_swip mySwiper">
                <div class="products other_product_swiper swiper-wrapper" id="other_product_swiper2">
                    <!-- Nội dung sản phẩm -->
                </div>
                <div class="swiper-button-next btn-Swip"></div>
                <div class="swiper-button-prev btn-Swip"></div>
            </div>
            <div class="categ_img">
                @if ($banners_dm2->isNotEmpty())
                    <a href="{{ $banners_position_5->first()->link }}">
                        <img src="{{ asset('backend/giaodien/img/' . $banners_position_5->first()->image) }}" alt="{{ $banners_position_5->first()->title }}">
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>




<section class="banner">
    <div class="container">
        @foreach ($banners_bottom as $banner)
            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="{{ $banner->link }}">
                    <img src="{{ asset('backend/giaodien/img/' . $banner->image) }}" alt="{{ $banner->title }}">
                </a>
            </div>
        @endforeach
    </div>
</section>





    <div class="newsletter">
        <div class="container">
            <div class="text">
                <img src="/backend/giaodien/img/icon_email.png" alt="">
                <div class="content">
                    <h4>Đăng ký để nhận được tin tức</h4>
                    <p>Nhận thông tin cập nhật qua email về cửa hàng sản phẩm mới nhất của chúng tôi...và nhận được</p>
                    <h6>Phiếu giảm giá -30% cho lần đầu mua hàng</h6>
                </div>
            </div>

            <form action="" class="newsletter_form">
                <input type="email" placeholder="Nhấn vào email của bạn ở đây...">
                <button type="submit">Đăng ký</button>
            </form>
        </div>
    </div>




    <div class="back_to_top">
        <p>Trở về lại trang đầu</p>
    </div>
