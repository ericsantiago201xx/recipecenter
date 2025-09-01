<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante Carta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
  <style>
    body{
      height: 100%;
      margin: 0;
      scroll-snap-type: y mandatory;
      overflow-y: scroll;

      /* Fondo de la página */
      background-image: url("https://picsum.photos/1200/800?blur");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-color: gray;
    }

    .btn-class{
        width: 100%;
        padding-left: 37pc;
    }



    .short {
      height: 100vh;
      scroll-snap-align: start;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .short img {
      max-height: 100%;
      width: 40pc;
      object-fit: contain;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    }

    nav {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .button-class{
        padding-left: 27pc;
        position: relative;
        top: -30px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Elige Tu Plato</span>
    </div>
  </nav>

  <div class="short">
    <img src="img/BandepaisaCarta.jpg"  alt="Imagen 1">
  </div>


    <button class="btn btn-success w-100 btn-5m" type="submit">Pagar</button>

  <div class="short">
    <img src="img/LechonaCarta.jpg" alt="Imagen 2">
</div>

   <button class="btn btn-success w-100 btn-5m" type="submit">Pagar</button>

  <div class="short">
    <img src="img/MondongoCarta.jpg" alt="Imagen 3">
  </div>

   <button class="btn btn-success w-100 btn-5m" type="submit">Pagar</button>
  <div class="short">
    <img src="img/ResCarta.jpg" alt="Imagen 4">
  </div>

   <button class="btn btn-success w-100 btn-5m" type="submit">Pagar</button>
  <div class="short">
    <img src="img/SancochoCarta.jpg" alt="Imagen 4">
  </div>

   <button class="btn btn-success w-100" type="submit">Pagar</button>
  <div class="short">
    <img src="img/PechugaCarta.jpg">
  </div>
   <button class="btn btn-success w-100 btn-5m" type="submit">Pagar</button>

  <div class="short">
    <a href="">
       <img src="img/ArepaRellena.jpg" alt="Imagen 4">
    </a>
  </div>

  <div class="button-class">
   <button class="btn btn-success w-50 btn-5m"  type="submit">

   <i class="fa-solid fa-cart-shopping"></i>
   
    Pagar
   </button>
  </div>

  
 
</body>
</html> 