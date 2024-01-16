<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
  <link rel="icon" type="image/x-icon" href="{{ asset('image/logocrop.png') }}">
  <link href="{{ asset('css/detailarticle.css?v=').time()}}" type="text/css" rel="stylesheet">
  <title>Artikel</title>
</head>
<body class="container">
    <div id="navbar-web" style="width:100%; height: 453px; left: 0px; top: 0px; position: absolute">
        <div style="width: 893px; left: 80px; top: 257px; position: absolute; color: white; font-size: 48px; font-family: Lexend Deca; font-weight: 700; word-wrap: break-word">Discover Our Story: Empowering Solutions and Innovation</div>
        <div class="navbar mt-4">
            <div style="justify-content: flex-start; align-items: center; gap: 50px; display: flex; padding-left: 30px;">
                <a href="{{url('/')}}"><img style="width: 150px; height: 52.94px" src="{{ asset('image/logobiru.png') }}" /></a>
                <div style="justify-content: flex-start; align-items: flex-start; gap: 30px; display: flex">
                    <a href="{{url('/')}}" style="text-decoration: none;"><div style="text-align: center; color: #2562A0; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Beranda</div></a>
                    <a href="{{url('/aboutus')}}" style="text-decoration: none;"><div style="text-align: center; color: #2562A0; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Tentang Kami</div></a>
                    <a href="{{url('/')}}#industriProduk" style="text-align: center; color: #2562A0; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Industri & Produk</a>
                    <a href="{{url('/article')}}" style="text-decoration: none;"><div style="text-align: center; color: #2562A0; font-size: 18px; font-family: Lexend Deca; font-weight: 600; line-height: 24px; word-wrap: break-word">Artikel</div></a>
                </div>
            </div>
            <div style="margin-right: 20px">
                <button type="button" onclick="window.location.href='{{ route('katalog') }}'" class="btn btn-lg" style="color: #2562A0; border-color: #2562A0; padding-left: 32px; padding-right: 32px; margin-right: 30px; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px">Katalog Produk</button>
                <button type="button" onclick="window.location.href=''" class="btn btn-primary btn-lg" style="padding-left: 32px; padding-right: 32px; background: #2562A0; border-radius: 8px;font-family: Lexend Deca; font-weight: 600; font-size: 16px" >Hubungi Kami</button>
            </div>
        </div>
    </div>
    <div style="top: 133px; left: 0; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 59px; display: inline-flex">
        <img class="px-5" style="width: 100%; height: 514px; border-radius: 24px" src="image/Rectangle 40 (3).png" />
        <div style="height: 164px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; margin-left: 25px">
            <div style="color: #2562A0; font-size: 24px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">1 Juli 2023</div>
            <div style="width: 950px; color: #1D242A; font-size: 48px; font-family: Lexend Deca; font-weight: 700; word-wrap: break-word">Yuk, Beralih Menggunakan Chemicals Ramah Lingkungan!</div>
        </div>
        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 54px; display: flex; margin-left: 25px">
            <div style="width: 100%; color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Chemicals dalam bidang industri memiliki banyak manfaat. Penggunaan chemicals dalam bidang industri dapat meningkatkan produktivitas serta memberikan solusi dari masalah-masalah yang dihadapi. Bidang industri selalu membutuhkan chemicals dalam kegiatannya terutama kegiatan maintenance. Pemilihan chemicals untuk maintenance membutuhkan perhatian yang lebih demi menjaga kesehatan pekerja dan keselarasan lingkungan sekitar. Yuk, gunakan chemicals yang ramah lingkungan!</div>
            <div style="width: 100%; height: 265px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                <div style="width: 682px; height: 55px; color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Chemicals Industri Pertambangan<br/></div>
                <div style="width: 100%; color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Chemicals memiliki peran penting dalam proses atau kegiatan industri pertambangan untuk membantu meningkatkan produktifitas. Penggunaan chemicals di bidang industri pertambangan merupakan jawaban dari masalah-masalah yang dihadapi. Mulai dari pengelolaan limbah pada area tambang, penanganan debu, dan perawatan alat-alat pertambangan lain menggunakan chemicals sebagai solusinya. Maka dari itu, untuk mendapatkan hasil yang maksimal penggunaan chemicals tidak boleh sembarangan serta diharapkan tidak menimbulkan dampak buruk terhadap kesehatan pekerja dan lingkungan.</div>
            </div>
            <div style="height: 521px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                <div style="width: 100%; height: 63px; color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Chemicals Berpengaruh Terhadap Kesehatan dan Lingkungan?<br/><br/></div>
                <div style="width: 100%; color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Meskipun banyak membantu meberikan solusi di berbagai industri namun nyatanya banyak chemicals yang mempunyai dampak samping terutama terhadap kesehatan dan lingkungan. Tidak semua chemicals mengandung bahan-bahan yang aman. Ada juga yang mengandung bahan-bahan berbahaya. Beberapa efek samping bisa saja dialami para pekerja maupun orang-orang di sekitar. Iritasi pada kulit, mata, gangguan pada sistem pernapasan, dan pada organ dalam adalah beberapa contoh efek samping yang kerap dialami. Namun, tak jarang chemicals yang mempunyai pengaruh buruk terhadap kesehatan tetap digunakan. Salah satunya adalah chemicals yang mengandung klorin dan karsinogen, yang perlahan mempengaruhi kesehatan pekerja dan berdampak pada penyakit yang lebih serius.<br/><br/>Lingkungan dan alam juga bisa menjadi korban dalam penggunaan chemicals yang berbahaya. Chemicals yang merugikan lingkungan yaitu chemicals yang menghasilkan limbah B3 (Bahan Berbahaya dan Beracun). Pemilihan dan penggunaan bahan kimia yang tidak tepat justru dapat menghasilkan limbah B3 yang akan berdampak negatif pada lingkungan dan harus dilakukan penanganan khusus. Tanpa pengolahan yang memadai, limbah ini memiliki daya rusak lingkungan yang jauh lebih berat dibandingkan dengan jenis limbah yang lain.</div>
            </div>
            <div style="height: 800px; flex-direction: column; margin-top: 20px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                <div style="width: 100%; height: 63px; color: #0D2238; font-size: 40px; font-family: Lexend Deca; font-weight: 500; word-wrap: break-word">Beralih Menggunakan Chemicals yang Lebih Aman</div>
                <div style="width: 100%"><span style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Guna mengurangi dampak buruk, pilihlah produk Chemicals yang ramah lingkungan serta aman untuk digunakan Seans Solutions menjunjung tinggi keselarasan alam sekitar dan selalu berusaha memenuhi tanggung jawab terhadap alam serta berfokus terhadap masalah pencemaran dengan menghasilkan produk-produk berkualitas, aman, dan ramah lingkungan. Kami terus berusaha menjalankan komitmen dalam hal menjaga lingkungan yang berkelanjutan dengan menciptakan produk yang ramah lingkungan dan aman digunakan. Beberapa produk yang kami formulasikan merupakan produk yang aman digunakan terhadap kesehatan para pekerja, diantaranya :<br/><br/></span><span style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Water Clarifier<br/>pH Adjuster<br/>Biocide agent<br/>Anti foam agent<br/>Cleaner & degreaser<br/>Vehicle & heavy equipment support<br/>HSE support<br/>Drilling additive<br/></span><span style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word"><br/>Kami juga melakukan riset dan inovasi demi menghasilkan produk yang berkualitas tinggi. Serta melakukan sertifikasi TKDN dalam rangka mendukung pengoptimalan Tingkat Komponen Dalam Negeri. Produk-produk Seans Solutions juga memiliki serifikat Biodegradable dan Non Toxic. Hal ini sebagai bukti nyata komitmen kami terhadap kepedulian dan kelestarian alam di dalam setiap pengembangan produk-produk kami yang ramah lingkungan.<br/>Jika anda tertarik untuk informasi lebih lanjut mengenai Chemicals Product, Seans Solutions siap membantu memberikan layanan dan solusi terbaik dalam memecahkan masalah dengan menyediakan produk berkualitas tinggi, hubungi kami melalui </span><span style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; text-decoration: underline; word-wrap: break-word">Whatsapp</span><span style="color: #163B60; font-size: 24px; font-family: DM Sans; font-weight: 400; word-wrap: break-word"> atau email ke sales.support@seansolutions.co.id.</span></div>
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
</body>
</html>