<?php $cim = "Főoldal"; $sorszam = 1; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3">
  <h1>Lorem Barkácsbolt</h1>
  <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/szerszamok.jpg" class="d-block w-75 m-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Minőségi szerszámok</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/faanyag.jpg" class="d-block w-75 m-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Faanyag választék</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/festek.jpg" class="d-block w-75 m-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Festékek minden árnyalatban</h5>
          <p></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h3 class="py-3">Üdvözöljük barkács üzletünk weboldalán</h3>
</div>

<?php include 'templates/footer.php' ?>