        <div class="container top-nav">
            <a href="#" class="logo"><img src="/backend/giaodien/img/logo.png" style="width: 80px; height: 80px;" alt=""></a>
            <form action="" class="search">
                <input type="search" placeholder="Hãy tìm kiếm tại đây.....">
                <button type="submit">Tìm kiếm</button>
            </form>

            <div class="cart_header">
                <div onclick="open_cart()" class="icon_cart">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="count_item">0</span>
                </div>
                <div class="tottal_price">
                    <p>Giỏ hàng của tôi:</p>
                    <p class="price_cart_Head">0 ₫</p>
                </div>
            </div>
        </div>

        <nav>
            <div class="links container">
                <i onclick="open_menu()" class="fa-solid fa-bars btn_open_menu"></i>
                <ul id="menu">
                    <span onclick="close_menu()" class="bg-overlay"></span>
                    <i onclick="close_menu()" class="fa-regular fa-circle-xmark btn_close_menu"></i>
                    <img class="logo_menu" src="img/Logo.png" style="width: 80px; height: 80px;" alt="">

                    <li class="active"><a href="#">Trang chủ</a></li>
                        <li class="drop">
                            <a href="{{route('user.products.home')}}">Sản phẩm </a>
                            <ul class="dropdown_menu">
                                <li><a href="#">Danh muc san pham</a></li>
                                <li><a href="#">Bo suu tap</a></li>
                                <li><a href="#">San pham moi</a></li>
                            </ul>
                        </li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="post.html">Tin tức</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                </ul>

                <div class="loging_signup">
                    <a href="{{route('login')}}">Đăng nhập <i class="fa-solid fa-right-to-bracket"></i></a>
                    <a href="{{route('register')}}">Đăng ký <i class="fa-solid fa-user-plus"></i></a>
                </div>
            </div>
        </nav>
