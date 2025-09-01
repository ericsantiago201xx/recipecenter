<?php include("header.php");?>

<!-- inicio -->
<body>
<!-- Navbar con botón para abrir sidebar -->
<nav class="navbar navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="pagina_principal.php">ReciPeCEnter</a>
  </div>

  <div class="menu-btn">
      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
          <i class="fas fa-bars"></i>
      </button>
  </div>

  <div class="user">
    <a href="registro.php">
      <i class="fa-solid fa-circle-user fa-2x"></i>
    </a>
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
        <a class="nav-link text-white" href="">Inicio</a>
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


  <!-- Bienvenida -->
  <header class="bg-light text-center py-5">
    <div class="container">
      <h1 class="display-4 fw-bold">Bienvenido a ReciPe-cEnter</h1>
      <p class="lead">Comparte y Descubre tus recetas</p>
    </div>
  </header>

 
   <!-- Carrousel -->
  <div id="recetaCarousel" class="carousel slide container my-5" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="Receta 1">
      </div>
      <div class="carousel-item">
        <img src="img/4.webp" class="d-block w-100" alt="Receta 2">
      </div>
      <div class="carousel-item">
        <img src="img/reciPe-cEnter.png" class="d-block w-100" alt="Receta 3">
      </div>
    </div>
    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#recetaCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#recetaCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 RecipeCenter - Comparte, disfruta y cocina.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>