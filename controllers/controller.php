<?php
//------------------------------------------------------------
// 6 – SIXIÈME ÉTAPE:
// Le controller définit les conditions de déclenchement de chaque fonction.
// Ici, pour les patients -> les fonctions concernant les rdv iront dans un controller-appointment etc.
//------------------------------------------------------------

require "../models/patients.php";

$errors = [];
$addPatientSuccess = false;
$addUpdateSuccess = false;

//------------------------------------------------------------

// Condition de déclenchement de la fonction créée dans la classe Patients.
// Récupération des données,
// Création d'un objet qui aura les attributs du patients.
if (isset($_POST['submission_btn']) && count($errors) == 0) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   // On récupère la donnée brute en string, c'est d'abord la strtotime() qui s'exécute (penser priorités mathématiques).
   $deathdate = strftime('%Y-%m-%d', strtotime($_POST['deathdate']));
   // Les téléphones et mails input format via Cleave.
   // Vérifier les inputs avec var_dump()
   $phone = $_POST['phone'];
   $email = $_POST['email'];

   $patientObj = new Patients();
   $patientObj->addPatient($firstname, $lastname, $deathdate, $phone, $email);
   $addPatientSuccess = true;
}

//------------------------------------------------------------

// Liste des objets 'patients'
$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->listPatients();

//------------------------------------------------------------

// Affichage des données disponibles par patient grâce au paramètre d'url
if (isset($_GET["patientID"])) {
   $infosPatientObj = new Patients();
   $infosPatientObjArray = $infosPatientObj->infosPatient($_GET["patientID"]);
}

//------------------------------------------------------------

// Modification des patients
if (isset($_POST['update_btn']) && count($errors) == 0) {
   $id = $_POST['update_btn'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $deathdate = strftime('%Y-%m-%d', strtotime($_POST['deathdate']));
   $phone = $_POST['phone'];
   $email = $_POST['email'];

   $patientsObj = new Patients();
   $patientsObj->updatePatient($id, $firstname, $lastname, $deathdate, $phone, $email);
   $addUpdateSuccess = true;
   $infosPatientObjArray = $infosPatientObj->infosPatient($_GET["patientID"]);
   header('Location: liste-patients.php');
}