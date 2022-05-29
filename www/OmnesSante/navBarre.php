<?php if (isset($_SESSION['utilisateurID'])) { ?>
    <!-- si utilisateur est connecté -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
            <a href="index.php"><img src="image/logo_omnes.png" alt="logoOmnes" height="100" width="190"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav  mb-2 mb-md-0">
                    <li class="dropdown">

                        <a href="javascript:void(0)" class="dropbtn my-2">Découvrir</a>
                        <div class="dropdown-content">
                            <a href="MedecinGeneral.php">Médecins Généralistes</a>
                            <a href="MedecinSpe.php">Médecins Spécialistes</a>
                            <a href="LesLabosDeBio.php">Laboratoires biologiques</a>
                        </div>
                    </li>
                </ul>
                <form action="endSession.php" method="post">
                    <button type="submit" class="btn btn-primary" style="background-color: rgb(143, 198, 248);border-color: rgb(255,255,255)">Log-Out</button>
                </form>


            </div>
            <div class="container-fluid">


                <?php if ($_SESSION['typeUtilisateur'] == "1") { ?>

                    <a href="CompteClient.php">
                        <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <li class="dropbtn my-md-1 mt-xl-0  float-xl-end"> <?php echo $_SESSION['prenom']; ?> est connecté
                    </a></li>

                <?php }
                if ($_SESSION['typeUtilisateur'] == "2") { ?>

                    <a href="CompteMedecin.php">
                        <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <li class="dropbtn my-md-1 mt-xl-0  float-xl-end"> <?php echo $_SESSION['prenom']; ?> est connecté
                    </a></li>

                <?php }
                if ($_SESSION['typeUtilisateur'] == "3") { ?>

                    <a href="CompteAdmin.php">
                        <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <li class="dropbtn my-md-1 mt-xl-0  float-xl-end"> <?php echo $_SESSION['prenom']; ?> est connecté
                    </a></li>


                <?php } ?>


            </div>
        </div>
    </nav>

<?php } else { ?>
    <!-- si utilisateur n'est pas encore connecté -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
            <a href="index.php"><img src="image/logo_omnes.png" alt="logoOmnes" height="100" width="190"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav  mb-2 mb-md-0">
                    <li class="dropdown">

                        <a href="javascript:void(0)" class="dropbtn my-2">Découvrir</a>
                        <div class="dropdown-content">
                            <a href="MedecinGeneral.php">Médecins Généralistes</a>
                            <a href="MedecinSpe.php">Médecins Spécialistes</a>
                            <a href="LesLabosDeBio.php">Laboratoires biologiques</a>
                        </div>
                    <li class="my-2"><a style="color: rgb(255,255,255)" href="formulaireregister.php">S'inscrire </a></li>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">

                <a href="login/login.php">
                    <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
<?php } ?>