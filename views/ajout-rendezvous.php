<?php
require "includes/header.php";
require "../controllers/controller-appointments.php";
?>

<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <form action="" method="POST">

        <div class="text-center">
            <h3 class="fst-italic text-decoration-underline"><i class="fas fa-skull me-3"></i> Empaillage <i class="fas fa-skull ms-3"></i></h3>
        </div>

        <div class="row g-5 text-center">
            <div class="col-5 text-start">
                <label for="selectPatient" class="form-label">Sélectionner un patient existant</label>
                <select name="selectPatient" id="selectPatient" class="form-select">
                    <option selected>Liste des défunts</option>
                    <?php
                    foreach ($listPatientsArray as $patient) {
                    ?>
                        <option value="<?= $patient["id"]; ?>"><?= $patient["firstname"] . " " . $patient["lastname"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="appointmentDate" class="form-label mt-3">Date:</label>
                <input name="appointmentDate" id="appointmentDate" class="form-control appointmentDate">

                <label for="appointmentTime" class="form-label mt-3">Heure:</label>
                <input type="text" name="appointmentTime" id="appointmentTime" class="form-control">
            </div>


            <div class="col-2">
                <p class="fs-2 fw-bold">Ou</p>
            </div>

            <div class="col-5">
                <label for="ajoutPatient" class="form-label">Ajouter de nouveaux restes</label><br>
                <a href="ajout-patients.php">
                    <button type="button" name="ajoutPatient" id="ajoutPatient" class="btn btn-light btn-outline btn-outline-dark">
                        <i class="fas fa-skull fs-4 me-3"></i><i class="fas fa-plus fs-4"></i>
                    </button>
                </a>
                <hr>
                <a href="liste-patients.php"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Liste des Corps</button></a>
                <a href="/index.php"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Retour à l'Accueil</button></a>
            </div>

        </div>
        <div class="container d-flex justify-content-evenly">
            <button type="submit" name="appointment_btn" id="appointment_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Enregistrer</button>
        </div>
    </form>
    <?php
    require "includes/footer.php";
    ?>