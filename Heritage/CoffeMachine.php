<?php

class CoffeMachine
{
 protected int $cups=10;
 public function select(string $selection)
 {
     $resultat=match ($selection){
         'expresso'=>$this->makeEspreso(),
         default=>'erreur'
     };
     //Match structure de code comme anciene de methode de switch disponivle a partir de match
     return $resultat;
 }
 public function makeEspreso(){
     for($i=0;$i<$this->cups;$i++)
     {
         echo 'Café Espresso n°'.$i +1 .'servi'."<br/>";
     }
 }


}