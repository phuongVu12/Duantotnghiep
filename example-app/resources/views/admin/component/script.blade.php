 <!-- Fonts and icons -->
        <script src="/backend/assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: { families: ["Public Sans:300,400,500,600,700"] },
                custom: {
                    families: [
                        "Font Awesome 5 Solid",
                        "Font Awesome 5 Regular",
                        "Font Awesome 5 Brands",
                        "simple-line-icons",
                    ],
                    urls: ["/backend/assets/css/fonts.min.css"],
                },
                active: function () {
                    sessionStorage.fonts = true;
                },
            });
        </script>


    <!-- Chart Circle -->



   <!--   Core JS Files   -->
        <script src="/backend/assets/js/core/jquery-3.7.1.min.js"></script>
        <script src="/backend/assets/js/core/popper.min.js"></script>
        <script src="/backend/assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="/backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="/backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables -->
        <script src="/backend/assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="/backend/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
        <script src="/backend/assets/js/plugin/jsvectormap/world.js"></script>

        <!-- Sweet Alert -->
        <script src="/backend/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Kaiadmin JS -->
        <script src="/backend/assets/js/kaiadmin.min.js"></script>

        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="/backend/assets/js/setting-demo.js"></script>

        @if (isset($config['js']) && is_array($config['js']))
            @foreach ($config ['js'] as $key => $val)
            {!!'<script src = "'.$val.'"></script>'!!}
            @endforeach
        @endif

        <script src="/backend/assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: { families: ["Public Sans:300,400,500,600,700"] },
                custom: {
                    families: [
                        "Font Awesome 5 Solid",
                        "Font Awesome 5 Regular",
                        "Font Awesome 5 Brands",
                        "simple-line-icons",
                    ],
                    urls: ["/backend/assets/css/fonts.min.css"],
                },
                active: function () {
                    sessionStorage.fonts = true;
                },
            });
        </script>
