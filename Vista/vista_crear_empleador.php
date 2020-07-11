<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleador</title>
    <?php include('Includes/header.php')?>
</head>
<body>
    <div class="container mt-5">
      <a href="../Controlador/destruir_session.php?id=empleador"><button type="button" class="btn btn-danger">Regresar</button></a>
        <?php
          session_start();
          if(isset($_SESSION['mensaje']) && isset($_GET['exit'])){
        ?>
          <div class="alert alert-<?php echo $_SESSION['estado'] ?>" role="alert">
            <strong><?php echo $_SESSION['mensaje'] ?></strong>
          </div>
          <?php } ?>          
        <header>
            <h1>Crea Un Empleador</h1>
        </header>
        <div>
            <form action="../Controlador/controlador_crear.php" method="POST">
                <div class="form-group">
                  <label for="nombre"></label>
                  <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="nombre completo" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Introduce tu nombre completo</small>
                </div>
                <div class="form-group">
                  <label for="sexo"></label>
                  <input type="radio" name="sexo" id="sexo1" value="masculino" placeholder="" aria-describedby="helpId"> Masculino
                  <input type="radio" name="sexo" id="sexo2" value="femenino" placeholder="" aria-describedby="helpId"> Femenino
                  <br>
                  <small id="helpId" class="text-muted">Introduce tipo de genero</small>
                </div>
                <div class="form-group">
                  <label for="cedula"></label>
                  <input type="text" name="cedula" id="cedula" class="form-control" placeholder="CC" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Cedula de ciudadania</small>
                </div>
                <div class="form-group">
                  <label for="direccion"></label>
                  <input type="text" name="direccion" id="direccion" class="form-control" placeholder="direccion" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Lugar de Residencia</small>
                </div>
                <div class="form-group">
                  <label for="fecha"></label>
                  <input type="date" name="fecha" id="fecha" class="form-control" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Fecha de Nacimiento</small>
                </div>
                <br>
                <input type="submit" name="crear_empleador" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
    
<?php include('Includes/footer.php')?>
</body>
</html>