<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- título de página -->
    <title>Menú Hugo</title>
    <!-- ícono de pàgina -->
    <!-- fuentes -->
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<?php
/* lectura del documento xml */
if (file_exists('xml/menu.xml')) {
    $menu = simplexml_load_file('xml/menu.xml');
} else {
    exit('Error abriendo menu.xml.');
}
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- items del menú de navegación-->
                <?php
                $aux=[];
                foreach($menu->platos as $platos){
                    if(!in_array((string)$platos['comida'],$aux)){
                        echo '<li class="nav-item">';
                        if (isset($_GET['comida']) && $_GET['comida']==(string)$platos['comida']) {
                          echo '<a class="nav-link active" aria-current="page" href="?comida='.$platos['comida'].'">'.$platos['comida'].'</a>';
                        } else {
                          echo '<a class="nav-link" aria-current="page" href="?comida='.$platos['comida'].'">'.$platos['comida'].'</a>';
                        }
                        echo '</li>';
                        array_push($aux,(string)$platos['comida']);
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- carrousel -->
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
<!-- tabla de datos -->
<!--<div class="row-c">
    <div class="column-1">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Platos</th>
                    <th id='desc'scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Calorias</th>
                    <th scope="col">Características</th>
                </tr>
            </thead>
            <tbody> -->
            <?php
            if(isset($_GET['comida'])){
                /* filtro por comida */
                foreach($menu->platos as $platos) {
                    if($_GET['comida']==$platos['comida']) {
                        echo '<tr>';
                        echo '<td>'.$platos['comida'].'</td>';
                        echo '<td>'.$platos->nombre.'</td>';
                        echo '<td id="desc">'.$platos->description.'</td>';
                        echo '<td>'.$platos->precio.'</td>';
                        echo '<td>'.$platos->calorias.'</td>';
                        echo '<td>'.$platos->caracteristicas->item.'</td>';
                        echo '</tr>';
                    }
                }
            }else {
                /* no filtro (muestro todos los datos) */
                /*Fitro por tapas*/
                echo "<h2> TAPAS </h2>";
                foreach($menu->platos as $platos){
                    if ($platos['comida']=="Tapas"){
                        echo '<td>'.$platos->nombre.'</td>';
                    echo '<td id="desc">'.$platos->description.'</td>';
                    echo '<td>'.$platos->precio.'</td>';
                    echo '<td>'.$platos->calorias.'</td>';
                    }
                    foreach($menu->platos->caracteristicas->item as $item) {
                        echo '<td>'.$platos->caracteristicas->item[0].'</td>';
                        echo '<td>'.$platos->caracteristicas->item[1].'</td>';
                    }
                }
            }
                    /* echo '<tr>';
                    echo '<td>'.$platos['comida'].'</td>';
                    echo '<td>'.$platos->nombre.'</td>';
                    echo '<td id="desc">'.$platos->description.'</td>';
                    echo '<td>'.$platos->precio.'</td>';
                    echo '<td>'.$platos->calorias.'</td>';
                    foreach($menu->platos->caracteristicas->item as $item) {
                        echo '<td>'.$platos->caracteristicas->item[0].'</td>';
                        echo '<td>'.$platos->caracteristicas->item[1].'</td>';
                    }
                    echo '</tr>';
                }
            } 
            */
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>