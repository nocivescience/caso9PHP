
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><?php
$conexion= mysqli_connect("localhost","root","","test");
$query = "SELECT * FROM caso9";
$resultado = mysqli_query($conexion,$query);
echo '$resultado';
if(mysqli_num_rows($resultado)>0){
    echo "<table class='table' border='1'><tr><td>Nombre</td><td>Apellido</td><td>Email</td></tr>";
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<tr><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['email']."</td></tr>";
    }
    echo "</table>";
}else{
    echo "No hay resultados";
}
?>