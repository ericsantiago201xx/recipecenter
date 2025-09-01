<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>ReciPeCEnter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') no-repeat center center fixed;
      background-size: cover;
    }

    .user{
      color: #74C0FC;
      padding-right: 2pc;
      position: relative;
      top: -1.5pc;
    }

    .video-container{
      max-width: 1000px;
      margin: 0 auto;
      padding: 10px;
      background-color: #fff;
      box-shadow: 0 4px 8px rbga(0, 0, 0, 0.1);
      border-radius: 10px;
      text-align: center;
    }

    .video-container video {
      width: 100%;
      height: 500px;
      border-radius: 10px;
      border: 4px solid #00aaff;
      margin-top: 2pc;
    }

    .video-search{
      border radius: 4px solid;
      width: 60pc;
      position: relative;
      top: -4.5pc;
      padding-left: 20pc;
      
    }

    .search{
      position: relative;
      top:-3pc;
      position: relative;
      right: -37pc;
    }


    .video-actions {
      display: flex;
      justify-content: space-around;
      padding: 10px;
      background: #f8f9fa;
    }

    .video-actions button {
      border-radius: 30px;
    }

    .comment-box {
      padding: 10px;
      border-top: 1px solid #ddd;
      background: #fdfdfd;
    }


    .nav-menu ul.navbar-nav.ms-auto{
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      background: #2f3640;
    }
   
   .nav-title{
    width: 20px;
    padding-left: 5pc;
    position: relative;
    top: 1pc;
   }

   .menu-btn{
    position: relative;
    top: -1pc;
   }

   .Carrousel-config{
    padding-left: 8pc;
   }

  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>

<body>
<!-- Navbar con botón para abrir sidebar -->
  
    <nav class="navbar navbar-dark bg-dark shadow">
      <div class="container-fluid">
        <div class="nav-title">
          <a class="navbar-brand fw-bold" href="pagina_principal.php">ReciPeCEnter</a>
        </div>
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
        <a class="nav-link text-white" href="carta.php">Carta</a>
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
      <p class="lead">Elige Tu plato favorito</p>
    </div>
  </header>

 
   <!-- Carrousel -->
<div class="Carrousel-config">
  <div id="recetaCarousel" class="carousel slide container my-5" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
      <div class="carousel-item active">
        <img src="img/BandejaPaisa.jpg" class="d-block w-60" alt="Receta 1">
      </div>
      <div class="carousel-item">
        <img src="img/ArepaRellena.jpg" class="d-block w-60" alt="Receta 2">
      </div>
      <div class="carousel-item">
        <img src="img/Sancocho.jpg" class="d-block w-60" alt="Receta 3">
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
</div>


  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 RecipeCenter - Comparte, disfruta y cocina.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>