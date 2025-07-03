<?php
$title = "Bosh sahifa"; // Homepage
require 'includes/header.php';
?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/iphone_15._Projpg.jpg" class="d-block w-100 carousel-img" alt="iPhone 15 Pro Max">
      <div class="container">
        <div class="carousel-caption text-start custom-caption">
          <h1 class="display-4 fw-bold">iPhone 15 Pro Max: Yangi Avlod Texnologiyasi</h1>
          <p class="lead d-none d-md-block">Apple'ning eng so‘nggi flagmani — kuchli A17 Bionic chip, ilg‘or kamera tizimi va Dynamic Island bilan sizning kundalik vazifalaringizni osonlashtiradi.</p>
          <p><a class="btn btn-lg btn-primary custom-btn" href="products.php">Mahsulotni Ko'rish &raquo;</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="./image/iphone_16.jpg" class="d-block w-100 carousel-img" alt="iOS 17 Features">
      <div class="container">
        <div class="carousel-caption custom-caption">
          <h1 class="display-4 fw-bold">iOS 17: Aqlli Va Shaxsiy Imkoniyatlar</h1>
          <p class="lead d-none d-md-block">Kontakt posterlari, Live Voicemail va NameDrop kabi innovatsion funksiyalar bilan smartfoningizni yanada aqlli qiling.</p>
          <p><a class="btn btn-lg btn-primary custom-btn" href="ios17-features.php">Qo‘shimcha Ma’lumot &raquo;</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="./image/iphone_13_pro.jpg" class="d-block w-100 carousel-img" alt="iPhone Camera Capabilities">
      <div class="container">
        <div class="carousel-caption text-end custom-caption">
          <h1 class="display-4 fw-bold">iPhone Kamerasi: Har Lahzani Mukammal Muhrlang</h1>
          <p class="lead d-none d-md-block">Keng burchakli va telefoto linzalar, ProRAW va Cinematic rejimi bilan professional darajadagi suratga olish imkoniyati.</p>
          <p><a class="btn btn-lg btn-primary custom-btn" href="gallery.php">Galereyani Ko‘rish &raquo;</a></p>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container marketing py-5">

  <div class="row text-center mb-5">
    <div class="col-lg-4 mb-4">
      <div class="icon-circle mb-3">
        <i class="fas fa-shipping-fast fa-3x"></i>
      </div>
      <h2 class="fw-normal">Tez Yetkazib Berish</h2>
      <p>O'zbekiston bo'ylab eng tez va ishonchli yetkazib berish xizmati. Buyurtmangizni o'z vaqtida qabul qiling!</p>
      <p><a class="btn btn-outline-secondary" href="#">Batafsil &raquo;</a></p>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="icon-circle mb-3">
        <i class="fas fa-headset fa-3x"></i>
      </div>
      <h2 class="fw-normal">24/7 Qo'llab-Quvvatlash</h2>
      <p>Mijozlarimizga doimiy yordam ko'rsatishga tayyormiz. Savollaringizga istalgan vaqtda javob oling.</p>
      <p><a class="btn btn-outline-secondary" href="#">Bog'lanish &raquo;</a></p>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="icon-circle mb-3">
        <i class="fas fa-shield-alt fa-3x"></i>
      </div>
      <h2 class="fw-normal">Ishonchli Kafolat</h2>
      <p>Sotib olgan mahsulotlaringiz uchun to'liq kafolat beramiz. Sifati va xavfsizligiga ishonch hosil qiling.</p>
      <p><a class="btn btn-outline-secondary" href="#">Kafolat haqida &raquo;</a></p>
    </div>
  </div>
  <hr class="featurette-divider">

  <div class="container my-5">
    <!-- Featurette 1 -->
    <div class="row featurette align-items-center mb-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">Yangiliklarni Birinchi Bo'lib Bilish Imkoniyati. <span class="text-muted">Eng so'nggi ma'lumotlar.</span></h2>
        <p class="lead">Mahsulotlarimizdagi eng so'nggi yangiliklar, texnologik yutuqlar va eksklyuziv takliflar haqida birinchi bo'lib xabar toping.</p>
        <a class="btn btn-info" href="#">Obuna Bo'lish</a>
      </div>
      <div class="col-md-5">
        <video class="img-fluid rounded shadow-lg" autoplay muted loop playsinline>
          <source src="https://www.apple.com/105/media/ww/iphone/family/2024/cf19f185-dd7e-4350-97ff-e44860713b54/anim/welcome/xlarge.mp4" type="video/mp4">
          Sizning brauzeringiz video formatini qo‘llab-quvvatlamaydi.
        </video>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- Featurette 2 -->
    <div class="row featurette align-items-center mb-5">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Bizning Mijozlarimiz Nima Deyishadi? <span class="text-muted">Sharhlarni O'qing.</span></h2>
        <p class="lead">Mijozlarimizning mahsulotlarimiz va xizmatlarimiz haqidagi fikrlari biz uchun muhim. Ularning tajribalari bilan tanishing.</p>
        <a class="btn btn-info" href="#">Sharhlarni Ko'rish</a>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- YouTube links can't be used in <video>; use image or thumbnail instead -->
        <img src="./image/customer-reviews.jpg" class="img-fluid rounded shadow-lg" alt="Mijozlar sharhlari">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- Featurette 3 -->
    <div class="row featurette align-items-center mb-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">Mahsulotlarimizni Keshf Qiling. <span class="text-muted">To'liq Katalog.</span></h2>
        <p class="lead">Bizning keng assortimentimizdagi barcha mahsulotlar bilan tanishing. Sizga mos keladiganini toping!</p>
        <a class="btn btn-info" href="#">Katalogga O'tish</a>
      </div>
      <div class="col-md-5">
        <img src="./image/featurette.jpg" class="img-fluid rounded shadow-lg" alt="Product Catalog">
      </div>
    </div>
  </div>
  <hr class="featurette-divider">
</div>

<?php require 'includes/footer.php'; ?>