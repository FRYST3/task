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
        <div class="main_arcticles">
            <div class="article_card">
                <div class="article_card__img">
                    <img src="/assets/images/articles.webp" alt="">
                </div>
                <h1 class="article_card__title">Blog test article</h1>
                <div class="article_card_description">
                    Blog test article Blog test article Blog test article Blog test article Blog test article Blog test article Blog test article Blog test article Blog test article Blog test article
                </div>
                <a href="#" class="article_card__btn">Читать</a>
            </div>
        </div>
        <div class="load_more">Показать ещё</div>
    </main>
</body>
</html>
