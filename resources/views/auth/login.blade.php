@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:80px; margin-bottom:80px;">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card" style="margin-bottom:30px;">
    <div class="card-header" style="background-color:#dbcc8f; color:#fff;">{{ __('Login') }}</div>
     <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
      @csrf
       <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
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
         <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
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
           {{ __('Lembrar-me') }}
           </label>
          </div>
        </div>
       </div>
       <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
         <button type="submit" class="btn btn-primary" style="width:200px; height:40px; font-size:14px; border-radius:4px;">
          {{ __('Entrar') }}
         </button>
         @if (Route::has('password.request'))
         <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Esqueceu seu password?') }}
         </a>
         @endif
        </div>
       </div>
       <!-- <a href="{{ url('/auth/facebook') }}" <i class="fa fa-facebook"></i> Facebook</a>
       <a href="{{ url('/auth/github') }}" <i></i> Github</a> -->
      </form>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
