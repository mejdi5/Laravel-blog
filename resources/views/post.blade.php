<x-layout>
    <a href="/">Home Page</a>
    <br>
    <article>
       <h1>{{$post->title}}</h1>
       <p>written by <a href='/authors/{{$post->author->username}}'> {{$post->author->name}} </a></p>
       <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
       <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
       {!!$post->body!!}
    </article>
</x-layout>
