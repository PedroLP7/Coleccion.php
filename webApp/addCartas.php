<?php require_once "../php_librarys/bdpokemon.php"; ?>
<?php require_once('../php_partials/navbar.php');
$regiones = getRegiones();
$tipos = getTipos();

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M07Coleccion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="body2"style="  background-image: url('../media/carta/fondo.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-position: center center; 
    overflow: hidden;" >
    <div class="container">
        <?php require_once('../php_partials/mensajes.php');
        
        if(isset($_SESSION['pokemon1'])){
            $pokemon1 = $_SESSION['pokemon1'];
            unset($_SESSION['pokemon1']);

        }else{


            

            $pokemon1=[
                'numPokedex'    => '',
                     'nombrePoke'=> '',
                
                'descripcion'=> '',
                


            ];


        }
    
        
        
        
        
        ?>

        <div class="card mt-2 border-danger">
            <div class="card-header bg-danger text-dark font-weight-bold"style="background-image: url('../media/carta/addfondo.png');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-position: center center; 
    overflow: hidden;">
                ADD PKM
            </div>
            <div class="card-body ">
                <form action="../php_controllers/pokemonController.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="numPokedex" class="col-sm-2 col-form-label">Numero Pokedex</label>
                        <div class="col-sm-10">
                            <input type="text" name="numPokedex" id="numPokedex" class="form-control"
                                placeholder="Numero de la pokedex" autofocus value="<?php echo $pokemon1['numPokedex'] ?>"required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombrePoke" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombrePoke" id="nombrePoke" class="form-control"
                                placeholder="Nombre del Pokemon" autofocus value="<?php echo $pokemon1['nombrePoke'] ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
    <label for="idRegion" class="col-sm-2 col-form-label">Region</label>
    <div class="col-sm-10">
        <select class="form-control" name="idRegion" required>
            
            <?php  
            $defaultOption = "Elige una región";  // Define la frase predeterminada

            echo '<option value="" selected>' . $defaultOption . '</option>'; 
             foreach ($regiones as $region) {
                $regionId = $region["IDregion"];
                $regionNombre = $region["nombreRegion"];
                

                echo '<option value="' . $regionId . '"';
                
                echo ">" . $regionNombre . "</option>";
            } ?>
        </select>
    </div>
</div>

<div class="form-group row">
    <div>
        <label for="">Tipos</label>
        <br>
        <?php foreach ($tipos as $tipo) {
            $tipoId = $tipo["idTipo"];
            $tipoNombre = $tipo["nombreTipo"];
            
            

            echo '<input type="checkbox" class="btn-check" id="' .
                $tipoNombre .
                '" autocomplete="off" name="tipos_seleccionados[]" value="' .
                $tipoId .
                '"';
          

            echo ">";
            echo '<label class="btn btn-primary" for="' .
                $tipoNombre .
                '">' .
                $tipoNombre .
                "</label>";
        } ?>
    </div>
</div>




                   
                    
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <input type="text "name="descripcion" id="descripcion" class="form-control "
                                placeholder="Descripcion pokemon" autofocus value="<?php echo $pokemon1['descripcion'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coleccion" class="col-sm-2 col-form-label">Coleccion</label>
                        <div class="col-sm-10">
                            <input type="text" name="coleccion" id="coleccion" class="form-control"
                                placeholder="Introduce la coleccion a la que pertenece..." autofocus value="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Enlace oficial</label>
                        <div class="col-sm-10">
                            <input type="text" name="link" id="link" class="form-control"
                                placeholder="Introduce el enlace de la tienda."  value="" required>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="imagenPoke" class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <input type="file" name="imagenPoke" id="imagenPoke" class="form-control-file" placeholder="Imagen aqui" required>
                        </div>
                    </div>
                    <br>
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-light" name="insert">ACEPTAR</button>
                            <a href="./index.php" class="btn btn-danger">Cancelar</a>
    </div>



   