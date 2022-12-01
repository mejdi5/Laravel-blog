<x-layout>
    <h1 class="newPost-header">New Post</h1>
    <div class="newPost">
       <form action="/posts/create" method="POST" class="newPost-form">
        @csrf
        <div class="newPost-formItem">
          <div>
            <label for="title">Title</label>
            <input type="title" id="title" name="title" value="{{old('title')}}" placeholder="title..">
          </div>
          @error('title')
               <span class="newPost-error">{{$message}}</span>
          @enderror
        </div>
        <div class="newPost-formItem">
          <div>
            <label for="excerpt">Excerpt</label>
            <input type="excerpt" id="excerpt" name="excerpt" value="{{old('excerpt')}}" placeholder="excerpt..">
          </div>
          @error('excerpt')
               <span class="newPost-error">{{$message}}</span>
          @enderror
        </div>
        <div  class="newPost-formItem">
          <div>
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="body.." value="{{old('body')}}"></textarea>
          </div>
          @error('body')
               <span class="newPost-error">{{$message}}</span>
          @enderror
        </div> 
        <div  class="newPost-formItem">
          <div>
            <label for="category">Category</label>
            <select name="category" id="category">
            @foreach ($categories as $category)
               <option value="{{$category->id}}">
                {{ucwords($category->name)}}
              </option>
            @endforeach
            </select>
          </div>
          @error('category')
               <span class="newPost-error">{{$message}}</span>
          @enderror
        </div> 
        <button>Submit</button>
       </form>
    </div>
</x-layout>