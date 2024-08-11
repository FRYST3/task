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
    <div class="main_arcticles">
        @foreach($articles as $article)
            <div class="article_card">
                <div class="article_card__img">
                    <img src="{{$article->img}}" alt="">
                </div>
                <h1 class="article_card__title">{{$article->title}}</h1>
                <div class="article_card_description">
                    {{$article->shot_desc}}
                </div>
                <a href="/admin/edit/article/{{$article->id}}" class="article_card__btn">Редактировать</a>
                <a href="/admin/delete/article/{{$article->id}}" class="article_card__btn">Удалить</a>
            </div>
        @endforeach
    </div>
</main>
</body>
</html>
