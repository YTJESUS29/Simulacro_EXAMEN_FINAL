<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bar de Tapas</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 1rem;
    }

    header, main {
      max-width: 1200px;
      margin: auto;
    }

    header {
      text-align: center;
      margin-bottom: 2rem;
      padding-bottom: 10px;
    }

    .Productos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 3rem;
    }

    article {
      border: 2px solid #ccc;
      border-radius: 10px;
      padding: 1rem;
      text-align: center;
      transition: box-shadow 0.4s ease;
      background-color: #fff;
    }

    article:hover {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    img {
      max-width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }

    button {
      margin-top: 2rem;
      padding: 0.5rem 1rem;
      border: none;
      background-color: #28a745;
      color: white;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background-color: #218838;
    }

    footer {
      text-align: center;
      margin-top: 2rem;
      padding: 1rem;
      background-color: #eee;
      font-size: 0.9rem;
      color: #444;
    }
  </style>
</head>
<body>

  <header class="navbar">
    <h1>Bienvenido al Bar de Tapas</h1>
    <p id="bienvenida">El mejor sabor de España en cada bocado</p>
    <img src="img/banner.webp"  loading="lazy" alt="Tapas">
  </header>
  <main class="container">
  
    <center><h2>Nuestras Tapas</h2></center>
    <br>

    <section class="Productos">
      
      
      <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $host = "localhost";
        $usuario = "root";
        $contrasena = "";
        $base_datos = "bbdd_bar_tapas";

        $conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

        if (mysqli_connect_errno()) {
          die("Error de conexión: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM tapas";
        $resultado = mysqli_query($conexion, $consulta);

        if (!$resultado) {
          die("Error en la consulta: " . mysqli_error($conexion));
        }

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
          echo "<article>";
          echo "<img src='img/" . $fila['id'] . ".webp' alt='" . htmlspecialchars($fila['nombre']) . "'>";
          echo "<h3>" . htmlspecialchars($fila['nombre']) . "</h3>";
          echo "<p><strong>Ingredientes:</strong> " . htmlspecialchars($fila['ingredientes']) . "</p>";
          echo "<p><strong>Precio:</strong> " . number_format($fila['precio'], 2) . " €</p>";
           echo "<button onclick=\"alert('Has comprado: ".htmlspecialchars($fila['nombre']) ."')\">Ver Detalles</button>";
          echo "</article>";
        }

        mysqli_close($conexion);
      ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Bar de Tapas. Todos los derechos reservados.</p>
  </footer>

  <script src="js/Script.js"></script>
</body>
</html>
