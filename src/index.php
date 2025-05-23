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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="wearable-header">
      <div class="logo">
        <img src="./assets/felpudo.png" alt="Felpudo College Logo" class="logo-img">
      </div>
    </header>

    <main class="wearable-main">
      <div class="wearable-navigation">
        <a href="./pages/horarios.php" class="nav-button horarios">
          <i class="material-icons">schedule</i>
          <span>Horarios</span>
        </a>
        <a href="./pages/resultados.php" class="nav-button resultados">
          <i class="material-icons">emoji_events</i>
          <span>Resultados</span>
        </a>
      </div>
    </main>

    <div class="original-view">
      <div class="header"> <a href="#"> </a>
        <div class="logo">
          <img
            src="./assets/felpudo.png"
            width="128" alt="Felpudo College Logo" />
        </div>
        <i class="material-icons icon">person</i>
      </div>

      <div class="main-content">
        <h1 class="section-title">Partidos</h1>
        <div class="matches-container">
          <div class="match-card past-match">
            <div class="team">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Real-madrid-icon-1467x2048-p4mfm7ya.png/250px-Real-madrid-icon-1467x2048-p4mfm7ya.png"
                alt="Real Madrid Logo" />
              <span>Real Madrid</span>
            </div>
            <span class="vs">VS</span>
            <div class="team">
              <img src="https://upload.wikimedia.org/wikipedia/en/b/ba/ClubUniversidadNacional.PNG" alt="Pumas Logo" />
              <span>Pumas</span>
            </div>
            <div class="score">3 - 9</div>
            <div class="stadium">Felpudo Stadium</div>
          </div>

          <div class="carousel-wrapper">
            <div class="match-card live-match">
              <div class="team">
                <img
                  src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f0/Guadalajara_CD.svg/800px-Guadalajara_CD.svg.png"
                  alt="Chivas Logo" />
              </div>
              <span class="vs-live">VS</span>
              <div class="team">
                <img
                  src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c1/Club_Am%C3%A9rica_crest.svg/1200px-Club_Am%C3%A9rica_crest.svg.png"
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
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Club_de_F%C3%BAtbol_Monterrey_2019_Logo.svg/800px-Club_de_F%C3%BAtbol_Monterrey_2019_Logo.svg.png"
                alt="Monterrey Logo" />
              <span>Monterrey</span>
            </div>
            <span class="vs">VS</span>
            <div class="team">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Real-madrid-icon-1467x2048-p4mfm7ya.png/250px-Real-madrid-icon-1467x2048-p4mfm7ya.png"
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
          <div class="nav-card horarios">
            <a href="./pages/horarios.php">
              <i class="material-icons nav-icon">schedule</i> <span>Horarios</span>
            </a>
          </div>
          <div class="nav-card reserv">
            <a href="./pages/reservar.php">
              <i class="material-icons nav-icon">event_seat</i> <span>Reservar</span>
            </a>
          </div>
          <div class="nav-card resultados">
            <a href="./pages/resultados.php">
              <i class="material-icons nav-icon">emoji_events</i> <span>Resultados</span>
            </a>
          </div>
          <div class="nav-card informacion">
            <a href="./pages/informacion.php">
              <i class="material-icons nav-icon">info</i> <span>Información General</span>
            </a>
          </div>
        </div>
        </main>
      </div>
    </div>
</body>

</html>