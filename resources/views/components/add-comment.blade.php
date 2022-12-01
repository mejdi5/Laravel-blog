    <form action="/post/{{$post->id}}/comment" method="POST" class="add-comment-form">
        @csrf
        @error('content')
          <small class="error" style="margin:auto" x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            {{$message}}
          </small>
        @enderror
        <div class="comment-form">
           <strong class="user-name">{{auth()->user()->name}}</strong>
           <input 
           type="text" 
           placeholder="type a comment"
           class="comment-input"
           name="content"
           required
           >
        </div>
        <button class="add-comment-button">Submit</button>
    </form>    