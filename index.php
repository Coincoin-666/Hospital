<?php
require "views/includes/header.php";
?>

<div class="container d-flex justify-content-evenly w-50 pt-5 pb-5 mt-5 text-center bg-dark text-light border border-danger">
    <p><i class="fas fa-skull-crossbones fs-2 pe-3"></i><a href="views/ajout-patients.php"><button type="button" class="btn btn-lg btn-light">Ajouter un cadavre</button></a><i class="fas fa-skull-crossbones fs-2 ps-3"></i></p>
    <p><i class="fas fa-book-dead fs-2 pe-3"></i><a href="views/liste-patients.php"><button type="button" class="btn btn-lg btn-light">Voir les cadavres</button></a><i class="fas fa-book-dead fs-2 ps-3"></i></p>
</div>

<figure class="text-center bg-dark text-light pt-5 pb-5 mt-5">
    <blockquote class="blockquote">
        <p>Chez nous, on traite pas les vivants.</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        Monsieur Satan <cite title="Source Title">LaViCéDlaMerD</cite>
    </figcaption>
</figure>

<?php
require "views/includes/footer.php";
?>