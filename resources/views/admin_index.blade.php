<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UNINFO | Основные</title>
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="css/main_style.css">
    <link href="css/admin_style.css" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <div class="container-fluid">
        <div class="col-md-4 logo_title">UNINFO.KZ</div>
        <div class="col-md-4 text-center page_title d-none d-lg-block">Admin Dashboard</div>
        <div class="col-md-4 profile_title text-right d-none d-lg-block">Yertai Kassymbayev | <a href="{{route('index')}}">Вернуться в личный кабинет</a></div>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Основные</a></li>
                <li class="nav-item"><a class="nav-link" href="university.html">Университеты</a></li>
                <li class="nav-item"><a class="nav-link" href="category.html">Категории</a></li>
                <li class="nav-item"><a class="nav-link" href="qualification.html">Квалификации</a></li>
                <li class="nav-item"><a class="nav-link" href="specialty.html">Специальности</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Добавить университет</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Добавить специальность</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Посмотреть документы</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')

</div>
<footer class="app-footer">
    <div>
        <a href="https://coreui.io">IITU</a>
        <span>&copy; 2019 Uninfo Team.</span>
    </div>
</footer>
</body>
</html>
