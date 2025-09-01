<?php include("header.php");?>

<!-- FORMULARIO -->

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header text-center bg-primary text-white">
            <h3>Iniciar Sesión</h3>
          </div>
          <div class="card-body">

        <form action="dbsesion_usu.php" method="POST">
           
           
           <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="email" placeholder="@correo.com" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="contraseña" required>
              </div>

              <div class="d-grid">
                <button type="submit" name="sesion_usuario" class="btn btn-primary">Registrarse</button>
              </div>
        </form>