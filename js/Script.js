document.addEventListener("DOMContentLoaded", () => {
  // Manejar los botones de "Pedir"
  const botones = document.querySelectorAll(".btn-pedir");
  botones.forEach(boton => {
    boton.addEventListener("click", () => {
      // Solicitar el nombre solo al hacer clic en "Pedir"
      const nombre = prompt("¿Cómo te llamas?");
      const tapa = boton.dataset.tapa;

      if (nombre) {
        const bienvenida = document.getElementById("bienvenida");
        bienvenida.textContent = `¡Hola, ${nombre}! ¿Qué tapa quieres probar hoy?`;
      }

      alert(`Has pedido: ${tapa}`);
    });
  });
});
