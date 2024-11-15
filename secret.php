<?php require_once('.\assets\layout\header.php');?>
<?php require_once('.\assets\layout\nav.php');?>


<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

<div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

  <!-- Slide 1 -->
  <div class="carousel-item active">
    <div class="carousel-container">
      <h2 class="animate__animated animate__fadeInDown">In diesem Kurs ist mir klargeworden,...</span></h2>
    </div>
  </div>



  <!-- Slide 2 -->
  <div class="carousel-item">
    <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInUp">...von Websiten sein kann. </h2>
      <h2 class="animate__animated animate__fadeInDown">Vielen Dank Ali!!!</h2>
      <a href="about.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Weitere Informationen</a>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-item">
    <div class="carousel-container">
      <h2 class="animate__animated animate__fadeInDown">...wie einfach das Erstellen...</h2>

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

<?php require_once('.\assets\layout\\footer.php');?>