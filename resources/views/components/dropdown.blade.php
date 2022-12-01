<div x-data="{show:false}" @click.away="show = false">
        <button class="category-button" @click="show = !show">
        {{isset($currentCategory) ? "$currentCategory->name" : 'Categories'}}
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="m31.71 15.29-10-10-1.42 1.42 8.3 8.29H0v2h28.59l-8.29 8.29 1.41 1.41 10-10a1 1 0 0 0 0-1.41z" data-name="3-Arrow Right"/></svg>        
        </button>
        <div x-show="show" class="dropdown" style="display:none">
            <?php  
              $request = http_build_query(request()->except('category'));
              $link = $request ? "/?{$request}" :  "/"
            ?>
          <a href="{{$link}}" class="category-link">All</a>
          <?php foreach ($categories as $category) :?>
            <?php  
              $request = http_build_query(request()->except('category'));
              $link = $request ? "/?category={$category->slug}&{$request}" :  "/?category={$category->slug}"
            ?>
            <a 
            href="{{$link}}" 
            class="category-link 
                  <?php 
                  if(isset($currentCategory) && $currentCategory->id === $category->id) {
                    echo 'active';
                  };
                   ?>
            ">
            {{$category->name}}
          </a>
          <?php endforeach; ?>
        </div>
</div>
    <div x-data="{show:false}" @click.away="show = false">
        <button class="author-button" @click="show = !show">
        {{isset($currentAuthor) ? ucwords($currentAuthor->name) : 'Authors'}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="m31.71 15.29-10-10-1.42 1.42 8.3 8.29H0v2h28.59l-8.29 8.29 1.41 1.41 10-10a1 1 0 0 0 0-1.41z" data-name="3-Arrow Right"/></svg>
        </button>
        <div x-show="show" class="dropdown" style="display:none">
        <?php  
              $request = http_build_query(request()->except('author'));
              $link = $request ? "/?{$request}" :  "/"
            ?>
          <a href="{{$link}}" class="category-link">All</a>
          <?php foreach ( $authors as $author) :?>
            <?php  
              $request = http_build_query(request()->except('author'));
              $link = $request ? "/?author={$author->username}&{$request}" :  "/?author={$author->username}"
            ?>
            <a 
            href={{$link}}
            class="author-link
            <?php 
                  if(isset($currentAuthor) && $currentAuthor->id === $author->id) {
                    echo 'active';
                  };
                   ?>
            "
            >{{$author->name}}</a>
          <?php endforeach; ?>
        </div> 
    </div>
  </div>

