@extends('layouts.app')

@section('title', 'Our Demo')

@section('content')
    <main class="mt-5">
      <!-- start of section-demo -->
      <section class="section-demo py-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
              <div class="title-work my-4">
                <p>Main Demo</p>
                <small>Program aplikasi manajemen anggota merupakan software database berbasis web client server yang dapat diimplementasikan dalam sebuah jaringan komputer client server. </small>
                <div class="button-demo">
                  <a href="#" class="btn btn-do mt-4"
                    >Preview Main Demo<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M19.5 21H4.5C4.10236 20.9994 3.72117 20.8412 3.44 20.56C3.15882 20.2788 3.0006 19.8976 3 19.5V4.5C3.0006 4.10236 3.15882 3.72117 3.44 3.44C3.72117 3.15882 4.10236 3.0006 4.5 3H12V4.5H4.5V19.5H19.5V12H21V19.5C20.9994 19.8976 20.8412 20.2788 20.56 20.56C20.2788 20.8412 19.8976 20.9994 19.5 21Z"
                        fill="white"
                      />
                      <path d="M15 1.5V3H19.9395L13.5 9.4395L14.5605 10.5L21 4.0605V9H22.5V1.5H15Z" fill="white" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="{{ asset('/frontend/img/demo1.png') }}" alt="teknosolusi" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <!-- end of section-demo -->
    </main>
@endsection