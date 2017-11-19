<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach ($carrusel as $indice => $item):?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $indice; ?>" class="<?php if ($indice === 0) echo 'active'; ?>"></li>
    <?php endforeach; ?>
  </ol>
  <div class="carousel-inner">

    <?php foreach ($carrusel as $indice => $item):?>
    <div class="carousel-item <?php if ($indice === 0) echo 'active'; ?>">
      <a href="/front/detalles.php">
          <img class="d-block w-100" src="<?php echo $item[0]?>" alt="First slide">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h3><?php echo $item[1]?></h3>
        <p><?php echo $item[2]?></p>
      </div>
    </div>
  <?php endforeach ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>