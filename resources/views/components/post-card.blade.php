@props(['post'])
 <div class="post-card">
        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="post-img"/>
        <div class="post-info">
            <h1>
                <a href="/post/{{$post->id}}">{{ $post->title}}</a>
            </h1>
            <small>
                Published <time>{{$post->created_at->diffForHumans()}}</time>
            </small>
            <div class="post-excerpt">
            {{$post->excerpt}}
            </div>
        </div>
</div>