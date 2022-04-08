<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- título de página -->
    <title>Menú Hugo</title>
    <!-- ícono de pàgina -->
    <link rel="shortcut icon" href="./img/champagne-glasses-solid.svg" type="image/x-icon">
    <!-- fuentes -->
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body id="card-1">

<?php
/* lectura del documento xml */
if (file_exists('xml/menu.xml')) {
    $menu = simplexml_load_file('xml/menu.xml');
} else {
    exit('Error abriendo menu.xml.');
}
?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/restaurante.jpg" class="d-block w-100" alt="restaurante">
    </div>
    <div class="carousel-item">
      <img src="./img/croquetas.jpg" class="d-block w-100" alt="croquetas">
    </div>
    <div class="carousel-item">
      <img src="./img/pizza.jpg" class="d-block w-100" alt="pizza">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<body>

<div class="paddingt">
    <h2 style="text-align:center">Menú Hugo's Restaurant</h2>
</div>

<div class="row-c hugo">
    <div class="padding paddingt">
        <?php
        echo "<h1>Tapas</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Tapas') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item[0].' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        /*foreach($platos->imagen as $imagen) {                 
            echo "<img src=".$imagen." alt=''>";             
        } */
        ?>
    </div>
</div>

<div class="row-c hugo">
    <div class="padding paddingt">
        <?php
        echo "<h1>Pizza</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Pizza') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item.' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        ?>
    </div>
</div>

<div class="row-c hugo">
    <div class="padding paddingt2">
        <?php
        echo "<h1>Carne</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Carne') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item.' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        ?>
    </div>
</div>

<div class="row-c hugo">
    <div class="padding paddingb">
        <?php
        echo "<h1>Pasta</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Pasta') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item.' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        foreach($platos->caracteristicas->imagen as $imagen) {                 
            echo "<img src=".$imagen." alt=''>";             
        }
        ?>
    </div>
</div>

<div class="row-c hugo">
    <div class="padding paddingt2">
        <?php
        echo "<h1>Arroz</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Arroz') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item.' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        ?>
    </div>
</div>

<div class="row-c hugo">
    <div class="padding paddingb">
        <?php
        echo "<h1>Postres</h1>";
        foreach($menu->platos as $platos){
            if ($platos['comida']=='Postre') {
                echo '<span class="titulo">'.$platos->nombre.'</span>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>'.'<span>'.' - '.$platos->caracteristicas->item.' '.$platos->caracteristicas->item[1].'</span>';
                echo '<h5 class="desc">'.$platos->description.'</h5>';
            }
            }
        ?>
    </div>
</div>

<div class="column-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.0117293547114!2d2.106248915385107!3d41.352098779267344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498d9d4476323%3A0xcc90e4c0ad229236!2sSilverados!5e0!3m2!1sca!2ses!4v1649319505384!5m2!1sca!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="footer column-1 paddingf">
    <h1 class="paddingb2">Contactos</h1>
    <p>Instagram - hugoooreestaurante</p>
    <p>Teléfono - 644 54 32 83</p>
    <p>Os esperamos!</p>
</div>

</body>
</html>