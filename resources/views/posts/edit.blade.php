<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <x-app-layout>
    <body>

        <h1 class="webtitle">ブログ投稿フォーム</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
        <div class='posts'>
            <h2 class='title'>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{$post->title}}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            <h2 class='body'>本文</h2>
                <textarea name="post[body]" >{{$post->body}}</textarea>
                 <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="保存"/>
        </form>
        
        <div class="back">
            <a href='/'>投稿一覧へ</a>
        </div>
    </body>
    </x-app-layout>
</html>
