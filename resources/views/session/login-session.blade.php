@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content  m-4">
    <section class="sign-in">
      <div class="container">
          <div class="signin-content">
              <div class="signin-image">
                  <figure><img src="https://img.freepik.com/free-vector/gradient-church-building-illustration_23-2149452604.jpg?w=740&t=st=1685174561~exp=1685175161~hmac=dc93ee8071491c49ebba437c69edd1e4109b0128a2970ea4e599c05464a34636" alt="sing up image"></figure>
              </div>

              <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Login to your account to continue<br></p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                    </div>
                  </form>
                </div>
                <!--
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <small class="text-muted">Forgot you password? Reset you password 
                    <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">here</a>
                  </small>
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="register" class="text-info text-gradient font-weight-bold">Register</a>
                  </p>
                </div>-->
              </div>
          </div>
      </div>
    </section>
  </main>

@endsection
@push('login-session')
  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>  
@endpush