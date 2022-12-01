<x-layout>
  <div class="post-list">
  <div class="search-forms">
    <x-searchForm/>
    <x-dropdown :categories="$categories" :authors="$authors" :currentCategory="$currentCategory" :currentAuthor="$currentAuthor"/>
    <div class="posts-header">
        @if (isset($currentAuthor))
        <h1 style="color:white">Author: {{$currentAuthor->name}}</h1>
        @endif
        @if (isset($currentCategory))
        <h1 style="color:white">Category: {{$currentCategory->name}}</h1>
        @endif
    </div>
    @if ($posts->count())
    <?php foreach ($posts as $post) :?>
      <x-post-card :post="$post" />
    <?php endforeach; ?>
    @else 
    <div class="no-posts">There is no posts at this moment</div>
    @endif
  </div>
</x-layout>
