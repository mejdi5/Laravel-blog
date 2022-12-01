<x-layout>
    <h1 class="auth-title">Login</h1>
    <div class="login">
        @error('error')
               <span class="login-fail">{{$message}}</span>
        @enderror
       <form action="/login" method="POST" class="loginForm">
        @csrf
        <div class="loginFormItem">
          <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="email..">
          </div>
        </div>
        <div  class="loginFormItem">
          <div>
            <label for="password">Password</label>
            <input type="password" id="password"  name="password" placeholder="password..">
          </div>
        </div> 
        <button>Submit</button>
       </form>
    </div>
</x-layout>