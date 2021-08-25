<?php
require "patients.php";

//------------------------------------------------------------
// Création de la classe Appointments, fille de Database, qui contiendra les fonctions dédiées aux rendez-vous
class Appointments extends Database {
    // On procède de la même manière que pour les ajouts de patients,
    // On se connecte à la base de données puis on formule la requête
    protected function addAppointments($dateHour, $idPatient) {
        $database = $this->connectDatabase();
        $query = "INSERT INTO `appointments` (`dateHour`, `idPatient`) VALUES (:dateHour, :idPatient)";
        $addOneAppointment = $database->prepare($query);
        $addOneAppointment->bindValue('dateHour', $dateHour, PDO::PARAM_STR);
        $addOneAppointment->bindValue('idPatient', $idPatient, PDO::PARAM_STR);
        // Une fois que la requête est formulée et les valeurs liées, on execute
        $addOneAppointment->execute();
    }
}