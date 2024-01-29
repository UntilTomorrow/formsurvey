<!DOCTYPE html>
<html>
  <head>
  @include('includes.header')
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="assets/source/img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          Login Admin Panel
        </h4>
        <form method="post" action="{{ url('/login') }}">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" placeholder="Enter your username" type="text" value="{{ old('username') }}" name="username" id="username">
        <div class="pre-icon os-icon os-icon-user-male-circle"></div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" placeholder="Enter your password" type="password" name="password" id="password">
        <div class="pre-icon os-icon os-icon-fingerprint"></div>
    </div>
    <div class="buttons-w">
        <button class="btn btn-primary">Login</button>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> <!-- Penambahan atribut name="remember" di atas -->
                Remember Me
            </label>
        </div>
    </div>
</form>

      </div>
    </div>
  </body>
</html>
