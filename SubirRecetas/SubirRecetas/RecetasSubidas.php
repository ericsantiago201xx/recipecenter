<div class="video-container">

    <video src="" class="card-img-top" controls>
       <source src="uploads/<?php echo $row['ruta_video']; ?>" type="video/mp4">
          tu video navegador no soporta la etiqueta video

    </video>

    <!-- Botones de interacción -->
    <div class="video-actions">
      <button class="btn btn-outline-primary">
        <i class="fa-solid fa-thumbs-up"></i> Like
      </button>
      <button class="btn btn-outline-secondary">
        <i class="fa-solid fa-comment"></i> Comentar
      </button>
      <button class="btn btn-outline-success">
        <i class="fa-solid fa-share"></i> Compartir
      </button>
    </div>

    <!-- Caja de comentarios -->
    <div class="comment-box">
      <form class="d-flex">
        <input type="text" class="form-control me-2" placeholder="Escribe un comentario...">
        <button class="btn btn-primary">
          <i class="fa-solid fa-paper-plane"></i>
        </button>
      </form>
    </div>

</div>