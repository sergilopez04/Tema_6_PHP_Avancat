<?php



function __toString($name){
    return "Soy la función " .__FUNCTION__. " y el que la creó 
    se llama $name"; 
}

echo __toString("Sergi");
?>