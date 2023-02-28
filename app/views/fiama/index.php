<?php $this->view("fiama/header", $data); ?>

<section class="Home-slider">
  <div id="HomeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#HomeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#HomeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <div class="Home-slider-carousel-item-img" style="background-image: url('<?= ASSETS ?>img/slider/1.jpg')"></div>
        <div class="Home-slider-carousel-item-info">
          <h1 class="Home-slider-carousel-item-info-header">Fresh Flower</h1>
          <h6 class="Home-slider-carousel-item-info-sub-header">Natural & Beautiful Flower Here</h6>
          <div class="Home-slider-carousel-item-info-p-wrapper">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="Home-slider-carousel-item-info-button-wrapper">
            <button class="Home-slider-carousel-item-info-button">Shop Now</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="Home-slider-carousel-item-img" style="background-image: url('<?= ASSETS ?>img/slider/3.jpg')"></div>
        <div class="Home-slider-carousel-item-info">
          <h1 class="Home-slider-carousel-item-info-header">Fresh Flower</h1>
          <h6 class="Home-slider-carousel-item-info-sub-header">Natural & Beautiful Flower Here</h6>
          <div class="Home-slider-carousel-item-info-p-wrapper">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="Home-slider-carousel-item-info-button-wrapper">
            <button class="Home-slider-carousel-item-info-button">Shop Now</button>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev Home-slider-carousel-prev-btn" type="button" data-bs-target="#HomeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next Home-slider-carousel-next-btn" type="button" data-bs-target="#HomeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<section class="Home-feature">

</section>
<section class="Home-banner"></section>
<section class="Home-new-item"></section>
<section class="Home-banner"></section>
<section class="Home-top-products"></section>
<section class="Home-banner"></section>
<section class="Home-brand-logo"></section>

<!-- //SCRIPT -->
<script>
  
</script>
<?php $this->view("fiama/footer", $data); ?>