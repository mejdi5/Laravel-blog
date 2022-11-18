<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="/posts.css"/>
    </head>
    <body>
      <div class="categories">
        <span><a href="/">All</a></span>
        <?php foreach ($categories as $category) :?>
          <span class="category"><a href="/{{$category}}">{{$category}}</a></span>
        <?php endforeach; ?>
      </div>
      <?php foreach ($posts as $post) :?>
        <article>
          <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
          <a href="/{{$post->category}}">{{$post->category}}</a>
          <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
        </article>
      <?php endforeach; ?> 
    </body>
</html>
