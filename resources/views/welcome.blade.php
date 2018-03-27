<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DDTank - Cập nhật 18.01 - Đại chiến thương cổ xuất thế</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="DDTank - Cập nhật 18.01 - Đại chiến thương cổ xuất thế"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://ddtank.garena.vn/"/>
    <meta property="og:description"
          content="DDTank - Cập nhật 18.01 - Đại chiến thương cổ xuất thế"/>
    <meta property="og:site_name" content="DDTank"/>
    <meta property="og:image" content="https://cdn.vn.garenanow.com/web/ddt/update.18.01/images/facebook-share.jpg"/>
    <link rel="shortcut icon" href="https://cdngarenanow-a.akamaihd.net/webmain/static/resource/osite/favicon.ico"/>
    <link rel="shortcut icon" href="https://cdn.vn.garenanow.com/web/ddt/wp-content/themes/ddtank/img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="keywords" content="DDTank,DDTank - Cập nhật 18.01 - Đại chiến thương cổ xuất thế">
    <meta name="description" content="DDTank - Cập nhật 18.01 - Đại chiến thương cổ xuất thế">

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('source/styles/styles.css') }}">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>
<body>
<div class="">
    <div class="container-fluid">
        <div class="nav top-nav">
            <div class="dropdown top-left-menu">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </div>
            <a href="#" class="logo">
                <span class="wrapper">
                   <img src="https://gts.garenanow.com/static/media/logo.b5ab4e3e.png" alt=""> GOP Ticket
                </span>
            </a>
            <div class="right-info float-right">
                <div class="wrapper">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}"><button type="button" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i> Home</button></a>
                        @else
                                <a href="./auth/google"><button type="button" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i> Login</button></a>
                        @endauth
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="center-main-content">
                <div class="about">Thong tin huong dan o day</div>
            </div>
        </div>

    </div>
</div>
<script src="{{ asset('source/scripts/app.js') }}"></script>
</body>

</html>
