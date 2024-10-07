<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang web ban hang</title>
    <link rel="stylesheet" href="/backend/giaodien/css/dashboard.css">
     <!-- Link Style CSS -->
    <link rel="stylesheet" href="/backend/giaodien/css/style.css">

    <!-- Link Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">




    <!-- Link slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>


    <header id="header" class="scroll">
        @include('user_log.component.head_log')
    </header>

    <article>
       @include($template)
    </article>

    <footer>
        @include('user_log.component.footer_log')
    </footer>


        @include('user_log.component.script_log')

</body>
</html>

