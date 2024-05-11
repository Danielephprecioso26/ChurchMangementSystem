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
                  <h3 class="font-weight-bolder text-info text-gradient">Create an account</h3>
                  <p class="mb-0">Fill out the form to create your account<br></p>
                </div>
                <div class="card-body">
                  <form role="form text-left" method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Name" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}">
                      @error('name')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation" id="password_confirmation" aria-label="Password" aria-describedby="password-addon">
                      @error('password_confirmation')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Register</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="login" class="text-info text-gradient font-weight-bold">Login</a></p>
                  </div>
              </div>
          </div>
      </div>
    </section>
  </main>
@endsection

