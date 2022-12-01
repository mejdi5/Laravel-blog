<!doctype html>
<html>
<link rel="stylesheet" href="/app.css"/>
<script src="//unpkg.com/alpinejs" defer></script>
<title>Laravel Blog</title>

<body>
    <x-navbar/>
    @if (session()->has('success'))
      <span class="flash-message" x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            {{session()->get('success')}}
      </span>
    @endif;
    <div class="slot">
      {{ $slot }}
    </div>
    <x-footer/>
</body>
</html>
