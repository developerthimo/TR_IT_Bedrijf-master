<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="Main_navbar">
      <div class="container">
        <a class="navbar-brand" href="#">T & R</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

           <?php
            if (isset($_SESSION["id"])) {
                switch ($_SESSION["userrole"]) {
                  case 'eigenaar':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="./index.php?action=eigenaar_home">Home</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=administrator_home">Home Admin</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=klant_home">Home Sub</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=verander_userrole">Verander gebruikersrol</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=informatie_home">Informatie</a>
                        </li>';
                        echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_rutger">Portfolio Rutger</a>
                      </li>';
                      echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=info_thimo">Portfolio Thimo</a>
                    </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=contact_home">Contact</a>
                        </li>';
                  break;
                  case 'administrator':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="./index.php?action=administrator_home">Home</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=informatie_home">Informatie</a>
                        </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_rutger">Portfolio Rutger</a>
                       </li>';
                  echo '<li class="nav-item">
                       <a class="nav-link" href="./index.php?action=info_thimo">Portfolio Thimo</a>
                       </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=contact_home">Contact</a>
                        </li>';
                  break;
                  case 'klant':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="./index.php?action=klant_home">Home</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=informatie_home">Informatie</a>
                        </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_rutger">Portfolio Rutger</a>
                         </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_thimo">Portfolio Thimo</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=contact_home">Contact</a>
                        </li>';
                  break;
                  case 'aanmelding':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="./index.php?action=aanmelding_home">Home</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=informatie_home">Informatie</a>
                        </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_rutger">Portfolio Rutger</a>
                        </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=info_thimo">Portfolio Thimo</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="./index.php?action=contact_home">Contact</a>
                        </li>';
                  break;
                  default:
                    header("Location: ./index.php?action=logout");
                  break;
                }
                echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=games">Games</a>
                      </li>';
                echo '<li class="nav-item">
                        <a class="nav-link" href="./index.php?action=logout">Uitloggen</a>
                      </li>';
            } else {
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=home">Home</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=registerform">Registreren</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=loginform">Inloggen</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=information">Informatie</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?action=contact_home">Contact</a>
                    </li>';
            }
            ?>
</ul>
</div>
</div>
</nav>