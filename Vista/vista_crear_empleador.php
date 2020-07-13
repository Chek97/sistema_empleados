<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleador</title>
    <?php include('Includes/header.php')?>
</head>
<body>
    <div class="container contenedor">
      <a href="../Controlador/destruir_session.php?id=empleador"><button type="button" class="btn btn-danger boton-accesso"><i class="fa fa-arrow-left"></i> Regresar</button></a>
        <?php
          session_start();
          if(isset($_SESSION['mensaje'])){
        ?>
          <div class="alert alert-<?php echo $_SESSION['estado'] ?> mt-4 alert-dismissible fade show" style="text-align: center;" role="alert">
            <strong><?php echo $_SESSION['mensaje'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php } ?>   

        <header class="titulo">
            <h1 class="texto-titulo">Crea Un Empleador</h1>
        </header>
        <div class="formulario-agregar">
            <form action="../Controlador/controlador_crear.php" method="POST">
                <div class="form-group">
                  <label for="nombre" class="texto-campo">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="nombre completo" aria-describedby="helpId">
                  
                </div>
                <div class="form-group">
                  <label for="sexo" class="texto-campo">Genero</label>
                  <br>
                  <input type="radio" checked="true" name="sexo" id="sexo1" value="masculino" placeholder="" aria-describedby="helpId"> masculino
                  <input type="radio" name="sexo" id="sexo2" value="femenino" placeholder="" aria-describedby="helpId"> femenino
                  
                </div>
                <div class="form-group">
                  <label for="cedula" class="texto-campo">Cedula</label>
                  <input type="text" required name="cedula" id="cedula" class="form-control" placeholder="C.C." aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="direccion" class="texto-campo">Direccion</label>
                  <input type="text" required name="direccion" id="direccion" class="form-control" placeholder="Direccion" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="fecha" class="texto-campo">Fecha De Nacimiento</label>
                  <input type="date" required name="fecha" id="fecha" class="form-control" aria-describedby="helpId">
                </div>
                <br>
                <button type="submit" name="crear_empleador" class="btn btn-primary boton-accesso btn-block"><i class="fa fa-save"></i> Guardar</button>
            </form>
        </div>
    </div>
    
<?php include('Includes/footer.php')?>
</body>
</html>