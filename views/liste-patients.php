<?php
require "includes/header.php";
require "../controllers/controller.php";
?>

<div class="container w-50 p-3 mt-5 bg-dark text-light border border-danger">
    <?php
    foreach($listPatientsArray as $patient) {
    ?>
    <ul class="list-unstyled">
        <li>† <span class="fw-bold text-danger">Nom:</span> <?= $patient["lastname"] ?></li>
        <li>† <span class="fw-bold text-danger">Prénom:</span> <?= $patient["firstname"] ?></li>
        <li>† <span class="fw-bold text-danger">Courriel:</span> <?= $patient["mail"] ?></li>
    </ul>
    <?php
    }
    ?>
</div>

<?php
require "includes/footer.php";
?>