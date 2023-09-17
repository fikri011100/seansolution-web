<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sean Solutions</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('image/logocrop.png') }}">
  <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

  <!-- Styles -->
  <style>
      /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        
  </style>
</head>
<body> 
    @include('sweetalert::alert') 
    @if (session('success')) 
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <div class="container" >
    <div class="navbar mt-4" style="z-index: 10; padding-right: 50px">
      <div style="justify-content: flex-start; align-items: center; gap: 50px; display: flex; padding-left: 70px;">
        <a href="{{url('/')}}"><img style="width: 150px; height: 52.94px" src="{{ asset('image/logo.png') }}" /></a>
        <div style="justify-content: flex-start; align-items: flex-start; gap: 54px; display: flex">
            <a href="{{url('/')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Beranda</div></a>
            <a href="{{url('/aboutus')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Tentang Kami</div></a>
            <!-- testi -->
            <button id="industri-produk"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Industri & Produk</div></button>
            <a href="{{url('/article')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Artikel</div></a>
        </div>
      </div>
      <div>
        <button type="button" onclick="window.location.href='{{ route('katalog') }}'" class="btn btn-outline-light btn-lg" style="padding-left: 32px; padding-right: 32px; margin-right: 30px; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px">Katalog Produk</button>
        <button type="button" onclick="window.location.href=''" class="btn btn-primary btn-lg" style="padding-left: 32px; padding-right: 32px; background: #2562A0; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px" >Hubungi Kami</button>
      </div>
    </div>
    <div style="position: absolute; top: 0px; left: 0px; right: 0px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('image/image_slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>Slide 1</h3>
                <p>Your custom text here.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/image_slider2.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>Slide 1</h3>
                <p>Your custom text here.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/image_slider3.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>Slide 1</h3>
                <p>Your custom text here.</p>
            </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
        <div style="padding-top: 86px; padding-bottom: 87px; left: 0px; right:0px; top: 810px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 56px; display: inline-flex">
                <div style="justify-content: flex-start; align-items: flex-start; gap: 84px; display: inline-flex; margin-left: 80px; margin-right: 80px">
                    <img style="width: 571px; height: 537px; border-radius: 16px" src="{{ asset('image/Rectangle 38.png') }}" />
                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 72px; display: inline-flex">
                        <div style="width: 86px; height: 86px; position: relative">
                            <div style="width: 86px; height: 86px; left: 0px; top: 0px; position: absolute; border-radius: 9999px; border: 0.50px #2562A0 solid; backdrop-filter: blur(16px)"></div>
                            <div style="width: 32px; height: 32px; left: 27px; top: 27px; position: absolute">
                                <img src="{{ asset('image/vuesax/bold/like.svg') }}" />
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="width: 544px; color: #0D2238; font-size: 56px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Kenapa Harus Kami ?</div>
                            <div style="width: 621px; color: #163B60; font-size: 20px; font-family: DM Sans; font-weight: 400; line-height: 40px; word-wrap: break-word">Pengalaman kami yang luas dan dukungan teknis yang handal, dan kami memiliki rangkaian specialty chemical solution untuk menangani berbagai problem dan meningkatkan efisiensi industri anda. Percayakan Seans Solution untuk mendorong kesuksesan dan pertumbuhan industri Anda.</div>
                        </div>
                    </div>
                </div>
                <div style="width:100%;flex-direction: column; justify-content: flex-start; display: flex">
                    <div style="width: 100%; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex; padding-left: 80px; padding-right: 80px">
                        <div id="icon-why-us">
                            <p id="title-why-us">Transparency</p>
                            <p id="desc-why-us">Kami percaya pada transparansi dalam semua transaksi kami, dan kami menjaga klien kami tetap terinformasi sepanjang proses yang berlangsung. Kami sangat mengutamakan komunikasi yang jelas dan terbuka. </p>
                        </div>
                        <div id="icon-why-us">
                            <p id="title-why-us">Personalized Service</p>
                            <p id="desc-why-us">Kami memahami bahwa setiap klien memiliki kebutuhan unik, dan kami bekerja secara erat dengan mereka untuk memberikan layanan yang personal.</p>
                        </div>
                        <div id="icon-why-us">
                            <p id="title-why-us">Experienced Team</p>
                            <p id="desc-why-us">Kami memahami bahwa setiap klien memiliki kebutuhan unik, dan kami bekerja secara erat dengan mereka untuk memberikan layanan yang personal.</p>
                        </div>
                        <div id="icon-why-us">
                            <p id="title-why-us">Results-Driven</p>
                            <p id="desc-why-us">Kami berorientasi pada hasil dan berkomitmen untuk mencapai hasil terbaik yang mungkin untuk klien kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="industriProduk" style="width: 100%; height: 1200px; padding-top: 73px; padding-bottom: 72.86px; padding-left: 91px; padding-right: 91.63px; left: 0px; top: 1858px; position: absolute; justify-content: center; align-items: center; display: inline-flex" >
            <div style="width: 100%; height: 1200px; left: 0px; top: 0px; position: absolute; background: #E9EFF6"></div>
            <div style="height: 212px; top: 69px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: center; gap: 32px; display: flex">
                <div style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                    <div style="text-align: center; color: #2562A0; font-size: 24px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Industri & Produk</div>
                    <div style="width: 930px; text-align: center; color: #0D2238; font-size: 48px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Solusi Kami Untuk Industri Anda</div>
                </div>
                <div style="width: 920px; text-align: center; color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; line-height: 40px; word-wrap: break-word">Solusi Seans Solution hadir untuk berbagai industri, memberikan produk berkualitas tinggi dan inovatif yang mengatasi masalah dan meningkatkan efisiensi</div>
            </div>
            <div style="left: 80px; top: 364px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 54px; display: inline-flex">
                <div style="justify-content: flex-start; align-items: flex-start; gap: 41px; display: inline-flex">
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Vector.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Oil & Gas</div>
                            <div id="desc-industri-produk" >Industri Oli dan Gas berfokus pada eksplorasi, produksi, pengolahan, dan distribusi minyak bumi dan gas alam. Ini mencakup pengeboran sumur minyak, pemrosesan, penyimpanan, serta transportasi bahan baku dan produk jadi.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 1) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/power.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Power Plant</div>
                            <div id="desc-industri-produk" >Industri Power Plant berkaitan dengan perancangan, pembangunan, dan pengelolaan fasilitas pembangkit listrik yang efisien dan berkelanjutan, mencakup berbagai sumber energi seperti tenaga surya, tenaga angin, dan lainnya.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 2) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Textile.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Textile</div>
                            <div id="desc-industri-produk" >Sektor yang berkaitan dengan produksi berbagai jenis kain, serat, dan produk tekstil lainnya, meliputi proses pengolahan serat, pencelupan, pembuatan kain, dan produk jadi seperti pakaian, kain furnitur, dan produk tekstil lainnya.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 3) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Fertilizer.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Fertilize</div>
                            <div id="desc-industri-produk" >Industri pupuk berfokus pada produksi dan distribusi pupuk untuk meningkatkan produktivitas pertanian dan pertumbuhan tanaman.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 4) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div style="justify-content: flex-start; align-items: flex-start; gap: 41px; display: inline-flex">
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Tubes.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Pipe</div>
                            <div id="desc-industri-produk" >Berfokus pada pengembangan solusi perpipaan yang efisien, tahan lama, dan sesuai dengan standar keselamatan dan regulasi industri yang berlaku.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 5) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Geothermal.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Geothermal</div>
                            <div id="desc-industri-produk" >Sektor energi yang memanfaatkan panas bumi untuk menghasilkan listrik atau panas.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 6) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Palm oil.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Palm Oil</div>
                            <div id="desc-industri-produk" >Industri sawit merujuk pada produksi minyak kelapa sawit yang berasal dari buah kelapa sawit.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 7) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                    <div id="icon-industri-produk">
                        <div style="width: 40px; height: 40px; position: relative">
                            <img id="logo-industri-produk" src="{{ asset('image/Food.png') }}" />
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div id="title-industri-produk" >Food & Beverages</div>
                            <div id="desc-industri-produk" >Sektor yang bergerak dalam produksi, distribusi, dan penjualan berbagai jenis makanan dan minuman.</div>
                        </div>
                        <div style="width: 90%; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 10px">
                            <button id="btn-katalog-industri-produk" type="button" onclick="window.location.href='{{ route('download', ['filename' => 'oilandgas.pdf']) }}'" class="btn btn-primary btn-lg" >Download Katalog</button>
                            <button id="btn-detail-industri-produk" type="button" onclick="window.location.href='{{ route('product', 8) }}'" class="btn btn-primary btn-lg" >Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100" style=" padding-top: 73px; padding-bottom: 72.86px; padding-left: 91px; padding-right: 91.63px; left: 0px; top: 3081px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
            <div class="row w-100">
              <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: center; gap: 64px; display: inline-flex">
                  <div style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                      <div style="text-align: center; color: #2562A0; font-size: 24px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Klien Kami</div>
                      <div style="text-align: center; color: #0D2238; font-size: 48px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Mitra Terpercaya dalam Perjalanan Kami</div>
                  </div>
              </div>
              <div class="owl-carousel owl-theme mt-5">
                <div class="item text-center">
                  <img style="max-height: 90px; object-fit: fill; justify-content: center; align-items: center; margin-top: 10px" src="{{ asset('image/client1.png') }}" >
                </div>
                <div class="item text-center">
                  <img style="max-height: 90px; object-fit: fill; justify-content: center; align-items: center; margin-top: 10px" src="{{ asset('image/client2.png') }}" >
                </div>
                <div class="item text-center">
                  <img style="max-height: 90px; object-fit: fill; justify-content: center; align-items: center;" src="{{ asset('image/client3.png') }}" >
                </div>
                <div class="item text-center">
                  <img style="max-height: 90px; object-fit: fill; justify-content: center; align-items: center;" src="{{ asset('image/client4.png') }}" >
                </div>
                <div class="item text-center">
                  <img style="max-height: 90px; object-fit: fill; justify-content: center; align-items: center; margin-top: 30px;" src="{{ asset('image/client5.png') }}" >
                </div>
              </div>
            </div>
        </div>
        <div style="padding-top: 100px; padding-bottom: 62.50px; padding-left: 84px; padding-right: 83px; left: -2px; top: 3500px; position: absolute; flex-direction: column; justify-content: center; align-items: flex-start; gap: 48px; display: inline-flex">
            <div style="text-align: center; color: #0D2238; font-size: 48px; font-family: Lexend Deca; font-weight: 600; word-wrap: break-word">Artikel</div>
            <div style="align-self: stretch; height: 466px; justify-content: flex-start; align-items: flex-start; gap: 39px; display: inline-flex">
                <div class="card border-secondary " style="width: 400px; height: 466px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex; border-radius: 10px;">
                    <img class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="{{ asset('image/Rectangle 40 (1).png') }}" />
                    <div class="card-body" style="width: 400px; height: 207px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div style="color: #90A2B2; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">1 Juli 2023</div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="width: 347px; color: #1D242A; font-size: 20px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Mengenal Degreaser : Pengertian, Based dan Fungsi Degreaser</div>
                            <div style="width: 347px; color: #5C7184; font-size: 14px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Engine overhaul merupakan suatu kegiatan pembongkaran mesin atau yang lebih dikenal dengan istilah turun mesin pada kendaraan.</div>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary " style="width: 400px; height: 466px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex; border-radius: 10px;">
                <img class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="{{ asset('image/Rectangle 40 (2).png') }}" />
                <div class="card-body" style="width: 400px; height: 207px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div style="color: #90A2B2; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">1 Juli 2023</div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="width: 367px; color: #1D242A; font-size: 20px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Yuk, Beralih Menggunakan Chemicals Ramah Lingkungan!</div>
                            <div style="width: 367px; color: #5C7184; font-size: 14px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Chemicals dalam bidang industri memiliki banyak manfaat. Penggunaan chemicals dalam bidang industri dapat meningkatkan produktivitas serta...</div>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary " style="width: 400px; height: 466px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex; border-radius: 10px;">
                <img class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="{{ asset('image/Rectangle 40.png') }}" />
                <div class="card-body" style="width: 400px; height: 207px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div style="color: #90A2B2; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">1 Juli 2023</div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="width: 367px; color: #1D242A; font-size: 20px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Produk Water Treatment Polymer Based</div>
                            <div style="width: 367px; color: #5C7184; font-size: 14px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Polimer pada water treatment dapat digunakan oleh industri yang melakukan proses pengolahan air untuk menghilangkan padatan dari air limbah....</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 900px; left: 0px; top: 4280px; position: absolute">
            <form method="POST" action="{{route('send-email')}}">
                @csrf
                <div style="width: 100%; height: 900px; left: 0px; top: 0px; position: absolute; background: #2562A0"></div>
                <div style="left: 85px; top: 176px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <div style="color: white; font-size: 16px; font-family: Lexend Deca; font-weight: 500; letter-spacing: 0.64px; word-wrap: break-word">Hubungi Kami</div>
                        <div style="width: 620px; color: white; font-size: 64px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Diskusikan Kebutuhan Anda</div>
                    </div>
                    <div style="width: 620px; height: 87px; color: white; font-size: 20px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Silahkan hubungi tim kami untuk pertanyaan, kerjasama, atau bantuan. Kami siap mendengar dan memberikan respons cepat untuk memenuhi kebutuhan Anda.</div>
                </div>
                <div style="left: 741px; top: 73px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: center; gap: 23px; display: inline-flex">
                    <div style="justify-content: flex-start; align-items: flex-start; gap: 30px; display: inline-flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="color: white; font-size: 14px; font-family: Lexend Deca; font-weight: 700; line-height: 20px; word-wrap: break-word">Name</div>
                            <div class="input-group">
                                <input style="width: 290px; height: 52px; padding: 16px; background: white; border-radius: 8px;" type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="color: white; font-size: 14px; font-family: Lexend Deca; font-weight: 600; line-height: 20px; word-wrap: break-word">Phone Number</div>
                            <div class="input-group">
                                <input style="width: 290px; height: 52px; padding: 16px; background: white; border-radius: 8px;" type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div style="justify-content: flex-start; align-items: flex-start; gap: 30px; display: inline-flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="color: white; font-size: 14px; font-family: Lexend Deca; font-weight: 600; line-height: 20px; word-wrap: break-word">Email Address</div>
                            <div class="input-group">
                                <input style="width: 290px; height: 52px; padding: 16px; background: white; border-radius: 8px;" type="text" id="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="color: white; font-size: 14px; font-family: Lexend Deca; font-weight: 600; line-height: 20px; word-wrap: break-word">Company</div>
                            <div class="input-group">
                                <input style="width: 290px; height: 52px; padding: 16px; background: white; border-radius: 8px;" type="text" id="company" name="company" class="form-control" placeholder="Company">
                            </div>
                        </div>
                    </div>
                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                        <div style="color: white; font-size: 14px; font-family: Lexend Deca; font-weight: 600; line-height: 20px; word-wrap: break-word">Messages</div>
                        <div class="input-group">
                            <textarea style="width: 612px; height: 188px; padding: 16px; background: white; border-radius: 8px;" type="text" id="message" name="message" class="form-control" placeholder="Messages"></textarea><br>
                        </div>
                    </div>
                    <button style="width: 614px; height: 64px; padding-left: 32px; padding-right: 32px; padding-top: 12px; padding-bottom: 12px; background: #1C4A78; color: #FAFDFF; border-radius: 8px; justify-content: center; align-items: center; gap: 10px; display: inline-flex font-size: 16px; font-family: Lexend Deca; font-weight: 600;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div style="width: 100%; height: 319px; left: 0px; top: 4908px; position: absolute">
          <div style="width: 100%; height: 319px; left: 0px; top: 0px; position: absolute; background: #120B06"></div>
          <div style="left: 80px; top: 63px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 42px; display: inline-flex">
          <img style="width: 232px; height: 82px" src="{{ asset('image/image 61.png') }}" />
        </div>
        <div style="width: 530px; left: 830px; top: 63px; position: absolute; justify-content: space-between; align-items: flex-start; gap: 80px; display: inline-flex">
        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
              <div style="color: white; font-size: 20px; font-family: Plus Jakarta Sans; font-weight: 700; word-wrap: break-word">Follow Us</div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 14px; display: inline-flex">
                  <div style="width: 32px; height: 32px; position: relative">
                      <div style="width: 32px; height: 32px; left: 0px; top: 0px; position: absolute">
                          <div style="width: 32px; height: 26.67px; left: 2.67px; position: absolute;"><img src="{{ asset('image/instagram.svg') }}"/></div>
                          <div style="width: 32px; height: 32px; left: 32px; top: 32px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; opacity: 0"></div>
                      </div>
                  </div>
                  <div style="width: 32px; height: 32px; position: relative">
                      <div style="width: 32px; height: 32px; left: 2.05px; position: absolute;"><img src="{{ asset('image/mdi_twitter.svg') }}"/></div>
                  </div>
                  <div style="width: 32px; height: 32px; position: relative">
                      <div style="width: 32px; height: 32px; left: 2.67px; position: absolute;"><img src="{{ asset('image/ic_twotone-telegram.svg') }}"/></div>
                  </div>
                  <div style="width: 32px; height: 32px; position: relative">
                      <div style="width: 32px; height: 32px; position: absolute;"><img src="{{ asset('image/ri_facebook-fill.svg') }}"/></div>
                  </div>
                  <div style="width: 32px; height: 32px; position: relative">
                      <div style="width: 32px; height: 32px; position: absolute;"><img src="{{ asset('image/brandico_linkedin.svg') }}"/></div>
                  </div>
              </div>
          </div>
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
              <div style="color: white; font-size: 20px; font-family: Plus Jakarta Sans; font-weight: 700; word-wrap: break-word">Contact Us</div>
              <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                  <div style="width: 24px; height: 24px; position: relative">
                      <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute">
                          <div style="width: 24px; height: 24px; left: 2px; top: 2px; position: absolute;"><img src="{{ asset('image/call (1).svg') }}"/></div>
                      </div>
                  </div>
                  <div style="width: 130px; height: 22px; color: white; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; word-wrap: break-word">021-5457578</div>
              </div>
              <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                  <div style="width: 24px; height: 24px; position: relative">
                      <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute">
                          <div style="width: 24px; height: 24px; left: 2px; top: 2px; position: absolute;"><img src="{{ asset('image/message (1).svg') }}"/></div>
                          <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; opacity: 0"></div>
                      </div>
                  </div>
                  <div style="color: white; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; word-wrap: break-word">sales@seansolution.com</div>
              </div>
          </div>
        </div>
      <div style="width: 450px; left: 80px; top: 184px; position: absolute; color: white; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 600; word-wrap: break-word">Office : Mangga Dua Square, Lt 3 Blok A, No. 93 Jl. Gunung Sahari Raya No. 1, Ancol, Pademangan, Jakarta Utara, 14410</div>
    </div>
  </div>
  <div id="scrollButton" class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=6281232499785&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
  </div>
  


  <!-- script -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:100,
        autoWidth: true,
        items: 4
    });

    window.addEventListener('scroll', () => {
      const whatsappButton = document.querySelector('.whatsapp-button');
      if (window.scrollY > 100) {
          whatsappButton.classList.add('active');
      } else {
          whatsappButton.classList.remove('active');
      }
    });
    const industriProduk = document.getElementById('industriProduk');
    const scrollButton = document.getElementById('industri-produk');
    scrollButton.addEventListener('click', () => {
      industriProduk.scrollIntoView({ behavior: 'smooth' });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const scrollLink = document.getElementById('industriProduk');
        const sectionToScroll = document.getElementById('sectionToScroll');

        scrollLink.addEventListener('click', function(e) {
            e.preventDefault();
            sectionToScroll.scrollIntoView({ behavior: 'smooth' });
        });
    });
  </script>
</body>
</html>