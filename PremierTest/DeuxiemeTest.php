<?php

class Movie {
    
    //private $name ="Nom Film";
    //private $duration = 120;
    //private $description="Une description";
    
    function __construct($name="Nom Film",$duration=0,$description="")
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->description = $description;
    }
    
    public function getName() 
    {     
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getDuration() 
    {     
        return $this->duration;
    }
    
    public function setDuration($duration = 0)
    {
        $this->duration = $duration;
    }
    
    public function getDescription() 
    {     
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
}

$movie = new Movie("Salut ",50," je sers a rien");

echo $movie->getName();
//$movie->setName("Taxi 3");
//echo $movie->getName();
echo $movie->getDuration();
echo $movie->getDescription();


