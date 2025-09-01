<?php include("header.php");?>

 <!-- FORMULARIO -->

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header text-center bg-primary text-white">
            <h3>Registro</h3>
          </div>
          <div class="card-body">

            <form action="registrodb.php" method="POST">
              
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escribe tu apellido" required>
              </div>

              <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu Número" required>
              </div>

              <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="email" placeholder="@correo.com" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="contraseña" required>
              </div>

              <div class="mb-3">
                <label for="confirmar" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="confirmar" name="confirmar_contraseña" required>
              </div>

              <div class="d-grid">
                <button type="submit" name="usuario_registro" class="btn btn-primary">Registrarse</button>
              </div>
            </form>
             
        <div class="text-center mt-4">
            <a  class="text-danger" href ="IniciarSesion.php">Iniciar Sesion</a>
        </div>

</body>
</html>

    
