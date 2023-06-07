<?php

class Card{

    var $naipe;
    var $valor_str;
    var $value;


    function __construct($naipe,$valor_str){
        
        $this->naipe = $naipe;
        $this->valor_str = $valor_str;
        $this->value = $_SESSION['values'][$valor_str];  

    }

    
    


}