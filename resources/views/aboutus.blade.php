<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sean Solutions</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="{{ asset('image/logocrop.png') }}">
  <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
  <link href="{{ asset('css/aboutus.css?v=').time()}}" type="text/css" rel="stylesheet">
  <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
</head>
<body>
<div class="container">
    <div id="navbar-web" style="width:100%; height: 453px; left: 0px; top: 0px; position: absolute">
        <div style="width:100%; height: 453px; left: 0px; top: 0px; position: absolute; background: #163B60"></div>
        <div style="width: 893px; left: 80px; top: 257px; position: absolute; color: white; font-size: 48px; font-family: Lexend Deca; font-weight: 700; word-wrap: break-word">Discover Our Story: Empowering Solutions and Innovation</div>
        <div class="navbar mt-4">
            <div style="justify-content: flex-start; align-items: center; gap: 50px; display: flex; padding-left: 30px;">
                <a href="{{url('/')}}"><img style="width: 150px; height: 52.94px" src="{{ asset('image/logo.png') }}" /></a>
                <div style="justify-content: flex-start; align-items: flex-start; gap: 30px; display: flex">
                    <a href="{{url('/')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Beranda</div></a>
                    <a href="{{url('/aboutus')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Tentang Kami</div></a>
                    <a href="{{url('/')}}#industriProduk" style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Industri & Produk</a>
                    <a href="{{url('/article')}}" style="text-decoration: none;"><div style="text-align: center; color: white; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Artikel</div></a>
                </div>
            </div>
            <div style="margin-right: 20px">
                <button type="button" onclick="window.location.href='{{ route('katalog') }}'" class="btn btn-outline-light btn-lg" style="padding-left: 32px; padding-right: 32px; margin-right: 30px; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px">Katalog Produk</button>
                <button type="button" onclick="window.location.href=''" class="btn btn-primary btn-lg" style="padding-left: 32px; padding-right: 32px; background: #2562A0; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px" >Hubungi Kami</button>
            </div>
        </div>
    </div>
    </div>
    <div class="topnav" style="z-index: 1;">
        <a href="{{url('/')}}" class="active-mobile"><img style="width: 80px" src="{{ asset('image/logobiru.png') }}" /></a>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
            <a href="{{url('/')}}">Beranda</a>
            <a href="{{url('/aboutus')}}">Tentang Kami</a>
            <button id="industri-produk-mobile">Industri & Produk</button>
            <a href="{{url('/article')}}">Artikel</a>
            <button type="button" onclick="window.location.href='{{ route('katalog') }}'">Katalog Produk</button>
            <button type="button" onclick="window.location.href=''" >Hubungi Kami</button>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars" style="color: black"></i>
        </a>
    </div>
    <div style="width: 100%; padding-top: 68px; padding-bottom: 68px; left: 0px; top: 453px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
        <div style="width: 100%; justify-content: between;display: flex">
            <div class="col-sm-8" style="padding-left: 30px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div style="width: 544px; color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Siapakah Kami?</div>
                <div style="width: 770px; color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">PT Sean Solution Indonesia (Seans) adalah perusahaan Specialty Chemical, Tools & Services dengan produk utama kami, yaitu Maintenance Chemicals, Coating, Lubricant & Autolubricator. Seans berfokus pada industri automotive, perminyakan, pertambangan, panas bumi, petrokimia, pembangkit listrik, tekstil dan kelapa sawit.<br/>Memberikan solusi dan benefit bagi pelanggan adalah komitmen kami dengan tetap mengutamakan kualitas produk hingga terciptanya kepuasan pelanggan.<br/><br/>Kami terus berusaha menciptakan produk yang inovatif, solutif serta ramah lingkungan.</div>
            </div>
            <div  class="col-sm-4" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 43px; display: inline-flex">
                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <div style="width: 40px; height: 40px; position: relative">
                        <div style="width: 30px; height: 23.75px; left: 5px; top: 7.50px; position: absolute;"><img src="{{ asset('image/carbon_quotes.svg') }}" > </div>
                    </div>
                    <div style="width: 110px; height: 0px; border: 1px black solid"></div>
                </div>
                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 30px; display: flex">
                    <div style="width: 400px; height: 126px; color: #0D2238; font-size: 24px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">“Kami percaya bahwa solusi kimiawi khusus dapat membawa transformasi positif dalam industri.”</div>
                </div>
            </div>
        </div>
    </div>
    <div style="width:100%; left: 0px; top: 1018px; position: absolute; justify-content: between; align-items: center; display: flex">
        <img class="col-sm-4 pr-2" style="height: 296px" src="{{ asset('image/Rectangle 4539.png') }}" />
        <img class="col-sm-4 px-2" style="height: 296px" src="{{ asset('image/Rectangle 4540.png') }}" />
        <img class="col-sm-4 pl-2" style="height: 296px" src="{{ asset('image/Rectangle 4541.png') }}" />
    </div>
        <div class="column" style="width: 80%; left: 5%; top: 1369px; position: absolute;">
            <div style="color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Visi Kami</div>
            <div style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Memberikan solusi dan benefit bagi pelanggan adalah komitmen kami dengan tetap mengutamakan kualitas produk hingga terciptanya kepuasan pelanggan. Kami terus berusaha menciptakan produk yang inovatif, solutif serta ramah lingkungan.</div>
            <div class="mt-5" style="color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Misi Kami</div>
            <div class="mt-3" style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Menghasilkan sumber daya manusia yang berkompeten agar dapat membantu memajukan bangsa dan negara.<br/><br/>Menciptakan produk-produk khusus yang dapat memberikan nilai tambah bagi perkembangan industri juga perekonomian bangsa dan negara.<br/><br/>Mampu menciptakan produk yang dapat di terima di kancah internasional.<br/><br/>Menjaga kepercayaan pelanggan dengan tetap memberikan pelayanan terbaik dan jaminan mutu produk yang dihasilkan.</div>
        </div>
    <div style="width:100%; padding-top: 108px; padding-bottom: 108px; left: 0px; top: 2093px; position: absolute; display: inline-flex">
        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: center; gap: 32px; display: inline-flex">
            <div style="width: 100%; color: #0D2238; padding-left: 60px; font-size: 40px; font-family: Lexend Deca; font-weight: 500; line-height: 64px; word-wrap: break-word">Layanan Kami</div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 21px; display: inline-flex; ">
                <div style="width: 324px; height: 250px; padding-left: 24px; padding-right: 24px; padding-top: 30px; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                    <div style="width: 40px; height: 40px; position: relative">
                        <div style="width: 26.67px; height: 35px; left: 6.67px; top: 1.67px; position: absolute;"><img src="{{ asset('image/ri_oil-line.svg') }}"/></div>
                    </div>
                    <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                        <div style="color: #0D2238; font-size: 20px; font-family: Lexend Deca; font-weight: 500; line-height: 28px; word-wrap: break-word">Lubricant</div>
                        <div style="color: #0D2238; font-size: 16px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Specialty Grease, Hydraulic Oil, Turbine Oil, Compressor Oil, Graphite Powder, Engine Oil, Heat Transfer Fluid, White Oil, Wire Pulling Lubricant, ETC</div>
                    </div>
                </div>
                <div style="width: 289px; height: 250px; padding-left: 24px; padding-right: 24px; padding-top: 30px; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                    <div style="width: 40px; height: 40px; position: relative">
                        <div style="width: 35.30px; height: 23.60px; left: 1.25px; top: 3.45px; position: absolute;"><img src="{{ asset('image/nimbus_ecosystem.svg') }}"/></div>
                    </div>
                    <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                        <div style="color: #0D2238; font-size: 20px; font-family: Lexend Deca; font-weight: 500; line-height: 28px; word-wrap: break-word">Lubrication System</div>
                        <div style="color: #0D2238; font-size: 16px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Automation Lubricants untuk berbagai aplikasi yang dapat meningkatkan efisiensi re-grasing pada asset-aset bergerak anda.</div>
                    </div>
                </div>
                <div style="width: 289px; height: 250px; padding-left: 24px; padding-right: 24px; padding-top: 30px; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                    <div style="width: 40px; height: 40px; position: relative">
                        <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute">
                            <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                            <div style="width: 31.67px; height: 33.33px; left: 5px; top: 3.33px; position: absolute;"><img src="{{ asset('image/mingcute_paint-2-line.svg') }}"/></div>
                        </div>
                    </div>
                    <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                        <div style="color: #0D2238; font-size: 20px; font-family: Lexend Deca; font-weight: 500; line-height: 28px; word-wrap: break-word">Coating</div>
                        <div style="color: #0D2238; font-size: 16px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Berbagai jenis solution coating yang dapat melindungi segala bentuk asset anda agar lebih terproteksi dan menarik secara estetika</div>
                    </div>
                </div>
                <div style="width: 289px; height: 250px; padding-left: 24px; padding-right: 24px; padding-top: 30px; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                    <div style="width: 40px; height: 40px; position: relative">
                        <div style="width: 35px; height: 35px; left: 3.33px; top: 3.33px; position: absolute;"><img src="{{ asset('image/grommet-icons_vm-maintenance.svg') }}"/></div>
                    </div>
                    <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                        <div style="color: #0D2238; font-size: 20px; font-family: Lexend Deca; font-weight: 500; line-height: 28px; word-wrap: break-word">Maintenance Services</div>
                        <div style="color: #0D2238; font-size: 16px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Memberikan chemical solution untuk mempermudah pekerjaan maintenance</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="blackBackgroundFooter"></div>
            <div id="imgFooterDiv">
                <img id="imgFooter" src="{{ asset('image/logo.png') }}" />
            </div>
        <div id="address">Office : Mangga Dua Square, Lt 3 Blok A, No. 93 Jl. Gunung Sahari Raya No. 1, Ancol, Pademangan, Jakarta Utara, 14410</div>
        <div id="sosmed">
            <div id="followUs">
                <div id="textFollowUs">Follow Us</div>
                <div id="followUsImageDiv">
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
            <div id="contactUs">
                <div id="contactUsText">Contact Us</div>
                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                    <div style="width: 24px; height: 24px; position: relative">
                        <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute">
                            <div style="width: 24px; height: 24px; left: 2px; top: 2px; position: absolute;"><img src="{{ asset('image/call (1).svg') }}"/></div>
                        </div>
                    </div>
                    <div id="textPhone">021-5457578</div>
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
    </div>
</div>

<!-- script -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
  </script>
</body>
</html>