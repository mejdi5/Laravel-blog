<x-layout>
    <a href="/">Home Page</a>
    <br>
    <?php foreach ($posts as $post) :?>
      <article>
          <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
          <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
          <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
          <p>{{$post->body}}</p>  
      </article>
    <?php endforeach; ?> 
</x-layout>