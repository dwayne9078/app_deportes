<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Asientos - Felpudo College</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../styles/reservar.css">
</head>

<body>

    <div class="header">
        <a href="../index.php">
            <i class="material-icons icon">arrow_back</i>
        </a>
        <div class="logo">
            <img src="../assets/felpudo.png" alt="Logo" height="48">
        </div>
        <i class="material-icons icon">person</i>
    </div>

    <div class="main-content">
        <h1 class="section-title">Reservar Asientos</h1>

        <div class="match-selection-box">
            <h2>Seleccionar Partido</h2>

            <div class="match-buttons-grid">
                <button class="match-button active" data-match-id="monterrey-tigres">Monterrey VS Tigres</button>
                <button class="match-button" data-match-id="manchester-iran">Manchester VS Irán</button>
                <button class="match-button" data-match-id="chivas-tigres">Chivas VS Tigres</button>
                <button class="match-button" data-match-id="pumas-tigres">Pumas VS Tigres</button>
            </div>
        </div>

        <div id="match-details-container">
            <div id="details-monterrey-tigres" class="match-details-content active">
                <div class="match-info-header">
                    <div class="team">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Club_de_F%C3%BAtbol_Monterrey_2019_Logo.svg/800px-Club_de_F%C3%BAtbol_Monterrey_2019_Logo.svg.png" alt="Monterrey Logo">
                        <span>Monterrey</span>
                    </div>
                    <span class="vs">VS</span>
                    <div class="team">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Tigres.png" alt="Tigres Logo">
                        <span>Tigres</span>
                    </div>
                    <div class="match-datetime-location">
                        Lunes 19 - Mayo<br>
                        <span class="time-location">16:00 - Felpudo Stadium</span>
                    </div>
                </div>

                <div class="section-selection">
                    <h3>Selecciona una Sección</h3>
                    <div class="stadium-layout-grid">
                        <button class="section-button" data-section="E1">E1</button>
                        <button class="section-button" data-section="A1">A1</button>
                        <button class="section-button" data-section="E3">E3</button>

                        <button class="section-button" data-section="I2">I2</button>
                        <div class="pitch-area section-button" data-section="Cancha">Cancha</div>
                        <button class="section-button" data-section="D1">D1</button>

                        <button class="section-button" data-section="I3">I3</button>
                        <button class="section-button" data-section="D2">D2</button>
                        <button class="section-button" data-section="I4">I4</button>
                        <button class="section-button" data-section="A2">A2</button>
                        <button class="section-button" data-section="E4">E4</button>
                        <button class="section-button" data-section="D3">D3</button>
                    </div>
                </div>

                <div id="seat-selection-D1" class="seat-selection-area hidden" data-section-for="D1">
                    <div class="seat-selection-header">
                        <button class="back-to-sections"><i class="material-icons icon">arrow_back</i></button>
                        <span class="selected-section-display">D1</span>
                    </div>

                    <h3>Selecciona tus Asientos:</h3>
                    <div class="legend">
                        <span>Libres <span class="seat-status free"></span></span>
                        <span>Ocupados <span class="seat-status occupied"></span></span>
                        <span>Seleccionados <span class="seat-status selected"></span></span>
                    </div>

                    <div class="seats-grid" data-section-name="D1">
                        <div class="seat" data-seat="1a" data-row="1" data-col="a"></div>
                        <div class="seat" data-seat="1b" data-row="1" data-col="b"></div>
                        <div class="seat" data-seat="1c" data-row="1" data-col="c"></div>
                        <div class="seat occupied" data-seat="1d" data-row="1" data-col="d"></div>
                        <div class="seat" data-seat="1e" data-row="1" data-col="e"></div>
                        <div class="seat" data-seat="1f" data-row="1" data-col="f"></div>
                        <div class="seat" data-seat="1g" data-row="1" data-col="g"></div>
                        <div class="seat" data-seat="1h" data-row="1" data-col="h"></div>
                        <div class="seat" data-seat="2a" data-row="2" data-col="a"></div>
                        <div class="seat occupied" data-seat="2b" data-row="2" data-col="b"></div>
                        <div class="seat" data-seat="2c" data-row="2" data-col="c"></div>
                        <div class="seat" data-seat="2d" data-row="2" data-col="d"></div>
                        <div class="seat" data-seat="2e" data-row="2" data-col="e"></div>
                        <div class="seat" data-seat="2f" data-row="2" data-col="f"></div>
                        <div class="seat occupied" data-seat="2g" data-row="2" data-col="g"></div>
                        <div class="seat" data-seat="2h" data-row="2" data-col="h"></div>
                        <div class="seat" data-seat="3a" data-row="3" data-col="a"></div>
                        <div class="seat" data-seat="3b" data-row="3" data-col="b"></div>
                        <div class="seat" data-seat="3c" data-row="3" data-col="c"></div>
                        <div class="seat" data-seat="3d" data-row="3" data-col="d"></div>
                        <div class="seat" data-seat="3e" data-row="3" data-col="e"></div>
                        <div class="seat" data-seat="3f" data-row="3" data-col="f"></div>
                        <div class="seat" data-seat="3g" data-row="3" data-col="g"></div>
                        <div class="seat" data-seat="3h" data-row="3" data-col="h"></div>
                        <div class="seat" data-seat="4a" data-row="4" data-col="a"></div>
                        <div class="seat" data-seat="4b" data-row="4" data-col="b"></div>
                        <div class="seat occupied" data-seat="4c" data-row="4" data-col="c"></div>
                        <div class="seat" data-seat="4d" data-row="4" data-col="d"></div>
                        <div class="seat" data-seat="4e" data-row="4" data-col="e"></div>
                        <div class="seat" data-seat="4f" data-row="4" data-col="f"></div>
                        <div class="seat" data-seat="4g" data-row="4" data-col="g"></div>
                        <div class="seat occupied" data-seat="4h" data-row="4" data-col="h"></div>
                    </div>

                    <div class="confirmation-box">
                        <h3>Confirma tu Reservación:</h3>
                        <p>Asientos: <span id="selected-seats-display">Ninguno</span></p>
                        <p>Sección: <span class="confirmed-section-name">D1</span></p>
                        <button class="confirm-reservation-btn">Confirmar</button>
                    </div>
                </div>

                <div id="seat-selection-E1" class="seat-selection-area hidden" data-section-for="E1">
                    <div class="seat-selection-header">
                        <button class="back-to-sections"><i class="material-icons icon">arrow_back</i></button>
                        <span class="selected-section-display">E1</span>
                    </div>
                    <h3>Selecciona tus Asientos:</h3>
                    <div class="legend">
                        <span>Libres <span class="seat-status free"></span></span>
                        <span>Ocupados <span class="seat-status occupied"></span></span>
                        <span>Seleccionados <span class="seat-status selected"></span></span>
                    </div>
                    <div class="seats-grid" data-section-name="E1">
                        <div class="seat" data-seat="1a" data-row="1" data-col="a"></div>
                        <div class="seat" data-seat="1b" data-row="1" data-col="b"></div>
                        <div class="seat occupied" data-seat="1c" data-row="1" data-col="c"></div>
                        <div class="seat" data-seat="1d" data-row="1" data-col="d"></div>
                        <div class="seat" data-seat="1e" data-row="1" data-col="e"></div>
                        <div class="seat" data-seat="1f" data-row="1" data-col="f"></div>
                    </div>
                    <div class="confirmation-box">
                        <h3>Confirma tu Reservación:</h3>
                        <p>Asientos: <span id="selected-seats-display-E1">Ninguno</span></p>
                        <p>Sección: <span class="confirmed-section-name">E1</span></p>
                        <button class="confirm-reservation-btn">Confirmar</button>
                    </div>
                </div>

                <div id="seat-selection-Cancha" class="seat-selection-area hidden" data-section-for="Cancha">
                    <div class="seat-selection-header">
                        <button class="back-to-sections"><i class="material-icons icon">arrow_back</i></button>
                        <span class="selected-section-display">Cancha</span>
                    </div>
                    <h3>Detalles del Área de Cancha</h3>
                    <p>Esta área es de acceso restringido y está designada solo para personal del evento, jugadores y equipos técnicos. No hay asientos disponibles para reserva pública aquí.</p>
                    <p>¡Disfruta del partido desde tu asiento en la tribuna!</p>
                    <button class="confirm-reservation-btn hidden">Confirmar</button>
                </div>


            </div>

            <div id="details-manchester-iran" class="match-details-content hidden">
                <div class="match-info-header">
                    <div class="team">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/1200px-Manchester_City_FC_badge.svg.png" alt="Manchester Logo">
                        <span>Manchester</span>
                    </div>
                    <span class="vs">VS</span>
                    <div class="team">
                        <img src="https://upload.wikimedia.org/wikipedia/en/5/56/Esteghlal_FC_Official_Logo.png" alt="Irán Logo">
                        <span>Irán</span>
                    </div>
                    <div class="match-datetime-location">
                        Miércoles 21 - Mayo<br>
                        <span class="time-location">12:00 - Estadio Central</span>
                    </div>
                </div>
                <div class="section-selection">
                    <h3>Selecciona una Sección para Manchester VS Irán</h3>
                    <div class="stadium-layout-grid">
                        <button class="section-button" data-section="M1">M1</button>
                        <button class="section-button" data-section="M2">M2</button>
                        <div class="pitch-area section-button" data-section="Cancha">Cancha</div>
                        <button class="section-button" data-section="M3">M3</button>
                        <button class="section-button" data-section="M4">M4</button>
                    </div>
                </div>
                <div id="seat-selection-M1" class="seat-selection-area hidden" data-section-for="M1">
                    <div class="seat-selection-header">
                        <button class="back-to-sections"><i class="material-icons icon">arrow_back</i></button>
                        <span class="selected-section-display">M1</span>
                    </div>
                    <h3>Selecciona tus Asientos para M1:</h3>
                    <div class="legend">
                        <span>Libres <span class="seat-status free"></span></span>
                        <span>Ocupados <span class="seat-status occupied"></span></span>
                        <span>Seleccionados <span class="seat-status selected"></span></span>
                    </div>
                    <div class="seats-grid" data-section-name="M1">
                        <div class="seat" data-seat="M1-1a" data-row="1" data-col="a"></div>
                        <div class="seat" data-seat="M1-1b" data-row="1" data-col="b"></div>
                        <div class="seat" data-seat="M1-1c" data-row="1" data-col="c" class="occupied"></div>
                        <div class="seat" data-seat="M1-1d" data-row="1" data-col="d"></div>
                        <div class="seat" data-seat="M1-1e" data-row="1" data-col="e"></div>
                    </div>
                    <div class="confirmation-box">
                        <h3>Confirma tu Reservación:</h3>
                        <p>Asientos: <span id="selected-seats-display-M1">Ninguno</span></p>
                        <p>Sección: <span class="confirmed-section-name">M1</span></p>
                        <button class="confirm-reservation-btn">Confirmar</button>
                    </div>
                </div>
                <div id="seat-selection-Cancha-manchester" class="seat-selection-area hidden" data-section-for="Cancha">
                    <div class="seat-selection-header">
                        <button class="back-to-sections"><i class="material-icons icon">arrow_back</i></button>
                        <span class="selected-section-display">Cancha</span>
                    </div>
                    <h3>Detalles del Área de Cancha para Manchester VS Irán</h3>
                    <p>Esta área es de acceso restringido y está designada solo para personal del evento, jugadores y equipos técnicos. No hay asientos disponibles para reserva pública aquí.</p>
                    <p>¡Disfruta del partido desde tu asiento en la tribuna!</p>
                    <button class="confirm-reservation-btn hidden">Confirmar</button>
                </div>
            </div>
        </div>

        <img class="soccer-ball-icon" src="../assets/futbol-americano.png" alt="balon">
    </div>

    <script src="../js/reservar.js"></script>

</body>

</html>