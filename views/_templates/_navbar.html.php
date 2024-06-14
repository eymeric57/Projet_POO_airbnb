    <div class="d-flex justify-content-between text-align-center  align-items-center">
      <!-- logo -->
      <div class="nav-logo">
        <a href="/">

          <img src="/assets/img/logo.png" height="100px" alt="logo de l'appli">

        </a>
      </div>

      <!--  barre de navigation -->
      <div>
        <nav>
          <ul class="d-flex justify-content-center">
            <li class="m-1"><a href="/">Accueil</a></li>
            <li class="m-1"><a href="/favoris">Mes favoris</a></li>


          </ul>
        </nav>
      </div>
      <!-- menu du profil -->
      <div class="nav-profil">
        <nav class="custom-nav-profil ">
          <ul class="custom-ul-profil">
            <li class="custom-link">
              <!-- si je suis en session j'affiche mon compte -->
              <?php if ($auth::isAuth()) : ?> 
              <div class="dropdown custom-link">
                <a class="dropdown-toggle btn btn-secondary" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Mon compte
                  <i class="bi bi-person custom-svg"></i>
                </a>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item custom-link" href="">Ajouter un bien</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item custom-link" href="/mesBiens">Mes annonces</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item custom-link" href="/mesReservations">Mes réservation</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item custom-link" href="">Mode voyageur</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item custom-link" href="/logout">Me déconnecter</a></li>
                </ul>
              </div>
              <?php elseif($auth::isAuth()) : ?> 
                  <div class="dropdown custom-link">
                    <a class="dropdown-toggle btn btn-secondary" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Mon compte 
                      <i class="bi bi-person custom-svg"></i>
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                     
        
                    
                     
                      <li><a class="dropdown-item custom-link" href="/mesReservations">Mes réservation</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item custom-link" href="">Mode Loueur</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item custom-link" href="">Me déconnecter</a></li>
                    </ul>
                  </div>
               

              <?php else: ?> 
                  <a href="/connexion">Se connecter
                    <i class="bi bi-person custom-svg"></i>
                  </a>
               <?php endif ?> 
            </li>
          </ul>

        </nav>
      </div>


    </div>