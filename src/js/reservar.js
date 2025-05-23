document.addEventListener("DOMContentLoaded", () => {
  // --- Elementos de selección de PARTIDO ---
  const matchButtons = document.querySelectorAll(".match-button");
  const matchDetailsContents = document.querySelectorAll(
    ".match-details-content"
  );

  // --- Funciones de utilidad ---
  const hideAllMatchDetails = () => {
    matchDetailsContents.forEach((content) => {
      content.classList.add("hidden");
      // Asegurarse de que también ocultamos la selección de asientos si estuviera activa
      content.querySelectorAll(".seat-selection-area").forEach((seatArea) => {
        seatArea.classList.add("hidden");
      });
      // Y mostramos la selección de secciones (para cuando vuelva)
      // Usamos optional chaining (?) para evitar errores si no encuentra .section-selection
      content.querySelector(".section-selection")?.classList.remove("hidden");
      content.classList.remove("show-seats"); // Remover la clase de estado desktop
    });
  };

  const hideAllSeatSelectionAreas = (currentMatchDetails) => {
    currentMatchDetails
      .querySelectorAll(".seat-selection-area")
      .forEach((seatArea) => {
        seatArea.classList.add("hidden");
      });
    // También remover 'active-section' de todos los botones de sección
    currentMatchDetails
      .querySelectorAll(".section-button")
      .forEach((btn) => btn.classList.remove("active-section"));
  };

  // --- Manejador de clic para los botones de PARTIDO ---
  matchButtons.forEach((button) => {
    button.addEventListener("click", () => {
      matchButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      hideAllMatchDetails(); // Oculta todos los detalles de partido

      const matchId = button.dataset.matchId;
      const targetDetails = document.getElementById(`details-${matchId}`);

      if (targetDetails) {
        targetDetails.classList.remove("hidden"); // Muestra los detalles del partido

        // Por defecto, muestra la selección de secciones para este partido
        targetDetails
          .querySelector(".section-selection")
          ?.classList.remove("hidden");
        hideAllSeatSelectionAreas(targetDetails); // Asegúrate de que no haya selección de asientos abierta

        // Desplazarse al inicio de los detalles del partido
        targetDetails.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // --- Manejador de clic para los botones de SECCIÓN (dentro de cada partido) y la flecha de retroceso ---
  // Usamos delegación de eventos en el contenedor principal de los detalles del partido
  document
    .querySelector("#match-details-container")
    .addEventListener("click", (event) => {
      const clickedElement = event.target;

      // 1. Si se hizo clic en un botón de SECCIÓN (E1, D1, Cancha, etc.)
      // Usamos .closest() para manejar clics en texto o iconos dentro del botón
      const sectionButton = clickedElement.closest(".section-button");
      if (sectionButton) {
        const currentMatchDetails = sectionButton.closest(
          ".match-details-content"
        );
        if (!currentMatchDetails) return;

        hideAllSeatSelectionAreas(currentMatchDetails); // Ocultar todas las áreas de asiento del partido actual

        const sectionId = sectionButton.dataset.section; // Usamos sectionButton
        // Usamos `querySelector` con el ID completo para encontrar el área de asientos específica
        const targetSeatSelectionArea = currentMatchDetails.querySelector(
          `#seat-selection-${sectionId}`
        );

        if (targetSeatSelectionArea) {
          targetSeatSelectionArea.classList.remove("hidden"); // Muestra el área de selección de asientos
          sectionButton.classList.add("active-section"); // Marca el botón de sección como activo

          // Actualizar el display de la sección en la cabecera del área de selección de asientos
          targetSeatSelectionArea.querySelector(
            ".selected-section-display"
          ).textContent = sectionId;
          targetSeatSelectionArea.querySelector(
            ".confirmed-section-name"
          ).textContent = sectionId;

          // Si es móvil, ocultar la selección de secciones para mostrar solo la de asientos
          const sectionSelectionElement =
            currentMatchDetails.querySelector(".section-selection");
          if (window.innerWidth < 992) {
            // Asumimos 992px como breakpoint para desktop
            sectionSelectionElement?.classList.add("hidden");
          } else {
            currentMatchDetails.classList.add("show-seats"); // Clase para estilos de desktop (lado a lado o ocultar)
          }

          // Desplazarse al área de selección de asientos
          targetSeatSelectionArea.scrollIntoView({
            behavior: "smooth",
            block: "start",
          });
        }
      }
      // 2. Si se hizo clic en el botón de RETROCESO (dentro de la selección de asientos)
      // Usamos .closest() para manejar clics en el icono (<i>) o en el botón (<button>)
      const backButton = clickedElement.closest(".back-to-sections");
      if (backButton) {
        // Si se encontró el botón de retroceso (o un hijo suyo)
        const currentSeatSelectionArea = backButton.closest(
          ".seat-selection-area"
        ); // Buscamos el área de asientos desde el botón
        const currentMatchDetails = backButton.closest(
          ".match-details-content"
        ); // Buscamos los detalles del partido desde el botón
        if (!currentSeatSelectionArea || !currentMatchDetails) return;

        currentSeatSelectionArea.classList.add("hidden"); // Oculta el área de selección de asientos
        currentMatchDetails
          .querySelector(".section-selection")
          ?.classList.remove("hidden"); // Muestra la selección de secciones
        currentMatchDetails.classList.remove("show-seats"); // Remover la clase de estado desktop

        // Remover la clase 'active-section' de cualquier botón de sección activo
        currentMatchDetails
          .querySelectorAll(".section-button")
          .forEach((btn) => btn.classList.remove("active-section"));

        // Opcional: Desplazarse de nuevo a la sección del estadio
        currentMatchDetails.querySelector(".section-selection").scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });

  // --- Lógica para la selección de ASIENTOS individuales ---
  document.addEventListener("click", (event) => {
    const clickedSeat = event.target;

    // Asegurarse de que el clic es en un asiento y que no está ocupado
    if (
      clickedSeat.classList.contains("seat") &&
      !clickedSeat.classList.contains("occupied")
    ) {
      clickedSeat.classList.toggle("selected"); // Alterna la clase 'selected'

      // Pasa el área de selección de asientos padre para actualizar su display
      updateSelectedSeatsDisplay(clickedSeat.closest(".seat-selection-area"));
    }
  });

  // Función para actualizar el texto de asientos seleccionados
  const updateSelectedSeatsDisplay = (seatSelectionArea) => {
    if (!seatSelectionArea) return;

    const selectedSeats = seatSelectionArea.querySelectorAll(".seat.selected");
    // Usa el selector de atributo `[id^="selected-seats-display"]` para encontrar el span específico
    const selectedSeatsDisplay = seatSelectionArea.querySelector(
      '[id^="selected-seats-display"]'
    );

    if (selectedSeatsDisplay) {
      if (selectedSeats.length === 0) {
        selectedSeatsDisplay.textContent = "Ninguno";
      } else {
        const seatNames = Array.from(selectedSeats)
          .map((seat) => {
            // Para que muestre algo como "1A, 2B"
            // Asume que data-row y data-col existen en los asientos
            const row = seat.dataset.row;
            const col = seat.dataset.col;
            return `${row}${col}`;
          })
          .join(", ");
        selectedSeatsDisplay.textContent = seatNames;
      }
    }
  };

  // --- Inicialización: Mostrar el primer partido por defecto ---
  if (matchButtons.length > 0) {
    matchButtons[0].click(); // Simula un clic en el primer botón de partido
  }
});
