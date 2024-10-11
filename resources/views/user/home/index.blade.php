{{--
    <div class="cart">
        <div class="top_cart">
            <h3>Giỏ hàng của tôi <span class="count_item_cart">(0 Mặt hàng trong giỏ hàng)</span></h3>
            <span onclick="close_cart()" class="close_cart"><i class="fa-regular fa-circle-xmark"></i></span>
        </div>

        <div class="items_in_cart"></div>
        <div class="bottom_Cart">
            <div class="total">
                <p>Tổng phụ của giỏ hàng</p>
                <p class="price_cart_total">0 ₫</p>
            </div>
            <div class="button_Cart">
                <a href="checkout.html" class="btn_cart">Tiến hành thanh toán<a>
                <button class="btn_cart trans_bg">Mua sắm nhiều hơn</button>
            </div>
        </div>
    </div> --}}





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
                        @foreach ($banners as $banner)
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

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/banner1.png" alt="">

            </div>

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/banner2.png" alt="">

            </div>

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner3.png" alt="">

            </div>

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
            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner-4(1).jpg"  alt="">

            </div>

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner-5.jpg" alt="">

            </div>

        </div>
    </section>


    <section class="slide slide_product">
        <div class="container">


            <div class="top_slide">
                <h2>Giày Lining <span>sản phẩm</span></h2>
            </div>

            <div class="slide_with_img">

                <div class="categ_img">
                    <a href="#"><img src="/backend/giaodien/img/Banner/Banner6.jpg" alt=""></a>
                </div>

                <div class="product_swip mySwiper">
                    <div class="products other_product_swiper swiper-wrapper" id="other_product_swiper">

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

                    </div>

                    <div class="swiper-button-next btn-Swip"></div>
                    <div class="swiper-button-prev btn-Swip"></div>

                </div>

                <div class="categ_img">
                    <a href="#"><img src="/backend/giaodien/img/Banner/banner7.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>



    <section class="banner">
        <div class="container">

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner8.jpg" alt="">

            </div>

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner9.jpg" alt="">

            </div>

            <div class="banner_img">
                <div class="glass_hover"></div>
                <a href="#"></a>
                    <img src="/backend/giaodien/img/Banner/Banner10.jpg" alt="">

            </div>

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
