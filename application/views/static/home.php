<!--==========================
    Intro Section
  ============================-->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <div class="carousel-background"><img src="<?= base_url('assets/img/intro-carousel/IMG_7035.jpg') ?>" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Selamat Datang di Perpustakaan SMP Negeri 4 Lumajang</h2>
              <p>.....................</p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="<?= base_url('assets/img/intro-carousel/6.jpeg') ?>" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content"><br>
              <h2>"Buku adalah Kapak pemecah yang bisa mencairkan lautan beku yang membentang didalam jiwa"</h2>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="<?= base_url('assets/img/intro-carousel/7.jpeg') ?>" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content"><br>
              <h2>"Membaca adalah Nafas Hidup dan Jembatan EMAS ke Masa Depanku"</h2>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="<?= base_url('assets/img/intro-carousel/8.jpeg') ?>" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content"><br>
              <h2>"MEMBACA<br>adalah<br>KUNCI ILMU"</h2>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- #intro -->

<!--==========================
      About Us Section
    ============================-->
<section id="about">
  <div class="container">

    <header class="section-header">
      <h3>About Library</h3>
      <p>.........</p>
    </header>

    <div class="row about-cols">

      <div class="col-md-4 wow fadeInUp">
        <div class="about-col">
          <div class="img">
            <img src="<?= base_url('assets/img/DSC_0725.jpg') ?>" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
          </div>
          <h2 class="title"><a>Mision</a></h2>
          <p>
            1. Membangun Perpustakaan Sekolah yang berlandaskan kebudayaan bangsa yang berkarakter<br>2. Mengembangkan layanan perpustakaan untuk siswa, guru dan warga sekolah<br>3. Mengembangkan informasi berbasis ilmu pengetahuan dan teknologi yang berwawasan iman dan taqwa<br>4. Mengembangkan Kerjasama dalam penyediaan sarana dan prasarana perpustakaan
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-col">
          <div class="img">
            <img src="<?= base_url('assets/img/IMG_3183.jpg') ?>" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-list-outline"></i></div>
          </div>
          <h2 class="title"><a>Plan</a></h2>
          <p>
            Rencana Perpustakaan.
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-col">
          <div class="img">
            <img src="<?= base_url('assets/img/DSC02549.jpg') ?>" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
          </div>
          <h2 class="title"><a>Vision</a></h2>
          <p>
            Membangun Informasi pustaka, melalui iptek dan imtaq, menuju warga belajar yang gemar membaca.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #about -->

<!--==========================
      Facts Section
    ============================-->
<section id="facts" class="wow fadeIn">
  <div class="container text-center">

    <header class="section-header">
      <h3>Catatan</h3>
      <p>Catatan Perpustakaan SMPN 4 Lumajang</p>
    </header>

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
      </div>

      <div class="col-lg-3 col-6 text-center">
        Lebih Dari<span data-toggle="counter-up">800</span>
        <p>Anggota Perpustakaan</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        Lebih Dari<span data-toggle="counter-up">1,364</span>
        <p>Buku di Perpustakaan</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
      </div>

    </div>

  </div>
</section><!-- #facts -->

<!--==========================
      Portfolio Section
    ============================-->
<section id="portfolio" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">CONTOH BUKU</h3>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter=".filter-app">PAKET</li>
          <li data-filter=".filter-card">NOVEL</li>
          <li data-filter=".filter-web">TEKNOLOGI</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/app1.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/app1.jpg') ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">PAKET 1</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/web3.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/web3.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">TEKNOLOGI 3</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/app2.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/app2.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">PAKET 2</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/card2.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/card2.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">NOVEL 2</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/web2.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/web2.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">TEKNOLOGI 2</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/app3.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/app3.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">PAKET 3</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/card1.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/card1.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">NOVEL 1</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/card3.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/card3.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">NOVEL 3</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url('assets/img/portfolio/web1.jpg') ?>" class="img-fluid" alt="">
            <a href="<?= base_url('assets/img/portfolio/web1.jpg') ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">TEKNOLOGI 1</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- #portfolio -->

<!--==========================

    ============================-->
<section id="testimonials" class="section-bg wow fadeInUp">
  <div class="container">

    <header class="section-header">
      <h3>Pesan</h3>
    </header>

    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-item">
        <img src="<?= base_url('assets/img/testimonial-1.jpg') ?>" class="testimonial-img" alt="">
        <h3>Is Indayati, S.Pd. MM</h3>
        <h4>Kepala Sekolah SMPN 4 Lumajang</h4>
        <p>
          <img src="<?= base_url('assets/img/quote-sign-left.png') ?>" class="quote-sign-left" alt="">
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
          <img src="<?= base_url('assets/img/quote-sign-right.png') ?>" class="quote-sign-right" alt="">
        </p>
      </div>

      <div class="testimonial-item">
        <img src="<?= base_url('assets/img/testimonial-2.jpg') ?>" class="testimonial-img" alt="">
        <h3>Sara Wilsson</h3>
        <h4>Designer</h4>
        <p>
          <img src="<?= base_url('assets/img/quote-sign-left.png') ?>" class="quote-sign-left" alt="">
          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
          <img src="<?= base_url('assets/img/quote-sign-right.png') ?>" class="quote-sign-right" alt="">
        </p>
      </div>

      <div class="testimonial-item">
        <img src="<?= base_url('assets/img/testimonial-3.jpg') ?>" class="testimonial-img" alt="">
        <h3>Jena Karlis</h3>
        <h4>Store Owner</h4>
        <p>
          <img src="<?= base_url('assets/img/quote-sign-left.png') ?>" class="quote-sign-left" alt="">
          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
          <img src="<?= base_url('assets/img/quote-sign-right.png') ?>" class="quote-sign-right" alt="">
        </p>
      </div>

      <div class="testimonial-item">
        <img src="<?= base_url('assets/img/testimonial-4.jpg') ?>" class="testimonial-img" alt="">
        <h3>Matt Brandon</h3>
        <h4>Freelancer</h4>
        <p>
          <img src="<?= base_url('assets/img/quote-sign-left.png') ?>" class="quote-sign-left" alt="">
          Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
          <img src="<?= base_url('assets/img/quote-sign-right.png') ?>" class="quote-sign-right" alt="">
        </p>
      </div>

      <div class="testimonial-item">
        <img src="<?= base_url('assets/img/testimonial-5.jpg') ?>" class="testimonial-img" alt="">
        <h3>John Larson</h3>
        <h4>Entrepreneur</h4>
        <p>
          <img src="<?= base_url('assets/img/quote-sign-left.png') ?>" class="quote-sign-left" alt="">
          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
          <img src="<?= base_url('assets/img/quote-sign-right.png') ?>" class="quote-sign-right" alt="">
        </p>
      </div>

    </div>

  </div>
</section><!-- #testimonials -->

<!--==========================
      Contact Section
    ============================-->
<section id="contact" class="section-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h3>Contact Us</h3>
      <p>Informasi dan Layanan</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <a href="http://bit.ly/LokSMP4">
            <address>jl. Kolonel Suwignyo 45, Lumajang 67311</address>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
          <p><a href="tel:0334 881087">0334 881087</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:smpn_4lmj@yahoo.co.id">smpn_4lmj@yahoo.co.id</a></p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #contact -->