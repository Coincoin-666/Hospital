<?php
require "database.php";

class Patients extends Database {
    public function addPatient($lastName, $firstName, $birthDate, $deathDate, $phoneNumber, $email) {
        $database = $this->connectDatabase();
        $query = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `deathDate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :deathDate, :phone, :mail)";

        $addQuery = $database->prepare($query);
        $addQuery->execute(array(
            'lastname' => $lastName,
            'firstname' => $firstName,
            'birthdate' => $birthDate,
            'deathDate' => $deathDate,
            'phone' => $phoneNumber,
            'mail' => $email
        ));
    }
    public function listPatients() {
        $database = $this->connectDatabase();
        $query = "SELECT * FROM `patients`";

        $queryAllPatients = $database->query($query);
        $allPatientsArray = $queryAllPatients->fetchAll();
        return $allPatientsArray;
    }
}