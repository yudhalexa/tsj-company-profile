@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
     <main class="animsition mt-5">
      <section class="section-clients animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="2200" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1700">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-work my-4">
                <p>Our Clients</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-6 clients-logo">
              <img src="{{ asset('/frontend/img/ifg-life-removebg-preview.png') }}" alt="teknosolusi" class="img-fluid pb-2" />
            </div>
            <div class="col-md-2 col-6 clients-logo pt-3">
              <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" alt="teknosolusi" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection