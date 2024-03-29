<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <x-app-layout>
    <body>
        <h1>Blog</h1>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <p class='body'>{{$post->body}}</p>
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <form action='/posts/{{$post->id}}' id="form_{{$post->id}}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{$post->id}})">削除</button>
                    </form>
                </div>
            @endforeach
            <div class='paginate'>
                {{$posts->links()}}
            </div>
            <div class="form">
            <a href='/posts/create'>投稿フォームへ</a>
            </div>
            <div class="questions">
                @foreach($questions as $question)<br>
                <a href='https://teratail.com/questions/{{$question['id']}}'>
                    {{ $question['title'] }}
                </a>
                @endforeach
            </div>
        </div>
        <p>{{ Auth::user()->name }}</p>
        <script>
            function deletePost(id)
            {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？'))   
                {
                    document.getElementById(`form_${id}`).submit();
                }
            }  
        </script>
    </body>
    </x-app-layout>
</html>

