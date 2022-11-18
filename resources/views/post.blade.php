<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$post->title}}</title>
    <link rel="stylesheet" href="/post.css"/>
</head>
<body>
    <div>
       <h1>{{$post->title}}</h1>
       <span>category: <a href="/{{$post->category}}">{{$post->category}}</a></span>
       <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
       {!!$post->body!!}
    </div>
</body>
</html>