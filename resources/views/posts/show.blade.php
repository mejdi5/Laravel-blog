<x-layout>
<div class="single-post">
    @auth
      @if ($post->user_id === auth()->user()->id)
      <div style="display:flex; gap:10px">
        <form action="/delete-post/{{$post->id}}" method="POST" >
          @csrf
          <button>Remove Post</button>
        </form>
        <form action="/posts/{{$post->id}}/edit">
          <button>Edit Post</button>
        </form>
      </div>
      @endif
    @endauth
    <div class="post-content">
       <h1>{{$post->title}}</h1>
       <small>Published {{$post->created_at->diffForHumans()}}</small>
       <p>written by <a href="/?author={{$post->author->username}}"> {{$post->author->name}} </a></p>
       <a href="/?category={{$post->category->slug}}">{{$post->category->name}}</a>
       <p><strong>excerpt:</strong> {{$post->excerpt}}</p>
       {!!$post->body!!}
    </div>
    @auth
        @include('components.add-comment')
        @else
        <a href="/login" class="login-link">Log In to leave a comment</a>
    @endauth
    <div  class="comments-content">

        <?php foreach($comments as $comment) :?>
            <div class="comment-content">
               <strong class="commentator-name">{{$comment->commentator ? ucwords($comment->commentator->name) : 'Blog User'}}</strong>
               <span class="comment-text">{{$comment->content}}</span>
               @auth
                 @if ($comment->user_id === auth()->user()->id)
                   <form action="/delete-comment/{{$comment->id}}" method="POST" class="delete-comment">
                      @csrf
                      <button>X</button>
                   </form>
                 @endif
               @endauth
            </div>
        <?php endforeach; ?>
    </div>
</div>
</x-layout>
