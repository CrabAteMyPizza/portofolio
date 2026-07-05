<x-layout>
    <x-slot name="addedCustomScript">
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="{{asset('js/textAnimControl.js')}}" defer></script>
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital@0;1&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3a24dfb225.js" crossorigin="anonymous"></script>
      </x-slot>

    <div class="d-flex flex-column flex-1">
        <div class="d-flex flex-column flex-lg-row mb-5 flex-1">

          <div class="lg-layout-setting mx-auto my-auto">
            <div class="d-flex ms-4 flex-column">
                <h1 class="banner-font-sz oswald-heavy text-white ml13">AKMAL</h1>
                <h1 class="banner-font-sz oswald-heavy text-white ml13">ALIFANSYAH</h1>
            </div>
            <div class="plus-jakarta-sans-one gap-5 text-light d-flex mx-4 mb-5 mb-lg-0 flex-row">
                <h6 class="clock-fs">Jakarta, ID</h6>
                <h6 id="dateCounter" class="clock-fs"></h6>
                <h6 id="timeCounter" class="clock-fs"></h6>
            </div>
          </div>

          <div id="carouselExampleCaptions" class="carousel slide lg-layout-setting"  data-bs-ride="carousel" data-interval="500">
            <div class="carousel-inner">
                <div class="carousel-item cust-car-height entry-img-frame active">
                  <img src="{{asset('images/code.png')}}" class="carousel-image">
                </div>
                <div class="carousel-item cust-car-height">
                  <img src="{{asset('images/BackNew.png')}}" class="carousel-image">
                </div>
                <div class="carousel-item cust-car-height">
                  <img src="{{asset('images/Jaguar.png')}}" class="carousel-image">
                </div>
                <div class="carousel-item cust-car-height">
                  <img src="{{asset('images/sea.png')}}" class="carousel-image">
                </div>
                <div class="carousel-item cust-car-height">
                  <img src="{{asset('images/2049.png')}}" class="carousel-image">
                </div>
            </div>
          </div>

        </div>

        <div class="text-white d-flex mt-5 px-3 py-3 flex-column">
            <h1 class="archivo-home px-5 py-5 font-profile-exp">
                Hi, I’m Akmal, a programmer and 3D artist based in Indonesia. I try building things that are visual, whether through interactive systems, real-time data, or detailed visual work.
            </h1>
        </div>

        <div class="text-white d-flex my-4 px-3 py-3 flex-column">
            <h1 class="archivo-home px-5 pt-5">
               Experience
            </h1>
            
            <ul class="px-5 pt-5 experience-list">
              <li class="d-flex align-items-center">
                <span class="me-4 fs-2">•</span>
                <div>
                  <div class="fs-4 fw-bold">PT Freeport Indonesia</div>
                  <div>Intern Custom Application Developer</div>
                  <div>Feb 2025 - Feb 2026</div>
                </div>
              </li>
            </ul>
        </div>

        <div class="text-white d-flex my-4 px-3 py-3 flex-column">
            <h1 class="archivo-home px-5 pt-5">
               Current Tech Stack
            </h1>
            
            <div class="d-flex px-5 pt-5 flex-row gap-5">
              <i class="fa-brands fs-1 fa-php"></i>
              <i class="fa-brands fs-1 fa-laravel"></i>
              <i class="fa-brands fs-1 fa-css"></i>
              <i class="fa-brands fs-1 fa-bootstrap"></i>
            </div>

            <div class="d-flex px-5 pt-5 flex-row gap-5">
              <i class="fa-brands fs-1 fa-html5"></i>
              <i class="fa-brands fs-1 fa-java"></i>
              <i class="fa-brands fs-1 fa-js"></i>
              <h5><i class="fa-solid fa-database fs-1 d-none-sql"></i> <span class="my-auto text-center contract-text-logo-sm fs-3">SQL</span></h5>
            </div>

            <div class="d-flex px-5 pt-5 flex-row gap-5">
              <i class="fa-brands fs-1 fa-github"></i>
              <h5><span class="my-auto text-center fs-3 contract-text-logo-sm">.NET</span></h5>
              <h5><span class="my-auto text-center fs-3 contract-text-logo-sm">Open GL</span></h5>
            </div>
        </div>

        <div class="text-white d-flex mt-3 px-3 py-3 flex-column">
            <h1 class="archivo-home px-5 pt-5">
               Contact me
            </h1>
            <div class="d-flex flex-row gap-4 px-5 pt-2 pb-4">
              <a class="contact-link" href="mailto:akmal.alifansyah.business@gmail.com">
                <i class="bi bi-google fs-3"></i>
              </a>
              <a class="contact-link" href="https://www.linkedin.com/in/akmal-alifansyah-24b93b251/">
                <i class="bi bi-linkedin fs-3"></i>
              </a>
              <a class="mt-auto mb-1 contact-link" href="https://www.artstation.com/pastaoglioolio">
                <i class="fa-brands fa-artstation fs-3"></i>
              </a>
            </div>
        </div>
    </div>
</x-layout>