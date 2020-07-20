<?php

require_once('Fight.php');

class Elang extends Fight {
    function __construct($nameString) {
        $this->attackPower = 10;
        $this->defensePower = 5;
        $this->feet = 2;
        $this->name = $nameString;
        $this->skill = 'terbang tinggi';
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
        echo "<br>Type: Elang<br>Name: $this->name<br>Feet: $this->feet<br>
                Skill: $this->skill<br>Health Point: $this->healthPoint<br>
                Attack Power: $this->attackPower<br>Defense Power: $this->defensePower<br>";
    }
}

?>