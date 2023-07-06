<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <x-app-layout>
    <body>
    <div class="back">
    <a href='/'>投稿一覧へ</a>
    </div>
        <h1 class="title">{{$post->title}}</h1>
        <div class='posts'>
            <div class='content'>
                <p class='body'>{{$post->body}}</p>
            </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <br>
        <a href='/posts/{{$post->id}}/edit'>編集する</a>    
        </div>
        <div class="back">
            <a href='/'>投稿一覧へ</a>
        </div>
    </body>
    </x-app-layout>
</html>
