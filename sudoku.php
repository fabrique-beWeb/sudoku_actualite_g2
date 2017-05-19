<?php
  /**
  * @uteur Daniel Gibaru daniel.gibaru.334@gmail.com apprenant à BeWeB
  * @uteur Giroud Clément giroudclement.devweb@gmail.com apprenant à BeWeB
  * SuDoKu
  **/






$chiffre = mt_rand (1 , 9);
$ligne = [ $chiffre , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 ];
/*
Filtre qui se repete tant qu'il y a plus de 0
*/
while (in_array( 0 , $ligne)) {
  for ($i=0; $i < count($ligne) ; $i++) {
    $chiffre = mt_rand(1, 9);

      while (!in_array($chiffre , $ligne)) {
        $ligne[$i] = $chiffre;
    }
  }
}

print_r($ligne);
