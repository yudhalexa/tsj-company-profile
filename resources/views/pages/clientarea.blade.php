@extends('layouts.app')

@section('title')

@section('content')
    <section class="ftco-section mt-5">
      <div class="container">
        {{-- <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <a href="{{ ('/') }}"
              ><h2 class="heading-section">
                <img
                  src="{{ asset('/frontend/img/logo-header.png') }}"
                  alt="teknosolusi"
                  class="img-fluid animsition"
                  data-animsition-in-class="fade-in-down-lg"
                  data-animsition-in-duration="1800"
                  data-animsition-out-class="fade-out-down-lg"
                  data-animsition-out-duration="1000"
                  width="70%"
                /></h2
            ></a>
          </div>
        </div> --}}
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div class="img" style="background-image: url({{ url('/frontend/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg') }})"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Sign In</h3>
                  </div>
                  <div class="w-100">
                    <p class="social-media d-flex justify-content-end">
                      <a href="https://www.instagram.com" target="_blank" class="social-icon d-flex align-items-center justify-content-center"><span class="bi bi-instagram"></span></a>
                      <a href="https://goo.gl/maps/n6ZSuZqw6B4nCMiL9" target="_blank" class="social-icon d-flex align-items-center justify-content-center"><span class="bi bi-geo-alt"></span></a>
                    </p>
                  </div>
                </div>
                <form action="#" class="signin-form">
                  <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required />
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                  </div>
                </form>
                <p class="text-center"><a data-toggle="tab" href="{{ ('/') }}">Back to Home </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection