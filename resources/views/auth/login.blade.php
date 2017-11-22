@extends('back.layouts.login')

@section('content')
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>TNA - Thai Nepali Association</h1>
    </div>
    <div class="login-box">
      <form method="POST" class="login-form"  action="{{ route('login') }}">
        {{ csrf_field() }}
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="control-label">E - MAIL</label>
          <input class="form-control" type="text" name="email" placeholder="Email" autofocus>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label class="control-label {{ $errors->has('password') ? ' has-error' : '' }}">PASSWORD</label>
          <input class="form-control" type="password" name="password" placeholder="Password">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
              <label class="semibold-text">
                <input type="checkbox"><span class="label-text">Stay Signed in</span>
              </label>
            </div>
            {{-- <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p> --}}
          </div>
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
        </div>
      </form>
      {{-- <form class="forget-form" action="index.html">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
        <div class="form-group">
          <label class="control-label">EMAIL</label>
          <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
        </div>
        <div class="form-group mt-20">
          <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
        </div>
      </form> --}}
    </div>
  </section>
@endsection
