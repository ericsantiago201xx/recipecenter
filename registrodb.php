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

if(isset($_POST['usuario_registro'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $clave = $_POST['contraseña'];
    $confirmar = $_POST['confirmar_contraseña'];


   if ($clave !== $confirmar) {
        die("Las contraseñas no coinciden");

      
}

$email = $_POST['email'];
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "Ese correo ya está registrado.";

    header("location: registro.php");
}

    $query = "INSERT INTO usuarios (nombre, apellido, telefono, email, password_hash) VALUES ('$nombre','$apellido','$telefono','$email','$clave')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }
}

 header("location:index.php");

?>
