<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta chratest="UTF-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>title</h1>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{$post->title}}</h2>
                    <p class='body'>{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <p>This is a sample body.</p>
    </body>
</html>

