<?php
  /**
  * @uteur Daniel Gibaru daniel.gibaru.334@gmail.com apprenant à BeWeB
  * @uteur Giroud Clément giroudclement.devweb@gmail.com apprenant à BeWeB
  * SuDoKu
  **/

function sudoku(){
    $chiffre = mt_rand ( 1 , 9 );
    $a = 3;
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

    while (in_array( 0 , $lignes["ligne1"] , TRUE)) {
      for ($i=0; $i < count($lignes) ; $i++) {
        $chiffre = mt_rand(1, 9);

          while (!in_array($chiffre , $lignes["ligne1"])) {
            $lignes["ligne1"][$i] = $chiffre;
        }
      }
    }

///////////////////////////////////////////////////////////////////////////////////

    while (in_array( 0 , $lignes["ligne" . $a  ] , true )) {
        for ($i=1; $i <= 9; $i++) {
            $chiffre = mt_rand(1, 9);

              while (!in_array($chiffre , array_column($lignes, 0))) {
                $lignes["ligne".$i][0] = $chiffre;
            }
        }
        if($lignes == 0){
            echo "poney";
        }
        $a = $a + 1;
    }
    print_r($lignes);

}
sudoku();
