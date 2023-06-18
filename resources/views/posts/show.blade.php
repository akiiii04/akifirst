<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <body>
    <div class="back">
    <a href='/'>投稿一覧へ</a>
    </div>
        <h1 class="title">{{$post->title}}</h1>
        <div class='posts'>
            <div class='content'>
                <p class='body'>{{$post->body}}</p>
            </div>
        </div>
        <div class="back">
            <a href='/'>投稿一覧へ</a>
        </div>
    </body>
</html>
