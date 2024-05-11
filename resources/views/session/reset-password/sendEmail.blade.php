@extends('layouts.user_type.guest')

@section('content')

<main class="main-content  m-4">
    <section class="sign-in">
      <div class="container">
          <div class="signin-content">
              <div class="signin-image">
                  <figure><img src="https://img.freepik.com/free-vector/agenda-background-design_1268-606.jpg?w=740&t=st=1684653248~exp=1684653848~hmac=c2c8b90b5460dac147ccad1c1b31fe0c8bad47433bebf6b43cfb75ffd5ff4906" alt="sing up image"></figure>
              </div>

              <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Forgot Password?</h3>
                  <p class="mb-0">Enter email to reset password.<br></p>
                </div>
                <div class="card-body">
                    <form action="/forgot-password" method="POST" role="form text-left">
                        @csrf
                        <div>
                            <div class="">
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Recover your password</button>
                        </div>
                    </form>
                </div>
              </div>
          </div>
      </div>
    </section>
  </main>

@endsection