  <!-- Head -->
  <?php
  include "head.php";
  ?>

  <!-- Header -->
  <?php
  include "header.php";
  ?>

  <div class="textoinicial">
    Texto Inicial
  </div>
  <!-- Nav -->
  <div class="nav">
    Nav
    <div class="bs-example">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="#" alt="1° Slide">
          </div>
          <div class="item">
            <img src="#" alt="2º Slide">
          </div>
          <div class="item">
            <img src="#" alt="3º Slide">
          </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
  </div>

  <!-- article -->
  <div class="article">
    Article
  </div>

<!-- Footer -->
  <?php
    include  "footer.php";
  ?>