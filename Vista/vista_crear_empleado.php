<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <?php include_once('Includes/header.php');
          include_once('../Controlador/controlador_empleador.php');
    ?>
</head>
<body>
    <div class="container mt-5">
      <a href="../Controlador/destruir_session.php?id=empleado"><button type="button" class="btn btn-danger">Regresar</button></a>
        <?php
          session_start();
          if(isset($_SESSION['mensaje']) && isset($_GET['exit'])){
        ?>
          <div class="alert alert-<?php echo $_SESSION['estado'] ?>" role="alert">
            <strong><?php echo $_SESSION['mensaje'] ?></strong>
          </div>
          <?php } ?>          
        <header>
            <h1>Crea Un Empleado</h1>
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
                  <label for="telefono"></label>
                  <input type="text" name="telefono" id="telefono" class="form-control" placeholder="telefono o celular" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Numero Telefonico</small>
                </div>
                <div class="form-group">
                  <label for="contrato">Tipo Contrato</label>
                  <select class="form-control" name="contrato" id="contrato">
                    <option value="termino indefinido">Termino Indefinido</option>
                    <option value="termino definido">Termino Definido</option>
                    <option value="termino parcial">Termino Parcial</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="empleador">Empleador</label>
                  <select class="form-control" name="empleador" id="empleador">
                    <?php foreach($lista_empleadores as $empelador){ ?>
                    <option value="<?php echo $empelador['id']; ?>"><?php echo $empelador['nombre']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <br>
                <input type="submit" name="crear_empleado" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
    
<?php include('Includes/footer.php')?>
</body>
</html>