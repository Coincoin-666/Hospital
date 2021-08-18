<?php
require "../views/includes/header.php";
require "../controllers/controller.php";
?>

<form action="" method="POST" class="container w-50 p-3 mt-5 bg-dark text-light border border-danger">

    <label for="lastName" class="form-label mt-3">Nom:</label>
    <input type="text" name="lastName" id="lastName" placeholder="ex:Denfer" class="form-control">

    <label for="firstName" class="form-label mt-3">Prénom:</label>
    <input type="text" name="firstName" id="firstName" placeholder="ex:Cruella" class="form-control">

    <label for="birthDate" class="form-label mt-3">Date de naissance:</label>
    <input type="date" name="birthDate" id="birthDate" placeholder="ex:06.06.66" class="form-control">

    <label for="deathDate" class="form-label mt-3">Date de mort:</label>
    <input type="date" name="deathDate" id="deathDate" placeholder="ex:07.06.66" class="form-control">

    <label for="phoneNumber" class="form-label mt-3">Numéro de téléphone:</label>
    <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="ex:06.66.66.66.66" class="form-control">

    <label for="email" class="form-label mt-3">Courriel:</label>
    <input type="email" name="email" id="email" placeholder="ex: monsieurSatan@gouv.fr" class="form-control">

    <button type="submit" name="submission_btn" class="btn btn-lg btn-success mt-4">Enregistrer</button>

</form>

<?php
require "../views/includes/footer.php";
?>