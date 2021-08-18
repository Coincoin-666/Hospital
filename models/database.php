<?php

class Database {
    private $dbname = 'PlurimaMortisImago';
    private $username = 'root';
    private $password = 'root';

    // Création d'une fct de connexion
    protected function connectDatabase() {
        // On essaye de se connecter à la base de données,
       try {
           $database = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
           return $database;
           // et si ça marche pas on affiche un message d'erreur.
       } catch(PDOException $error) {
           die('error: ' . $error->getMessage());
       }
    }
}