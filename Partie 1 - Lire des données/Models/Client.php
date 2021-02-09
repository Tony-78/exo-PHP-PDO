<?php

class Client extends Database {

    private $idClient;
    private $lastnameClient;
    private $firstnameClient;
    private $birthDateClient;
    private $card;
    private $cardNumber;

    /**
     * Get the value of idClient
     */ 
    public function getIdClient() {
        return $this->idClient;
    }

    /**
     * Set the value of idClient
     *
     * @return  self
     */ 
    public function setIdClient($idClient) {
        $this->idClient = $idClient;
        return $this;
    }

    

    /**
     * Get the value of lastnameClient
     */ 
    public function getLastnameClient() {
        return $this->lastnameClient;
    }

    /**
     * Set the value of lastnameClient
     *
     * @return  self
     */ 
    public function setLastnameClient($lastnameClient) {
        $this->lastnameClient = $lastnameClient;
        return $this;
    }

    

    /**
     * Get the value of firstnameClient
     */ 
    public function getFirstnameClient(){
        return $this->firstnameClient;
    }

    /**
     * Set the value of firstnameClient
     *
     * @return  self
     */ 
    public function setFirstnameClient($firstnameClient) {
        $this->firstnameClient = $firstnameClient;
        return $this;
    }

    

    /**
     * Get the value of birthDateClient
     */ 
    public function getBirthDateClient() {
        return $this->birthDateClient;
    }

    /**
     * Set the value of birthDateClient
     *
     * @return  self
     */ 
    public function setBirthDateClient($birthDateClient) {
        $this->birthDateClient = $birthDateClient;
        return $this;
    }

    

    /**
     * Get the value of card
     */ 
    public function getCard(){
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 
    public function setCard($card) {
        $this->card = $card;
        return $this;
    }

    

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber() {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    
    // Afficher tous les clients.
    public function displayClients() {
        $query = "SELECT * FROM `clients`";
        $buildQuery = $this->getDb()->prepare($query); // Préparation de la requête
        $buildQuery->execute(); // Envoi de la requête vers la BDD
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC); // On stocke le résultat dans un tableau associatif
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    // Afficher les 20 premiers clients.
    public function displayFirst20Clients() {
        $query = "SELECT * FROM `clients` LIMIT 0,20";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    // N'afficher que les clients possédant une carte de fidélité.
    public function displayClientsWithCard() {
        $query = "SELECT `clients`.`lastName`, `clients`.`firstName` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` INNER JOIN `cardTypes` ON `cards`.`cardTypesID` = `cardTypes`.`id` WHERE `type` = 'Fidélité'"; 
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    // Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Trier les noms par ordre alphabétique.
    public function displayAllClientsLastnameStartsWithM () {
        $query = "SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName` ";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    // Afficher tous les clients avec conditions
    public function displayAllClients () {
        $query = "SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `clients`.`card`, `clients`.`cardNumber`, `cards`.`cardTypesId`, `cardtypes`.`type`  FROM `clients` LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`  LEFT JOIN `cardTypes` ON `cardTypes`.`id` = `cards`.`cardTypesID` ORDER BY `lastName` ";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
        
    }
}
