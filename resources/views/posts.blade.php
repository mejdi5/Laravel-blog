<x-layout>
  <?php if($_SERVER['REQUEST_URI'] !== '/') : ?>
    <a href="/">Home Page</a>
  <?php endif; ?>
  <?php foreach ($posts as $post) :?>
    <article>
      <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
      <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
      <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
    </article>
  <?php endforeach; ?> 
</x-layout>
