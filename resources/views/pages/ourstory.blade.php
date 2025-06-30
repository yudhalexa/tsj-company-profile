@extends('layouts.app')

@section('title', 'Our Story')

@section('content')
    <main class="mt-5">
      <div class="about-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              {{-- about us --}}
              <div class="bungkus">
                <div class="description-aboutus">
                  <div class="title-work">
                    <p>Tentang Kami</p>
                  </div>
                  <div>
                    <p style="width: 300px;
                    color: #000000;">
                      Teknosolusi adalah perusahaan IT dan Digital Solutions, berdiri sejak 2020. Kami membantu untuk mengembangkan bisnis klien, memberikan implementasi berkualitas dan servis yang terbaik dengan memberikan solusi yang efektif.
                    </p>
                  </div>
                </div>
                <div class="photo-aboutus bungkus-photo">
                  <img src="{{ asset('/frontend/img/modern-office-building-in-the-city-free-photo.webp') }}"
                  alt="gedung"
                  style="width: 400px;"/>
                  <img src="{{ asset('/frontend/img/istockphoto-1536191188-612x612.jpg') }}"
                  alt="ngantor"
                  style="width: 300px;"/>
                </div>
              </div>
            </div>
            {{-- management structure --}}
            <div class="col-md-12">
              <div class="title-work my-4">
                <p>Management Structure</p>
                <div class="management-structure text-center">
                  <div class="image-grid">
                    {{-- grid management stucture --}}
                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bigstock-Cheerful-Smiling-Businessman-W-296735677-768x512.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #E8833A;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">President Director</div>
                    </div>
                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bigstock-Cheerful-Smiling-Businessman-W-296735677-768x512.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #2C88D9;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">Director of Operational</div>
                    </div>
                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bigstock-Cheerful-Smiling-Businessman-W-296735677-768x512.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #2C88D9;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">Business Development Operational</div>
                    </div>

                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bigstock-Cheerful-Smiling-Businessman-W-296735677-768x512.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #207868;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">Engineer</div>
                    </div>
                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bigstock-Cheerful-Smiling-Businessman-W-296735677-768x512.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #207868;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">Finance & Admin</div>
                    </div>
                    <div>
                      <div class="management-structure-shadow">
                        <img src="{{ asset('/frontend/img/bg-1.jpg') }}" 
                        alt="director"
                        class="img-fluid floating rectangle"/>
                        <div class="management-name"
                        style="background-color: #207868;">John Doe</div>
                      </div>
                      <div class= "management-jabatan">Sales & Marketing</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- our clients --}}
            <div class="col-md-12">
              <div class="title-work my-4">
                <p>Our Clients</p>
                <div class="management-structure text-center">
                  <div class="client-grid">
                    {{-- grid clietns --}}
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/ifg-life-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/ifg-life-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/ifg-life-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/ifg-life-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                    <div class="client-rectangle">
                      <img src="{{ asset('/frontend/img/makarim-removebg-preview.png') }}" 
                      class="img-fluid floating rectangle"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection