<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/assets/css/style.css?v={{time()}}">

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/main.js"></script>

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
    <div class="main_article">
        <div class="main_article_header">
            <span>BLOG NAME</span>
        </div>
        <div class="main_article_img">
            <img src="/assets/images/articles.webp" alt="">
        </div>
        <div class="main_article__description">
            BLOG NAMEBLOG NAMEBLOG NAMEBLOG NAMEBLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME BLOG NAME
        </div>
    </div>
    <div class="main_article_addcomment">
        <h1 class="main_article_addcomment_title">Добавить комментарий</h1>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Имя</label>
            <input type="text" id="username" class="main_article_group_input" style="max-width: 300px">
        </div>
        <div class="main_article_group">
            <label for="username" class="main_article_group_label">Текст</label>
            <textarea type="text" id="username" class="main_article_group_input" style="min-height: 170px"></textarea>
        </div>
        <div class="main_article_group_btn">
            <button class="addcomment_btn">Добавить</button>
        </div>
    </div>
    <div class="main_article_comments">
        <div class="main_article_comment">
            <div class="main_article_comment_name">FRYST</div>
            <div class="main_article_comment_text">GKDK GSKSK SGK SGKGOSDG LSDGO GSDLGSDK SDGOSDGLSD OSDKG LSDOG</div>
        </div>
    </div>
</main>
</body>
</html>
