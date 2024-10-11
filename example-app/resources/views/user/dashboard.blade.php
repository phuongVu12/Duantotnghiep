<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang web ban hang</title>
    {{-- <link rel="stylesheet" href="/backend/giaodien/css/dashboard.css">
    <!--Link Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Link Icon-->
    <script src="https://kit.fontawesome.com/5e908a7547.js" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="/backend/giaodien/css/dashboard.css">
     <!-- Link Style CSS -->
    <link rel="stylesheet" href="/backend/giaodien/css/style.css">

    <!-- Link Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">




    <!-- Link slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <header>
        <div class="header">
            @include('user.component.head_user');
        </div>
    </header>

    <article>
       @include($template)
    </article>

    <footer>
        @include('user.component.footer_user')
    </footer>
        @include('user.component.script_user')
</body>
</html>
