        <nav class="navbar">
            <div>
                <a href="/">
                    <img src="https://raw.githubusercontent.com/mejdi5/Laravel-From-Scratch-Blog-Project/b6eed7f28ff80875a5986c0532eedbc384fdf5aa/public/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>
            @guest
            <div class="auth">
               <a href="/register" class="auth-link">Register</a>
               <a href="/login" class="auth-link">Login</a>
            </div>
            @endguest
            @auth 
            <div>
              <strong style="font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white">{{strtoupper(auth()->user()->name)}}</strong>
            </div>
            <div class="auth">
              <a href="/posts/create" class="auth-link">New</a>
              <form action="/logout" method="POST">
              @csrf
                <button class="auth-link">Log Out</button>
              </form>
            </div>
            @endauth
        </nav>