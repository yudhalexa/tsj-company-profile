<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5 style="color: #fff">Halaman</h5>
            <ul class="mt-4">
              <li>
                <p><a href="{{ route('home') }}">Home</a></p>
              </li>
              <li>
                <p><a href="{{ route('ourstory') }}">Our Story</a></p>
              </li>
              <li>
                <p><a href="{{ route('ourdemo') }}">Our Demo</a></p>
              </li>
              <li>
                <p><a href="{{ route('contact') }}">Contact</a></p>
              </li>
              <li>
                <p><a href="{{ route('loginarea') }}">Client Area</a></p>
              </li>
            </ul>
          </div>

          <div class="col-md-3">
            <h5 style="color: #fff">Alamat</h5>
            <ul class="mt-4">
              <li>
                <p>info@teknosolusi.com</p>
              </li>
              <li>
                <p>0878 - 2272 - 664</p>
              </li>
              <li>
                <p>Graha Mampang Lt.3 Suite 305, Jl. Mampang Prapatan Raya Kav 100 Kel. Duren Tiga, Kec Pancoran, Jakarta Selatan</p>
              </li>
            </ul>
          </div>

          <div class="col-md-6 text-end">
            <img src="{{ asset('/frontend/img/logo-footer.svg') }}" alt="teknosolusi" class="img-fluid logo-footer" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <hr />
            <div class="footer-bottom d-flex justify-content-between">
              <div class="copyright">
                <p>© PT Tekno Solusi 2023. All rights reserved.</p>
              </div>
              <div class="btp">
                <a href="#"
                  >Back to Top
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow-top">
                    <path d="M21.3622 8.2373L13.9999 0.875L6.6377 8.2373L7.87516 9.47472L13.125 4.22483V27.0832H14.875V4.22499L20.1247 9.47472L21.3622 8.2373Z" fill="white" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>