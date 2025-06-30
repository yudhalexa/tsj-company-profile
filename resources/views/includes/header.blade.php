 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <div class="container">
    <a href="#">
      <img src="{{ asset('/frontend/img/logo-header.png') }}" alt="teknosolusi" class="img-fluid" width="220rem" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route ('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route ('aboutus') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('productservices') ? 'active' : '' }}" href="{{ route('productservices') }}" tabindex="-1" aria-disabled="true">Product and Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}" tabindex="-1" aria-disabled="true">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of navbar -->