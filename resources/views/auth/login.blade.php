<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
  <div class="loginBox">
    <a href="{{route('welcome')}}"><img class="user" src="https://i.pinimg.com/originals/c0/fb/ed/c0fbedf13d4d6f0540c4b3f0ecbb4e37.png"></a>
    <h2>Log In Here</h2>
    <form  method="POST" action="{{ route('login') }}">
     @csrf
      <p>Email</p>
      <input id="email" type="email" placeholder="Enter Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong></span>
    @enderror
      <p>Password</p>
      <input id="password" type="password" placeholder="Enter Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong></span>
        @enderror
        {{-- <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label  for="remember">{{ __('Remember Me') }}</label> --}}
        <a href="#">Forget Password</a>
        <input type="submit" name="sign-in" value="Sign In">
    </form>





  </div>
  
</body>
</html>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

