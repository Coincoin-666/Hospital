<?php
require "../models/appointments.php";

$appointments_errors = [];
$appointmentSuccess = false;


//------------------------------------------------------------
// Liste des objets 'patients', récupérée du controller
$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->listPatients();

//------------------------------------------------------------

// Condition d'enregistrement du rendez-vous
// if (isset('appointment_btn') && count($appointments_errors) == 0) {

// } 