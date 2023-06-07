<?php

session_start();

include('Deck.php');

//variáveis de sessão para armazenar informações de forma global
$_SESSION['naipe'] = array('Clubs','Hearts','Spades','Diamonds');
$_SESSION['valores'] = array('Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King', 'Ace');
$_SESSION['values'] = array('Two'=> 2, 'Three'=> 3, 'Four'=> 4, 'Five'=> 5, 'Six'=> 6, 'Seven'=> 7, 'Eight'=> 8, 'Nine'=> 9, 'Ten'=> 10, 'Jack'=> 11,
         'Queen'=> 12, 'King'=> 13, 'Ace'=> 14);



$deck = new Deck();
$deck->makeDeck();
$deck->shuffleDeck();
$deck->showDeck();



