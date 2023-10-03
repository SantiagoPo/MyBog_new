<!DOCTYPE html>
<?php
session_start();



?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olvido su contraseña</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./estilos/HeaderFooter.css">
  <link rel="stylesheet" href="./estilos/informacion.css">
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light navbar-dark-bg">
        <div class="container-fluid" id="header">
          <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand Logo" href="./index.php"><img src="./Imagenes/Logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link rojo" id="mapa" href="./mapa.php">Mapa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link amarillo" id="calendario" href="./calendario.php">Calendario</a>
              </li>
              <?php
              if (isset($_SESSION['user_id'])) {
                echo '<li class="nav-item">
                    <form id="logout-form" action="./php/logout.php" method="post">
                        <button type="submit" class="nav-link btn rojo" data-toggle="modal" data-target="#confirmLogoutModal">Cerrar sesión</button>
                    </form>
                        </li>';


              } else {
                echo '<li class="nav-item">
                    <a class="nav-link rojo" id="main" href="./main.php" >Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link amarillo" id="registro" href="./registro.php">Registro</a>
                </li>';
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Modal -->
      <div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dark" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmLogoutModalLabel">Confirmar cierre de sesión</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que quieres cerrar sesión?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirm-logout-btn">Cerrar sesión</button>
                        </div>
                    </div>
                </div>
            </div>

      <div class="inicio">
        <input type="text" id="searchInput" placeholder="Buscar tarjetas">

        <div class="cards">
          <div class="card" id="card1">
            <img class="card__image" src="./Imagenes/parques/Parque Central Bavaria.jpeg" alt="">
            <div class="card__content">
              <h3>
                Parque Central Bavaria
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./mundo_aventura.html" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card " id="card2">
            <img class="card__image" src="./Imagenes/parques/jardin-botanico-de-bogota.jpg" alt="">
            <div class="card__content">
              <h3>
                Jardín Botánico Jose Celestino Mutis
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card3">
            <img class="card__image" src="./Imagenes/parques/Parque 93.jpeg" alt="">
            <div class="card__content">
              <h3>
                Parque 93
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card4">
            <img class="card__image" src="./Imagenes/parques/Parque Central Simon Bolivar.jpg" alt="">
            <div class="card__content">
              <h3>
                Parque Central Simon Bolivar
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card5">
            <img class="card__image" src="./Imagenes/parques/parque usaquen.png" alt="">
            <div class="card__content">
              <h3>
                Parque de Usaquen
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card6">
            <img class="card__image" src="./Imagenes/parques/Parque El Virrey.jpg" alt="">
            <div class="card__content">
              <h3>
                Parque El Virrey
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card7">
            <img class="card__image" src="./Imagenes/parques/Parque El Lago.jpg" alt="">
            <div class="card__content">
              <h3>
                Parque El Lago
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>
            </div>
            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>
          </div>
          <div class="card" id="card8">
            <img class="card__image" src="./Imagenes/parques/Parque de Los Novios.jpg" alt="">
            <div class="card__content">
              <h3>
                Parque de Los Novios
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus id ab tenetur delectus reiciendis
                fugit autem qui at.
              </p>

            </div>

            <div class="card__info">
              <div>
                <a href="./" class="card__link">Mas informacion</a>
              </div>
            </div>


          </div>
        </div>
        <!-- <div class="pagination">
                    <button id="prevPage">Anterior</button>
                    <button id="nextPage">Siguiente</button>
                </div> -->
      </div>
      <footer class="footer">
        <nav>
          <ul>
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Contacto</a></li>

            <?php
            if (isset($_SESSION['user_id'])) {
              echo '<li><a href="./reg_establecimiento.php">deseas registrar tu establecimiento</a></li>';
            } else {
              echo '<li><a data-toggle="modal" data-target="#myModal" href="#">deseas registrar tu establecimiento</a></li>';
            }
            ?>

          </ul>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  Debes estar logeado/Registrado para utilizar este servicio.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>

          <br>
          <p>© 2023 MyBog. Todos los derechos reservados.</p>
        </nav>
      </footer>
    </div>
    <script src="./Funcionamiento_por_js/confirmacion_de_contraseña.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
            document.getElementById('logout-form').addEventListener('submit', function (event) {
                event.preventDefault();
                $('#confirmLogoutModal').modal('show');
            });

            document.getElementById('confirm-logout-btn').addEventListener('click', function (event) {
                document.getElementById('logout-form').submit();
            });
        </script>
</body>

</html>