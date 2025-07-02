<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bar de Tapas</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Bienvenido al Bar de Tapas</h1>
      <p>El mejor sabor de España en cada bocado</p>
      <img src="img/banner.webp" alt="The best Spanish Restaurant">
    </header>

    <main>
      <h2>Nuestras Tapas</h2>
      <div class="tapas-grid">
        <!-- Tarjeta 1 -->
        <div class="card">
          <img src="img/1.webp" alt="Tortilla Española">
          <h3>Tortilla Española</h3>
          <p><strong>Ingredientes:</strong> patatas, huevos, aceite de oliva (cebolla opcional)</p>
          <p><strong>Precio:</strong> 10.00 €</p>
          <button onclick="alert('Has comprado: Tortilla Española')">Ver Detalles</button>
        </div>

        <!-- Tarjeta 2 -->
        <div class="card">
          <img src="img/2.webp" alt="Calamares">
          <h3>Calamares</h3>
          <p><strong>Ingredientes:</strong> calamares, harina, huevo, sal</p>
          <p><strong>Precio:</strong> 8.00 €</p>
          <button onclick="alert('Has comprado: Calamares')">Ver Detalles</button>
        </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="card">
          <img src="img/6.webp" alt="Jamón ibérico">
          <h3>Jamón ibérico</h3>
          <p><strong>Ingredientes:</strong> jamón, pimientos de padrón, aceite de oliva</p>
          <p><strong>Precio:</strong> 7.00 €</p>
          <button onclick="alert('Has comprado: Jamón ibérico')">Ver Detalles</button>
        </div>

        <!-- Tarjeta 4 -->
        <div class="card">
          <img src="img/7.webp" alt="Patatas bravas">
          <h3>Patatas bravas</h3>
          <p><strong>Ingredientes:</strong> patatas, aceite de oliva, salsa brava</p>
          <p><strong>Precio:</strong> 10.00 €</p>
            <button onclick="alert('Has comprado: Patatas bravas')">Ver Detalles</button>
        </div>

        <!-- Tarjeta 5 -->
        <div class="card">
          <img src="img/9.webp" alt="Pimientos de padrón">
          <h3>Pimientos de padrón</h3>
          <p><strong>Ingredientes:</strong> pimientos de padrón, sal, aceite de oliva</p>
          <p><strong>Precio:</strong> 3.00 €</p>
          <button onclick="alert('Has comprado: Pimientos de padrón')">Ver Detalles</button>
        </div>

        <!-- Tarjeta 6 -->
        <div class="card">
          <img src="img/11.webp" alt="Ensaladilla">
          <h3>Ensaladilla</h3>
          <p><strong>Ingredientes:</strong> patata, zanahoria, atún, mayonesa, guisantes, huevo duro</p>
          <p><strong>Precio:</strong> 2.00 €</p>
          <button onclick="alert('Has comprado: Tortilla Española')">Ver Detalles</button>
        </div>
      </div>
    </main>

    <footer>
      <p>© 2025 Bar de Tapas – Sabor, tradición y buena compañía.</p>
      <p>¿Gracias por visitarnos? Visítanos en <a href="#">Instagram</a> y <a href="#">TikTok</a>.</p>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
