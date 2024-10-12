        <div class="container top-nav">
            <a href="{{route('user.dashboard')}}" class="logo"><img src="/backend/giaodien/img/logo.png" style="width: 80px; height: 80px;" alt=""></a>
            <form action="" class="search">
                <input type="search" placeholder="Hãy tìm kiếm tại đây.....">
                <button type="submit">Tìm kiếm</button>
            </form>

            <div class="cart_header">
                <div onclick="open_cart()" class="icon_cart">
                    <a href="{{route('user.carts.home')}}">
                        <i class="fa-solid icon-cart fa-bag-shopping"></i>
                    </a>
                    <span class="count_item">0</span>
                </div>
                {{-- <div class="tottal_price">
                    <p>Giỏ hàng của tôi:</p>
                    <p class="price_cart_Head">0 ₫</p>
                </div> --}}
                {{-- <a href="{{route('user.profile.home')}}"> --}}
                    <div class="icon_user">
                        <i class="fa-solid icon-user fa-user"></i>
                        <span>Hi,</span>
                        <span class="user_name">{{ Auth::user()->name }}</span>
                        <ul class="nav-bar">
                            <div class="user-infor">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar">
                                            <img src="https://yt3.googleusercontent.com/ijTkRv04f9tiVJL86SRL0ijYjWXD0lOxDBE0USuxqPJh0hLS3NRGWK5S8Lxhc5zX-izZ4rTtI8c=s900-c-k-c0x00ffffff-no-rj" alt="">
                                        </div>
                                        <div class="infor">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <div class="email">
                                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                            </div>
                                            <a href="{{route('user.profile.home')}}">
                                                View Profile
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-user"></div>
                                    <a class="dropdown-item" href="">Thông tin cá nhân</a>
                                    <a class="dropdown-item" href="">Liên hệ</a>
                                    <a class="dropdown-item" href="">Hỗ trợ</a>
                                    <div class="dropdown-user"></div>
                                    <a class="dropdown-item" href="">Cài đặt</a>
                                    <div class="dropdown-user"></div>
                                    <a class="dropdown-log" href="{{route('logout')}}">Đăng xuất<i class="fa-solid icon-log fa-right-to-bracket"></i></a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </a>
            </div>
        </div>

        <nav>
            <div class="links container">
                <i onclick="open_menu()" class="fa-solid fa-bars btn_open_menu"></i>
                <ul id="menu">
                    <span onclick="close_menu()" class="bg-overlay"></span>
                    <i onclick="close_menu()" class="fa-regular fa-circle-xmark btn_close_menu"></i>
                    <img class="logo_menu" src="img/Logo.png" style="width: 80px; height: 80px;" alt="">

                    <li class="active"><a href="{{route('user.dashboard')}}">Trang chủ</a></li>
                    <li class="drop">
                        <a href="{{route('user.products.home')}}">Sản phẩm </a>
                        <ul class="dropdown_menu">
                            <li class="drop_con">
                                <a href="#">Danh muc san pham</a>
                                <ul class="in_con">
                                    <li><a href="{{route('user.product.nam_product')}}">Thoi trang nam</a></li>
                                    <li><a href="#">Thoi trang nu</a></li>
                                </ul>
                            </li>
                            <li class="drop_con">
                                <a href="#">Bo suu tap</a>
                                <ul class="in_con">
                                    <li><a href="#">Thoi trang nam</a></li>
                                    <li><a href="#">Thoi trang nu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">San pham moi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('user.abouts.home')}}">Giới thiệu</a></li>
                    <li><a href="post.html">Tin tức</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                </ul>

                {{-- <div class="loging_signup">
                    <a href="{{route('logout')}}">Đăng xuất <i class="fa-solid fa-right-to-bracket"></i></a>
                </div> --}}
            </div>
        </nav>
