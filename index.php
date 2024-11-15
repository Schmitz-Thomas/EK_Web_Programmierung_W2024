<?php require_once('.\assets\layout\header.php');?>
<?php require_once('.\assets\layout\nav.php');?>

    
           <!-- Hero Section -->
           <section id="hero" class="hero section dark-background">

<div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

  <!-- Slide 1 -->
  <div class="carousel-item active">
    <div class="carousel-container">
      <h2 class="animate__animated animate__fadeInDown">Willkommen auf meiner <span>persönlichen Website!!!</span></h2>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="carousel-item">
    <div class="carousel-container">
      <h2 class="animate__animated animate__fadeInDown">Name: Thomas Schmitz</h2>
      <p class="animate__animated animate__fadeInUp">Ort: Oberhausen</p>
      <a href="about.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Weitere Informationen</a>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-item">
    <div class="carousel-container">
      <h2 class="animate__animated animate__fadeInDown">Kurs: Web-Programmierung von Ali Khorsandfard</h2>
      <p class="animate__animated animate__fadeInUp">Informatiker Winter 2024</p>
    </div>
  </div>

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3"></use>
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0"></use>
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9"></use>
  </g>
</svg>

</section><!-- /Hero Section -->

 <!-- About Section -->
 <section id="about" class="about section">


  <!-- Contact Section -->
  <section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>"Kontaktieren Sie mich!"</h2>
  <!-- <p>Ich freue mich auf deine Nachricht!</p> -->
</div><!-- End Section Title -->

<div class="container" data-aos="fade" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Address</h3>
          <p>Oberhausen</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Telefon</h3>
          <p>0123456789</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>E-Mail </h3>
          <p>schmitz-thomas@hotmail.de</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="col-lg-8">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Dein Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Deine E-Mail" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Betreff" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Nachricht" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Deine Nachricht wurde versendet. Danke dir!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->  






<?php require_once('.\assets\layout\\footer.php');?>