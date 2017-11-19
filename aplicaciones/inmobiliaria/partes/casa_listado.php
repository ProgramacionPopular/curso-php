<!--
<h4><?php echo $titulo; ?></h4>
<p><?php echo $contenido; ?></p>
-->
<div class="card">
  <img class="card-img-top" src="<?php echo $foto ?>" alt="Foto de <?php echo $titulo; ?>">
  <div class="card-body">
    <h4 class="card-title"><?php echo $titulo ?></h4>
    <p class="card-text text-truncate"><?php echo $contenido ?></p>
    <a href="#" class="btn btn-primary">ver detalles</a>
  </div>
</div>