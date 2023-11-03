<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="" method="post">
        <!-- <input type="text" name="name" placeholder="ingrese su nombre">
        <input type="text" name="lastname" placeholder="ingrese su apellido">
        <input type="email" name="email" placeholder="ingrese su email"> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Su nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" name="nombre">
          <span class="input-group-text" id="basic-addon2">Juan Soto</span>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Su apellido" aria-label="Recipient's username" aria-describedby="basic-addon2" name="apellido">
          <span class="input-group-text" id="basic-addon2">Perez</span>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Su email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
          <span class="input-group-text" id="basic-addon2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 3.5v9A1.5 1.5 0 0 0 1.5 14h13A1.5 1.5 0 0 0 16 12.5v-9A1.5 1.5 0 0 0 14.5 2h-13A1.5 1.5 0 0 0 0 3.5z"/>
              <path d="M0 3.5l7.5 5L15 3.5"/>
            </svg>
            </span>
        </div>
        <div class="input-group mb-3">
            <input type="text" name="hobbie" placeholder="ingrese su hobbie" class="form-control">
        </div>
        <div class="input-group mb-3">
            <input type="submit" class="form-control" placeholder="Su contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2" name="enviar">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <?php
      include("base.php");
    ?>
</body>
</html>