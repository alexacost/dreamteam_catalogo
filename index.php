<?php include ("db.php")?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="img/mando.ico" type="image/x-icon">
  <title>DreamTeam</title>
</head>

<body class="container">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">DreamTeam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" href="index.html">Catalogo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="ingresa.html">Ingresa</a></li>
                <li><a class="dropdown-item" href="registro.html">Registrate</a></li>
                <li><a class="dropdown-item" href="mis_datos.html">Mis datos</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <h1 class="mt-3 titulo">SHOP DE VIDEOJUEGOS</h1>
    <p>Filtro</p>

    <section class=" d-flex justify-content-between row">
    <?php
        $query = "SELECT * FROM juego";
        $result_juego = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result_juego)){ ?>
      <div class="card col-3 seccion" style="width: 18rem;">
      <?php 
        echo '<img src="data:foto/jpeg;base64,'.base64_encode($row['foto']).'"/>';
        ?>
        <div class="card-body">
          <p class="card-title texto-negrita"><?php echo $row['nombre_juego'] ?></p>
          <p class="precios"><?php echo $row['precio'] ?></p>
          <p class="card-text"><?php echo $row['plataforma'] ?></p>
          <a href="#" class="btn boton">Ver m??s</a>
        </div>
      </div>
      <?php } ?> 

    </section>
  </main>

  <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">?? 2021 Copyright: <span class="footer_texto">DreamTeam</span> </div>
  </footer>

  <script src="dreamteam.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>