<?php 

  include("dbprueba.php");

    if(isset($_POST['save_task'])){

    $title = $_POST['titulo'];
    $description = $_POST['descripcion'];
    $video = $_POST['ruta_video'];

    $video = $_FILES['video']['name'];
    $ruta = "uploads/video.mp4" . $video;
    move_uploaded_file($_FILES['video']['tmp_name'], $ruta);

    $query = "INSERT INTO recetas(titulo, descripcion, ruta_video) VALUES ('$title', '$description', '$video')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Receta Guardada';
    header("location: index.php");

    }
    
?>