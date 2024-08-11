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
    <form action="/admin/add/article" method="POST" class="admin_add__article" enctype="multipart/form-data" name="article_form">
        @csrf
        <h1 class="main_article_addcomment_title">Добавление записи</h1>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Заглавие</label>
            <input type="text" name="title" class="main_article_group_input">
        </div>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Короткое описание</label>
            <textarea type="text" name="short_desc" class="main_article_group_input" style="min-height: 170px"></textarea>
        </div>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Описание</label>
            <textarea type="text" name="description" class="main_article_group_input" style="min-height: 200px"></textarea>
        </div>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Фотография</label>
            <input type="file" name="image">
        </div>
        <div class="main_article_group_btn">
            <button class="addcomment_btn" type="submit">Добавить</button>
        </div>
    </form>
</main>
</body>
</html>
