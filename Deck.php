<?php

include('Card.php');

class Deck{

    var $all_cards;

    function __construct(){
        
        $this->makeDeck();
        $this->all_cards = array();

    }

    function shuffleDeck(){
        shuffle($this->all_cards);
    }

    function makeDeck(){
        foreach($_SESSION['naipe'] as $i=>$k){
            foreach($_SESSION['valores'] as $j=>$m){
                $this->all_cards[] = new Card($k,$m);
            }
        }
      
        return $this->all_cards;
    }

    function showDeck(){
        
      echo "<ol type='1'>";
        for($i=0;$i<count($this->all_cards);$i++){
            echo "<li>" . $this->all_cards[$i]->valor_str . " of " . $this->all_cards[$i]->naipe."</li>";
            echo "<br>";
        }
        echo "<ol/>";
    }





}