<div class="col-lg-10">
    <?= '<img src="data:image/jpeg;base64,' . base64_encode($row['photo']) . '" style="float: right;" height="150" width="150"/>' ?>
    <h2 class="fw-normal"><?= "DR. " . $row['prenom'] . " " . $row['nom'] ?></h2>
    <p><?= "Localisation : " .$row['ville'] ?></p>
    <p>
        <?php

        if ($row['typeUtilisateur'] == 2) {
            echo "  Médecin - " . $row['specialite'] . '<br>';
        }
        if ($row['typeUtilisateur'] == 3) {
            echo "  Administrateur" . '<br>';
        }
        ?>
    </p>
    <!-- Button to launch a modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $row['utilisateurID'] ?>" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir CV</button>
    
    <br><br><br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?= $row['utilisateurID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--zone d'ombre autour de la fenetre-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body"><img id="image" src="<?= $row['CV'] ?>" alt="Click on button" height="700" width="600" /></div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
            </div>
        </div>
    </div>
</div>