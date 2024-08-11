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
    <div class="main_article">
        <div class="main_article_header">
            <span>{{$article->title}}</span>
        </div>
        <div class="main_article_img">
            <img src="{{$article->img}}" alt="">
        </div>
        <div class="main_article__description">
            {{$article->description}}
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
            <textarea type="text" id="comment" class="main_article_group_input" style="min-height: 170px"></textarea>
        </div>
        <div class="main_article_group_btn">
            <button class="addcomment_btn" data-article="{{$article->id}}">Добавить</button>
        </div>
    </div>
    <div class="main_article_comments">
        @foreach($comments as $comment)
            <div class="main_article_comment">
                <div class="main_article_comment_name">{{$comment->name}}</div>
                <div class="main_article_comment_text">{{$comment->text}}</div>
            </div>
        @endforeach
    </div>
</main>
</body>
</html>
