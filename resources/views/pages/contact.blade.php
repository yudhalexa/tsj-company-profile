@extends('layouts.app')

@section('title', 'Contact')

@section('content')
      <main class="animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1800">
      <section class="section-contact">
        {{-- background --}}
        <div class="background-container">
          <div class="half-bg-color"></div>
          <div class="half-bg-image">
            <img src="{{ asset('/frontend/img/high-angle-desk-arrangement-with-laptop.jpg') }}"/>
          </div>
        </div>
        <div class="container-fluid position-relative">
            <div class="row contact-out">
              <div class="floating-rectangle rectangle-form">
                <div class="col-md-6 contact-form">
                  <p class="title-work" style="font-weight: bold;
                    font-size: 50px;
                    color: #4a4a4a;">Contact Us</p>
                  <form action="#" class="signin-form">
                    <div class="form-content">
                      <div class="form-group mb-3 form-input">
                        <label class="label" for="name">Name</label>
                        <input type="text" class="form-control" required />
                      </div>
                      <div class="form-group mb-3 form-input">
                        <label class="label" for="name">Email</label>
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="label" for="name">Message</label>
                      <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-content">
                    <div class="form-group form-input">
                      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Send</button>
                    </div>
                    <div class="form-group form-input back-button-form">
                      <button type="submit" class="form-control btn-primary rounded submit px-3">Back to Home</button>
                    </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-6 px-0 contact-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0585054469716!2d106.82508681537034!3d-6.256023262994385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bf1dd795d7%3A0xd181d65aad2174ea!2sGRAHA%20MAMPANG!5e0!3m2!1sen!2sid!4v1667127795250!5m2!1sen!2sid"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection