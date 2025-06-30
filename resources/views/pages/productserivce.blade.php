@extends('layouts.app')

@section('title', 'Product and Services')

@section('content')
     <main class="animsition mt-5">
      <!-- start of section-product -->
      <section class="section-product-page py-2">
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
           <div class="row content-product-page">
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
      <!-- end of section-product -->

      <div class="question my-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12 bg-question">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 py-2">
                  <img src="{{ asset('/frontend/img/question.jpg') }}" alt="teknosolusi" class="img-fluid d-none d-sm-block" />
                </div>
                <div class="flex-grow-1 ms-3 pt-2">
                  <h3>Masih punya pertanyaan?</h3>
                  <p>Jika tidak menemukan jawaban yang anda cari. anda bisa menghubungi kami</p>
                </div>
                <a href="#" class="btn btn-do me-md-2">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

