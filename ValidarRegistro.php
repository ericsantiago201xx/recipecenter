<?php
session_start();
include("registrodb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $clave = $_POST['contraseña'];
    $confirmar = $_POST['confirmar_contraseña'];

       if ($clave !== $confirmar) {
        die("Las contraseñas no coinciden");
        
}

    $query = "SELECT FROM usuarios WHERE nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email', contraseña='$contraseña'";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        
        // Guardar ID en sesión
        $_SESSION['id'] = $usuario['id']; 
        $_SESSION['nombre'] = $usuario['nombre']; 

        header("Location:index.php");
        exit();
    } 
    
    else {
        echo "Correo o contraseña incorrectos";
    }
}
?>

<?php session_start();

if($_SESSION['id']==0){
    header("Location:registro.php");  
}
 
?>