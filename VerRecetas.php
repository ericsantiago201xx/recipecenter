<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>RecipeCenter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<?php include("header.php"); ?>
<body>

<!-- Navbar con botón para abrir sidebar -->
<nav class="navbar navbar-dark bg-dark shadow">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold" href="pagina_principal.php">ReciPeCEnter</a>
    

      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
        <div class="menu-btn">
          <i class="fas fa-bars fa-2x"></i>
        </div>
      </button>
    
  </div>
</nav>

<!-- Sidebar (Offcanvas) -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menú</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="SubirRecetas/SubirRecetas/index.php">Subir Recetas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="">Historial de Recetas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="registro.php">Registro</a>
      </li>
    </ul>
  </div>
</div>

    <div class="video-search">
        <div class="mb-3">
            <label for="video" class="form-label"></label>
            <input type="video/mp4" class="form-control" id="video" placeholder="Buscar" name="video" required>
        </div>

        <button class="search">
            <i class="fa-brands fa-searchengin"></i>
        </button>
    </div>

<?php include("SubirRecetas/SubirRecetas/RecetasSubidas.php"); ?>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 RecipeCenter - Comparte, disfruta y cocina.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  
  
  
  
