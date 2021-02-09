<?php

class ShowType extends Database
{

    private $idShowType;
    private $typeShowType;

    /**
     * Get the value of idShowType
     */
    public function getIdShowType()
    {
        return $this->idShowType;
    }

    /**
     * Set the value of idShowType
     *
     * @return  self
     */
    public function setIdShowType($idShowType)
    {
        $this->idShowType = $idShowType;
        return $this;
    }



    /**
     * Get the value of typeShowType
     */
    public function getTypeShowType()
    {
        return $this->typeShowType;
    }

    /**
     * Set the value of typeShowType
     *
     * @return  self
     */
    public function setTypeShowType($typeShowType)
    {
        $this->typeShowType = $typeShowType;
        return $this;
    }



    public function __construct(){
        parent::__construct();
    }

    // Afficher tous les types de spectacles possibles.
    public function displayShowTypes()
    {
        $query = "SELECT * FROM `showtypes`";
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
