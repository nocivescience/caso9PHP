<?php
    $conexion= mysqli_connect("localhost","root","","test");
    if(isset($_POST['enviar'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $hobbie= trim($_POST['hobbie']);
            $email = trim($_POST['email']);
            $consulta = "INSERT INTO caso9(nombre, apellido, pasatiempo, email) VALUES ('$nombre','$apellido','$email', '$hobbie')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                ?>
                <h3 class="ok">¡Te has inscripto correctamente!</h3>
                <?php
            }else{
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="error">¡Por favor complete los campos!</h3>
            <?php
        }
    }
?>