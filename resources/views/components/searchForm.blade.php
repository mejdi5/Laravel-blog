<form method="GET" class="search-form">
      <label for="search" class="search-label">Search</label>
      <div class="searching">
        @if (request('category'))
           <input type="hidden" name="category" value="{{request('category')}}"/>
        @endif
        @if (request('author'))
           <input type="hidden" name="author" value="{{request('author')}}"/>
        @endif
        <input type="text" id="search" name="search" class="search-input" placeholder="Find post.." value="{{request('search')}}" />
        <button class="search-button">Submit</button>
      </div>
</form>