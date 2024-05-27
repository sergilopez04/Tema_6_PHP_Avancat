<?php

class MagicMethods{
    private $name;
    private $age;
    private $occupation;
   
    public function __construct(string $name, int $age, string $occupation){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }
    public function __toString(){
        return "Soy la función " .__FUNCTION__. " y el que la creó, ". 
        "se llama $this->name. Tiene $this->age años y quiere trabajar como $this->occupation."; 
    }
}
$instance = new MagicMethods("Sergi", 22, "programador Full Stack PHP");
echo $instance;
?>