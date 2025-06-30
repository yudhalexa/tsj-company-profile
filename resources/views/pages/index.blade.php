@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    <section class="section-banner transition-fade mt-4" id="swup">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12 px-0 position-relative">
              <img src="{{ asset('/frontend/img/brainstorming-and-collaborating-in-a-coworking-space-e1615889907740.jpg') }}" 
              class="photo-resize"
              alt="business-offering"
              />
              <div class="position-absolute w-100 h-100"
              style="background-color: rgba(255, 255, 255, 0.5); 
              top: 0; 
              left: 0;"></div>
                <div class="position-absolute landing-page-text">
                   <div class="title-work" data-animsition-in-class="fade-in-left-lg" data-animsition-in-duration="1400" data-animsition-out-class="fade-out-left-lg" data-animsition-out-duration="1200"
                   style="line-height: 1.5;">
                    <p>IT and Digital<br />Solutions</p>
                    <div class="tagline">
                      <small>Memberikan implementasi berkualitas dan<br/>servis yang terbaik dengan memberikan<br/>solusi yang efektif.</small>
                    </div>
                    <a href="#" class="btn btn-do mt-md-4 mt-2">Learn more</a>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </section>

     <main>
      <!-- start of section-work -->
      <section class="section-work animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="1400" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1200">
        <div class="container">
          <div>
            <div class="col-md-12 px-2">
              <div class="title-work my-4">
                {{-- <p>What We Do</p> --}}
              </div>
            </div>
          </div>
        <div class="carousel-container center-div">
          <div id="vmvCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <a class="carousel-control-prev floating-rectangle" href="#vmvCarousel" role="button" data-bs-slide="prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                  </svg>
              </a>
              <div class="carousel-content-wrapper center-div">
                <div class="carousel-inner center-div">
                    <div class="carousel-item active">
                        <div class="floating-rectangle carousel-card">
                            <div class="vmv-text">
                                <p>Our Vision</p>
                                <small>Menjadi perusahaan jasa IT dan Digital solusi yang terpercaya, kreatif dan inovatif.</small>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="floating-rectangle carousel-card">
                            <div class="vmv-text">
                                <p>Our Mission</p>
                                <small>Membangun infrastruktur teknologi dan maintain operasional environment, cost, kualitas pekerjaan, dan servis yang efektif.</small>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="floating-rectangle carousel-card">
                            <div class="vmv-text">
                                <p>Our Values</p>
                                <small>Teamwork – Integrity – Creative – Quality – Best Services – Trust – Relationship</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators-wrapper">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#vmvCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#vmvCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#vmvCarousel" data-bs-slide-to="2"></li>
                    </ol>
                </div>
                <a class="carousel-control-next floating-rectangle" href="#vmvCarousel" role="button" data-bs-slide="next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
              </a>
          </div>
      </div>      
      </section>
      
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- end of section-work -->

      <!-- start of section offering -->
      <section class="section-offering animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="1800" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1400">
        <div class="position-relative">
          {{-- foto background --}}
          <img src="{{ asset('frontend/img/offering-img.jpg') }}" 
          class="photo-resize"
          alt="business-offering"
          />
          {{-- overlay transparent --}}
          <div class="position-absolute w-100 h-100"
          style="background-color: rgba(255, 255, 255, 0.5); 
          top: 0; 
          left: 0;"></div>
          {{-- kotak --}}
          <div class="position-absolute floating-rectangle"
          style="top: 50%; left: 50%; 
          transform: translate(-50%, -50%);
          width: 730px;
          height: 400px;">
                  <div class="text-center">
                    <p style="font-weight: bold;
                    font-size: 50px;
                    color: #4a4a4a;">
                    Bangun Bisnismu<span class="desktop-line-break"><br/></span><span class= "mobile-space"> </span>Sekarang</p>
                    <small style="font-size: 25px;
                    color: #4a4a4a">
                    Yuk, kita diskusikan untuk lebih lanjut.</small>
                    {{-- button --}}
                    <div>
                      <a href="#"
                      class="btn btn-do mt-4"
                      style="margin: 0 auto;">
                    Contact us</a>
                    </div>
                </div>
              </div>
          </div>
      </div>
          {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
        </div>
      </section>
      <!-- end of section offering -->

      <!-- start of section-product -->
      <section class="section-product py-2 animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1600">
        <div class="container">
          <div class="row">
            <div class="container">
              <div class="col-md-12">
                <div class="title-work my-4">
                  <p>Product and Services</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-12">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-manage" type="button" role="tab" aria-controls="pills-manage" aria-selected="true">Manage Services </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-digital-tab" data-bs-toggle="pill" data-bs-target="#pills-digital" type="button" role="tab" aria-controls="pills-digital" aria-selected="false">Digital Solutions</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">Web Services</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-application-tab" data-bs-toggle="pill" data-bs-target="#pills-application" type="button" role="tab" aria-controls="pills-application" aria-selected="false">Application</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-microsoft-tab" data-bs-toggle="pill" data-bs-target="#pills-microsoft" type="button" role="tab" aria-controls="pills-microsoft" aria-selected="false">Microsoft 365</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-manage" role="tabpanel" aria-labelledby="pills-manage-tab">
                  <ul>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Network Infrastructure</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Data Center Implementation</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Storage Management Services</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-digital" role="tabpanel" aria-labelledby="pills-digital-tab">
                   <ul>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Videotron supplier</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />LED and Digital board supplier</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />IP CCTV solutions and implementation</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                  <ul>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Website Development</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Website Maintenance</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Website Design</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Wordpress</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Website integration (Domain & Hosting)</a>
                    </li>
                  </ul>
                </div>
                 <div class="tab-pane fade" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
                  <ul>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Web Application & programing</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />SEO services</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Dashboard Management</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Mobile Apps</a>
                    </li>
                  </ul>
                </div>
                 <div class="tab-pane fade" id="pills-microsoft" role="tabpanel" aria-labelledby="pills-application-tab">
                  <ul>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Microsoft 365 License Supplier</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Microsoft 365 implementation</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Microsoft in-premise infrastructure</a>
                    </li>
                     <li>
                      <a href="#"><img src="{{ asset('/frontend/img/done-outline.svg') }}" alt="teknosolusi" class="me-4 icon-product" />Enterprise mobility security</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- end of section-product -->

      <!-- start of section-demo -->
      <section class="section-demo py-2 animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="2200" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1800">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
              <div class="title-work my-4">
                <p>Main Demo</p>
                <small>Program aplikasi manajemen anggota merupakan software database berbasis web client server yang dapat diimplementasikan dalam sebuah jaringan komputer client server. </small>
                <div class="button-demo">
                  <a href="{{ route('ourdemo') }}" class="btn btn-do mt-4"
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

      <!-- start of section-clients -->
      {{-- <section class="section-clients animsition" data-animsition-in-class="fade-in-down-lg" data-animsition-in-duration="2200" data-animsition-out-class="fade-out-down-lg" data-animsition-out-duration="1700">
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
            <div class="col-md-2 col-6 clients-logo">
              <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" alt="teknosolusi" class="img-fluid" />
            </div>
          </div>
        </div>
      </section> --}}
      <!-- end of section-clients -->
    </main>
@endsection