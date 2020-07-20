<?php

require_once('Fight.php');

class Harimau extends Fight {
    function __construct($nameString) {
        $this->attackPower = 7;
        $this->defensePower = 8;
        $this->feet = 4;
        $this->name = $nameString;
        $this->skill = 'lari cepat';
    }
    public function atraksi()
    {
        echo "<br>$this->name sedang $this->skill.<br>"; 
    }
    public function serang($target){
        echo "<br>$this->name sedang menyerang $target->name.<br>"; 
        $target->diserang($this); 
    }
    public function diserang($attacker){
        $this->healthPoint -= $attacker->attackPower/$this->defensePower;
        echo "<br>$this->name sedang diserang.<br>"; 
    }
    public function getInfoHewan(){
        echo "<br>Type: Harimau<br>Name: $this->name<br>Feet: $this->feet<br>
                Skill: $this->skill<br>Health Point: $this->healthPoint<br>
                Attack Power: $this->attackPower<br>Defense Power: $this->defensePower<br>";
    }

}

?>