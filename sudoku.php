<?php
  /**
  * @uteur Daniel Gibaru daniel.gibaru.334@gmail.com apprenant à BeWeB
  * @uteur Giroud Clément giroudclement.devweb@gmail.com apprenant à BeWeB
  * SuDoKu
  **/

function sudoku(){

    $chiffre = mt_rand (1 , 9);
    $lignes = array ( "ligne1" => array( $chiffre , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 ),
                      "ligne2" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne3" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne4" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne5" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne6" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne7" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne8" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0),
                      "ligne9" => array( 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0 , 0)
                    );
    /*
    Filtre ligne1  qui se repete tant qu'il y a plus de 0
    */

    while (in_array( 0 , $lignes["ligne1"])) {
      for ($i=0; $i < count($lignes) ; $i++) {
        $chiffre = mt_rand(1, 9);

          while (!in_array($chiffre , $lignes["ligne1"])) {
            $lignes["ligne1"][$i] = $chiffre;
        }
      }
    }
print_r($lignes["ligne1"]);
}
sudoku();
