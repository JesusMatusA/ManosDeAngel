<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Styles/recepcionistScreenStyles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Recepcionista</title>
  </head>
  <body>
    <nav class="navigatorBarContainer">
      <div class="logoContainer">
        <img src="/img/logo.png" alt="" class="imgLogo" />
      </div>
      <div class="nameContainer">Manos de Angel Clínica y Spa</div>
    </nav>
    <div class="bodyContainer">
      <div class="optionsContainer">
        <div class="menuContainer">
          <div class="userContainer">
            <div class="imgRecepcionistContainer">
              <img
                src="/img/recepcionist.png"
                alt=""
                class="recepcionistLogo"
              />
            </div>
            <div class="userType">Recepcionista</div>
          </div>
          <div class="buttonsContainer">
            <button class="btnOption">
              <span>Agendar o Reagendar Cita</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="btnOption">
              <span>Visualizar Citas</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="btnOption">
              <span>Eliminar Citas</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="btnOption">
              <span>Registrar Cliente</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="btnOption">
              <span>Actualizar Cliente</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="logoutContainer">
            <button class="btnLogout">
              Log Out
              <div class="arrow-wrapper">
                <div class="arrow"></div>
              </div>
            </button>
          </div>
        </div>
      </div>
      <div class="showsContainer">
        <div class="screenOptionContainer">
          <div class="nameOptionContainer">
            <div class="option">Eliminar una cita</div>
          </div>

          <div class="formContainer">
            <div class="formAdd">
              <form action="../recepcionistFunctions/recepcionistDelete.php" method="post" class="form">
                <div class="form">
                  <input
                    type="text"
                    placeholder="Ingrese el ID de la Cita"
                    name="txtIdDate"
                    id=""
                    class="inputTextDesign"
                  />
                  <button class="buttonAdd" value="deleteDate">
                    <span>Eliminar Cita</span>
                    <svg
                      width="34"
                      height="34"
                      viewBox="0 0 74 74"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="37"
                        cy="37"
                        r="35.5"
                        stroke="black"
                        stroke-width="3"
                      ></circle>
                      <path
                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                        fill="black"
                      ></path>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="underContainer"></div>
        </div>
      </div>
    </div>
    <footer class="footerContainer">
      <div class="textFooter">
        © Copyright 2022 ALUMNOS ITH - Todos los Derechos Reservados
      </div>
    </footer>
  </body>
</html>