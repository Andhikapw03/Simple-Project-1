@extends('layouts.main')

@section('konten')
<style>
section {
  margin:0;
  padding:0;
  background: url('https://e0.pxfuel.com/wallpapers/386/919/desktop-wallpaper-website-background-website-login-page-background.jpg');
  background-size: cover;
}
</style>
<main>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://img.lovepik.com/photo/45009/3136.jpg_wh860.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/login" method="post">
                  @csrf

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan Login</h5>

                  <div class="form-outline mb-4">
                    <label for="floatingInput">Email address</label>
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  </div>

                  <div class="form-outline mb-4">
                    <label for="floatingPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
@endsection