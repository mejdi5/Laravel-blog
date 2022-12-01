<x-layout>
    <h1 class="auth-title">Register</h1>
    <div class="register">
       <form action="/register" method="POST" class="registerForm">
        @csrf
        <div class="registerFormItem">
          <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="name..">
          </div>
           @error('name')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div class="registerFormItem">
          <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="username..">
          </div>
           @error('username')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div class="registerFormItem">
          <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="email..">
          </div>
           @error('email')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div  class="registerFormItem">
          <div>
            <label for="password">Password</label>
            <input type="password" id="password"  name="password" placeholder="password..">
          </div>
          @error('password')
               <small class="error">{{$message}}</small>
          @enderror
        </div> 
        <button>Submit</button>
       </form>
    </div>
</x-layout>