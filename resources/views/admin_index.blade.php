@include('inc.messages')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="/css/main_style.css">
    <link href="/css/admin_style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/alertify.css">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <div class="container-fluid">
        <div class="col-md-4 logo_title"><a href="{{route('index')}}">UNINFO.KZ</a></div>
        <div class="col-md-4 text-center page_title d-none d-lg-block">Добро пожаловать, {{\Illuminate\Support\Facades\Auth::user()->firstname}} {{\Illuminate\Support\Facades\Auth::user()->lastname}}</div>
        <div class="col-md-4 profile_title text-right d-none d-lg-block"><a href="{{route('index')}}">Вернуться в личный кабинет</a></div>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('admin')}}">Основные</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_universities')}}">Университеты</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_add_university')}}">Добавить университет</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_type')}}">Типы ВУЗов</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_add_type')}}">Добавить тип</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_categories')}}">Категории</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_add_category')}}">Добавить категорию</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_qualification')}}">Квалификации</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_add_qualification')}}">Добавить квалификацию</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_specialty')}}">Специальности</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin_add_specialty')}}">Добавить специальность</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Посмотреть документы</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
    @include('inc.messages')

</div>
<footer class="app-footer">
    <div>
        <a href="https://coreui.io">IITU</a>
        <span>&copy; 2019 Uninfo Team.</span>
    </div>
</footer>
</body>
</html>
