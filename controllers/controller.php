<?php
require "../models/patients.php";

$errors = [];

if (isset($_POST['submission_btn']) && count($errors) == 0) {
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $birthDate = $_POST['birthDate'];
   $deathDate = $_POST['deathDate'];
   $phoneNumber = $_POST['phoneNumber'];
   $email = $_POST['email'];

   $patientsObj = new Patients();
   $patientsObj->addPatient($lastName, $firstName, $birthDate, $deathDate, $phoneNumber, $email);
}

$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->listPatients();