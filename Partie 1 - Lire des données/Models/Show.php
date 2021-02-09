<?php

class Show extends Database {

    private $idShow;
    private $titleShow;
    private $performerShow;
    private $dateShow;
    private $showTypeIdShow;
    private $firstGenreIdShow;
    private $secondGenreIdShow;
    private $durationShow;
    private $startTimeShow;

    /**
     * Get the value of idShow
     */ 
    public function getIdShow()
    {
        return $this->idShow;
    }

    /**
     * Set the value of idShow
     *
     * @return  self
     */ 
    public function setIdShow($idShow)
    {
        $this->idShow = $idShow;

        return $this;
    }

    

    /**
     * Get the value of titleShow
     */ 
    public function getTitleShow()
    {
        return $this->titleShow;
    }

    /**
     * Set the value of titleShow
     *
     * @return  self
     */ 
    public function setTitleShow($titleShow)
    {
        $this->titleShow = $titleShow;

        return $this;
    }

    

    /**
     * Get the value of performerShow
     */ 
    public function getPerformerShow()
    {
        return $this->performerShow;
    }

    /**
     * Set the value of performerShow
     *
     * @return  self
     */ 
    public function setPerformerShow($performerShow)
    {
        $this->performerShow = $performerShow;

        return $this;
    }

    

    /**
     * Get the value of dateShow
     */ 
    public function getDateShow()
    {
        return $this->dateShow;
    }

    /**
     * Set the value of dateShow
     *
     * @return  self
     */ 
    public function setDateShow($dateShow)
    {
        $this->dateShow = $dateShow;

        return $this;
    }

    

    /**
     * Get the value of showTypeIdShow
     */ 
    public function getShowTypeIdShow()
    {
        return $this->showTypeIdShow;
    }

    /**
     * Set the value of showTypeIdShow
     *
     * @return  self
     */ 
    public function setShowTypeIdShow($showTypeIdShow)
    {
        $this->showTypeIdShow = $showTypeIdShow;

        return $this;
    }

    

    /**
     * Get the value of firstGenreIdShow
     */ 
    public function getFirstGenreIdShow()
    {
        return $this->firstGenreIdShow;
    }

    /**
     * Set the value of firstGenreIdShow
     *
     * @return  self
     */ 
    public function setFirstGenreIdShow($firstGenreIdShow)
    {
        $this->firstGenreIdShow = $firstGenreIdShow;

        return $this;
    }

    

    /**
     * Get the value of secondGenreIdShow
     */ 
    public function getSecondGenreIdShow()
    {
        return $this->secondGenreIdShow;
    }

    /**
     * Set the value of secondGenreIdShow
     *
     * @return  self
     */ 
    public function setSecondGenreIdShow($secondGenreIdShow)
    {
        $this->secondGenreIdShow = $secondGenreIdShow;

        return $this;
    }

    

    /**
     * Get the value of durationShow
     */ 
    public function getDurationShow()
    {
        return $this->durationShow;
    }

    /**
     * Set the value of durationShow
     *
     * @return  self
     */ 
    public function setDurationShow($durationShow)
    {
        $this->durationShow = $durationShow;

        return $this;
    }

    

    /**
     * Get the value of startTimeShow
     */ 
    public function getStartTimeShow()
    {
        return $this->startTimeShow;
    }

    /**
     * Set the value of startTimeShow
     *
     * @return  self
     */ 
    public function setStartTimeShow($startTimeShow)
    {
        $this->startTimeShow = $startTimeShow;

        return $this;
    }


    public function __construct(){
        parent::__construct();
    }


    public function displayShows () {
        $query = "SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime` FROM `shows` ORDER BY `shows`.`title`";
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
