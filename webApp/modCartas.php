<?php session_start(); ?>
<?php require_once('../php_partials/navbar.php'); 
// necesito una funcion que me de la info de la carta a la uqe le has dado click en el boton de modificar usando la id de la carta

?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M07Coleccion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>

<body style="  background-image: url('../media/carta/fondo.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-position: center center; 
    overflow: hidden;">
    <div class="container">
        <?php require_once('../php_partials/mensajes.php'); ?>

        <div class="card mt-2 border-dark">
            <div class="card-header bg-dark text-white"style="background-image: url('../media/carta/addfondo.png');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-position: center center; 
    overflow: hidden;">
                MOD PKM
            </div>
            <div class="card-body">
                <form action="../php_controllers/pokemonController.php" method="POST" enctype="multipart/form-data">


                <div class="form-group row">
                        <label for="idPoke" class="col-sm-2 col-form-label">ID Pokemon</label>
                        <div class="col-sm-10">
                            <input type="text" name="idPoke" id="idPoke" class="form-control readonly-field" readonly
                                placeholder=""  value="<?php echo $_POST['idPoke']?>">
                        </div>
                    </div>












                    <div class="form-group row">
                        <label for="newPokedex" class="col-sm-2 col-form-label">Numero Pokedex</label>
                        <div class="col-sm-10">
                            <input type="text" name="newPokedex" id="newPokedex" class="form-control"
                                placeholder="Numero de la pokedex"  value="<?php echo $_POST['numPokedex']?>"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newnombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="newnombre" id="newnombre" class="form-control"
                                placeholder="Nombre del Pokemon"  value="<?php echo $_POST['nombrePokemon']?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="newidRegion" class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="newidRegion"autofocus required>
                                <option value="" disabled selected>Elige la region...</option>
                                <option value="1">Kanto</option>
                                <option value="2">Johto</option>
                                <option value="3">Hoenn</option>
                                <option value="4">Sinnoh</option>
                                <option value="5">Teselia</option>
                                <option value="6">Kalos</option>
                                <option value="7">Alola</option>
                                <option value="8">Galar</option>
                                <option value="9">Paldea</option>
                                
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
    <div>
    <label for="">Tipos</label>
    <br>
    <input type="checkbox" class="btn-check" id="Acero" autocomplete="off" name="tipos_seleccionados[]" value="1">
    <label class="btn btn-primary" for="Acero">Acero</label>

    <input type="checkbox" class="btn-check" id="Agua" autocomplete="off" name="tipos_seleccionados[]" value="2">
    <label class="btn btn-primary" for="Agua">Agua</label>

    <input type="checkbox" class="btn-check" id="Bicho" autocomplete="off" name="tipos_seleccionados[]" value="3">
    <label class="btn btn-primary" for="Bicho">Bicho</label>

    <input type="checkbox" class="btn-check" id="Dragón" autocomplete="off" name="tipos_seleccionados[]" value="4">
    <label class="btn btn-primary" for="Dragón">Dragón</label>

    <input type="checkbox" class="btn-check" id="Electrico" autocomplete="off" name="tipos_seleccionados[]" value="5">
    <label class="btn btn-primary" for="Electrico">Electrico</label>

    <input type="checkbox" class="btn-check" id="Fantasma" autocomplete="off" name="tipos_seleccionados[]" value="6">
    <label class="btn btn-primary" for="Fantasma">Fantasma</label>

    <input type="checkbox" class="btn-check" id="Fuego" autocomplete="off" name="tipos_seleccionados[]" value="7">
    <label class="btn btn-primary" for="Fuego">Fuego</label>

    <input type="checkbox" class="btn-check" id="Hada" autocomplete="off" name="tipos_seleccionados[]" value="8">
    <label class="btn btn-primary" for="Hada">Hada</label>


    <input type="checkbox" class="btn-check" id="Hielo" autocomplete="off" name="tipos_seleccionados[]" value="9">
    <label class="btn btn-primary" for="Hielo">Hielo</label>

    <input type="checkbox" class="btn-check" id="Lucha" autocomplete="off" name="tipos_seleccionados[]" value="10">
    <label class="btn btn-primary" for="Lucha">Lucha</label>

    <input type="checkbox" class="btn-check" id="Normal" autocomplete="off" name="tipos_seleccionados[]" value="11" >
    <label class="btn btn-primary" for="Normal">Normal</label>

    <input type="checkbox" class="btn-check" id="Planta" autocomplete="off" name="tipos_seleccionados[]" value="12">
    <label class="btn btn-primary" for="Planta">Planta</label>

    <input type="checkbox" class="btn-check" id="Psiquico" autocomplete="off" name="tipos_seleccionados[]" value="13">
    <label class="btn btn-primary" for="Psiquico">Psiquico</label>

    <input type="checkbox" class="btn-check" id="Roca" autocomplete="off" name="tipos_seleccionados[]" value="14">
    <label class="btn btn-primary" for="Roca">Roca</label>

    <input type="checkbox" class="btn-check" id="Siniestro" autocomplete="off" name="tipos_seleccionados[]" value="15">
    <label class="btn btn-primary" for="Siniestro">Siniestro</label>

    <input type="checkbox" class="btn-check" id="Tierra" autocomplete="off" name="tipos_seleccionados[]" value="16">
    <label class="btn btn-primary" for="Tierra">Tierra</label>

    <input type="checkbox" class="btn-check" id="Veneno" autocomplete="off" name="tipos_seleccionados[]" value="17">
    <label class="btn btn-primary" for="Veneno">Veneno</label>
    

    <input type="checkbox" class="btn-check" id="Volador" autocomplete="off" name="tipos_seleccionados[]" value="18">
    <label class="btn btn-primary" for="Volador">Volador</label>


    </div>
