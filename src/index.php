<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Felpudo College</title>
  <link rel="stylesheet" href="./styles/index.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <div class="desktop">
    <header class="header">
      <div class="logo">
        <img
          src="https://via.placeholder.com/40x40"
          alt="Felpudo College Logo" />
        <h1>FELPUDO COLLEGE</h1>
      </div>
      <div class="user-icon">
        <i class="fas fa-user-circle"></i>
      </div>
    </header>

    <main class="main-content">
      <div class="matches-container">
        <div class="match-card past-match">
          <div class="team">
            <img
              src="https://via.placeholder.com/50x50"
              alt="Real Madrid Logo" />
            <span>Real Madrid</span>
          </div>
          <span class="vs">VS</span>
          <div class="team">
            <img src="https://via.placeholder.com/50x50" alt="Pumas Logo" />
            <span>Pumas</span>
          </div>
          <div class="score">3 - 9</div>
          <div class="stadium">Felpudo Stadium</div>
        </div>

        <div class="carousel-wrapper">
          <div class="match-card live-match">
            <div class="team">
              <img
                src="https://via.placeholder.com/60x60"
                alt="Chivas Logo" />
            </div>
            <span class="vs-live">VS</span>
            <div class="team">
              <img
                src="https://via.placeholder.com/60x60"
                alt="America Logo" />
            </div>
            <div class="live-info">
              <span class="live-dot"></span>
              En vivo
              <br />
              17:30
            </div>
            <div class="stadium">Felpudo Stadium</div>
          </div>
        </div>

        <div class="match-card future-match">
          <div class="team">
            <img
              src="https://via.placeholder.com/50x50"
              alt="Monterrey Logo" />
            <span>Monterrey</span>
          </div>
          <span class="vs">VS</span>
          <div class="team">
            <img
              src="https://via.placeholder.com/50x50"
              alt="Real Madrid Logo" />
            <span>Real Madrid</span>
          </div>
          <div class="time">
            Mañana <br />
            16:00
          </div>
          <div class="stadium">Estadio Central</div>
        </div>
      </div>

      <div class="navigation-cards">
        <div class="nav-card">
          <a href="./pages/horarios.php">
            <img
              src="https://via.placeholder.com/100x100"
              alt="Horarios icon" />
            <span>Horarios</span>
          </a>
        </div>
        <div class="nav-card">
          <img
            src="https://via.placeholder.com/100x100"
            alt="Reservar icon" />
          <span>Reservar</span>
        </div>
        <div class="nav-card">
          <img
            src="https://via.placeholder.com/100x100"
            alt="Resultados icon" />
          <span>Resultados</span>
        </div>
        <div class="nav-card">
          <img
            src="https://via.placeholder.com/100x100"
            alt="Información General icon" />
          <span>Información General</span>
        </div>
      </div>
    </main>
  </div>
</body>

</html>