<?php
require "includes/header.php";
require "../controllers/controller.php";
?>

<div class="container w-50 p-3 mt-5 bg-dark text-light border border-danger">
    <?php
    foreach ($listPatientsArray as $patient) {
    ?>
        <div class="row">
            <ul class="list-unstyled col-6 ps-5">
                <li>† <span class="fw-bold text-danger">Nom:</span> <?= $patient["lastname"] ?></li>
                <li>† <span class="fw-bold text-danger">Prénom:</span> <?= $patient["firstname"] ?></li>
                <li>† <span class="fw-bold text-danger">Courriel:</span> <?= $patient["mail"] ?></li>
            </ul>
            <div class="col-6 text-center">
                <a href="profil-patients.php"><button class="btn btn-light btn-outline-danger">+ d'infos</button></a>
            </div>
            <hr class="text-danger">
        </div>
    <?php
    }
    ?>
    <div class="d-flex justify-content-evenly">
        <a href="../index.php"><button class="btn btn-lg btn-light">Accueil</button></a>
        <a href="ajout-patients.php"><button class="btn btn-lg btn-light">Formulaire</button></a>
    </div>
</div>

<?php
require "includes/footer.php";
?>