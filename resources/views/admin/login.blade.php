<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/assets/css/style.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/css/notifyme.css">

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/notifyme.min.js"></script>
    <script src="/assets/js/admin.js"></script>

    <title>BLOGNAME | FRYST</title>
</head>
<body>
<header class="header__container">
    <a href="/" class="header_item">BLOGNAME</a>
    <div class="header_nav">
        <a href="/" class="header_nav__item">Главная</a>
        <a href="/admin" class="header_nav__item">Администрирование</a>
    </div>
</header>
<main class="main__container">
    <form action="/admin/login" method="POST" class="admin_auth">
        @csrf
        <h1 class="admin_auth__title">Авторизация</h1>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Логин</label>
            <input type="text" id="username" name="username" class="main_article_group_input">
        </div>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Пароль</label>
            <input type="password" id="password" name="password" class="main_article_group_input">
        </div>
        <div class="main_article_group_btn" style="justify-content: center;">
            <button class="auth__btn">Авторизоваться</button>
        </div>
    </form>
</main>
</body>
</html>
