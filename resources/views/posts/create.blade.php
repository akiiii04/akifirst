<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <body>

        <h1 class="webtitle">ブログ投稿フォーム</h1>
        <form action="/posts" method="POST">
            @csrf

        <div class='posts'>
            <h2 class='title'>タイトル</h2>
                <input type="text" name="post[title]" >
            <h2 class='body'>本文</h2>
                <textarea name="post[body]" ></textarea>
        </div>
        <input type="submit" value="保存"/>

        
        <div class="back">
            <a href='/'>投稿一覧へ</a>
        </div>
    </body>
</html>
