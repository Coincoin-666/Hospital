<?php
//------------------------------------------------------------
// 7 – SEPTIÈME ÉTAPE:
// Liste des patients enregistrés dans la db.
// 
//------------------------------------------------------------
require "includes/header.php";
require "../controllers/controller.php";
?>

<div class="container w-50 p-3 mt-5 text-light border border-danger black_bg patientList">
    <?php
    // On boucle sur la liste des patients comme patient etc etc.
    foreach ($listPatientsArray as $patient) {
    ?>
        <div class="row">
            <ul class="list-unstyled col-6 ps-5">
                <li>† <span class="fw-bold text-danger">N° d'Identification: </span> <?= $patient["id"] ?></li>
                <li>† <span class="fw-bold text-danger">Nom:</span> <?= $patient["lastname"] ?></li>
                <li>† <span class="fw-bold text-danger">Prénom:</span> <?= $patient["firstname"] ?></li>
                <li>† <span class="fw-bold text-danger">Courriel:</span> <?= $patient["email"] ?></li>
            </ul>
            <div class="col-6 text-center">
                <!-- Gestion des liens en intégrant une variable php dans les url -->
                <a href="profil-patients.php?patientID=<?= $patient["id"] ?>"><button type="submit" name="infos_btn" class="btn btn-light btn-outline-danger m-2">+ d'infos</button></a>
                <a href="modif-patients.php?patientID=<?= $patient["id"] ?>"><button class="btn btn-light btn-outline btn-outline-dark m-2"><i class="fas fa-edit"></i></button></a>
                <button type="submit" name="delPatient" class="btn btn-light btn-outline btn-outline-dark m-2"><i class="fas fa-trash"></i></button></a>
                <a href="ajout-rendezvous.php"><button class="btn btn-light btn-outline-danger m-2"><i class="far fa-calendar-check me-1"></i>Nouveau RDV</button></a>
            </div>
            <hr class="text-danger">
        </div>
    <?php
    }
    ?>
    <div class="d-flex justify-content-evenly">
        <a href="../index.php"><button class="btn btn-light btn-outline btn-outline-dark">Accueil</button></a>
        <a href="ajout-patients.php"><button class="btn btn-light btn-outline btn-outline-dark">Formulaire</button></a>
    </div>
</div>

<?php
require "includes/footer.php";
?>