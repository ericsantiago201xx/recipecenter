<?php 

 session_start();
    $conn = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'recipecenter'
);

?>

<?php  



if(isset($_POST['sesion_usuario'])){
    $email = $_POST['email'];
    $clave = $_POST['contraseña'];

    $query = "INSERT INTO ususesion (email, contraseña) VALUES ('$email','$clave')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }
}

 header("location:index.php");
?>