</div>



























                    <!-- <div class="form-group row">
                        <label for="newidTipo" class="col-sm-2 col-form-label">Tipo 1</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="newidTipo" required>
                                <option value="" disabled selected>Elige el Tipo 1...</option>
                                <option value="1">Acero</option>
                                <option value="2">Agua</option>
                                <option value="3">Bicho</option>
                                <option value="4">Dragón</option>
                                <option value="5">Electrico</option>
                                <option value="6">Fantasma</option>
                                <option value="7">Fuego</option>
                                <option value="8">Hada</option>
                                <option value="9">Hielo</option>
                                <option value="10">Lucha</option>
                                <option value="11">Normal</option>
                                <option value="12">Planta</option>
                                <option value="13">Psiquico</option>
                                <option value="14">Roca</option>
                                <option value="15">Siniestro</option>
                                <option value="16">Tierra</option>
                                <option value="17">Veneno</option>
                                <option value="18">Volador</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newidTipo2" class="col-sm-2 col-form-label ">Tipo 2</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="newidTipo2">
                                <option value="" disabled selected>Elige el Tipo 2...</option>
                                <option value="1">Acero</option>
                                <option value="2">Agua</option>
                                <option value="3">Bicho</option>
                                <option value="4">Dragón</option>
                                <option value="5">Electrico</option>
                                <option value="6">Fantasma</option>
                                <option value="7">Fuego</option>
                                <option value="8">Hada</option>
                                <option value="9">Hielo</option>
                                <option value="10">Lucha</option>
                                <option value="11">Normal</option>
                                <option value="12">Planta</option>
                                <option value="13">Psiquico</option>
                                <option value="14">Roca</option>
                                <option value="15">Siniestro</option>
                                <option value="16">Tierra</option>
                                <option value="17">Veneno</option>
                                <option value="18">Volador</option>
                                
                            </select>
                        </div>
                    </div> -->
                    
                    <div class="form-group row">
                        <label for="newdescripcion" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <input type="text "name="newdescripcion" id="newdescripcion" class="form-control "
                                placeholder="Descripcion pokemon" autofocus value="<?php echo $_POST['descripcion']?>"required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="newcoleccion" class="col-sm-2 col-form-label">Coleccion</label>
                        <div class="col-sm-10">
                            <input type="text" name="newcoleccion" id="newcoleccion" class="form-control"
                                placeholder="Introduce la coleccion a la que pertenece..." autofocus value="<?php echo $_POST['coleccion']?>"required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="newlink" class="col-sm-2 col-form-label">Enlace oficial</label>
                        <div class="col-sm-10">
                            <input type="text" name="newlink" id="newlink" class="form-control"
                                placeholder="Introduce el enlace de la tienda." autofocus value="<?php echo $_POST['link']?>"required>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="newimagenPoke" class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <input type="file" name="newimagenPoke" id="newimagenPoke" class="form-control-file" placeholder="Imagen aqui" autofocus>
                        </div>
                    </div>
                    <br>
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-light" name="update">ACEPTAR</button>
                            <a href="./index.php" class="btn btn-danger">Cancelar</a>
                        </
