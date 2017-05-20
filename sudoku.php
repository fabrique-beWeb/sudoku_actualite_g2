<?php
  /**
  * @uteur Daniel Gibaru daniel.gibaru.334@gmail.com apprenant à BeWeB
  * @uteur Giroud Clément giroudclement.devweb@gmail.com apprenant à BeWeB
  * SuDoKu
  **/

function sudoku(){
    $chiffre = mt_rand ( 1 , 9 );
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

    while ( in_array( 0 , $lignes["ligne1"] , TRUE)) {
        for ( $i = 0 ; $i < count( $lignes ) ; $i++ ) {
            $chiffre = mt_rand(1, 9);

            while ( !in_array( $chiffre , $lignes[ "ligne1" ] )) {
                $lignes[ "ligne1" ][ $i ] = $chiffre;
            }
        }

    //principe de decoupe par ligne pour en faire des carrés de 3 sur 3 une ligne"1" devient  cell
        if(!in_array( 0 , $lignes["ligne1" ] , true )){
            $cell1 = array ( array_slice($lignes['ligne1'] , 0 , 3),
                             array_slice($lignes['ligne1'] , 3 , -3),
                             array_slice($lignes['ligne1'] , 6 ),
                          );
        }
    }
    echo " | " . array_sum($lignes["ligne1"]) . " | ";


///////////////////////////////////////////////////////////////////////////////////



    $i = 2;
    while (in_array( 0 , $lignes["ligne".$i ] , true )) {
        for ($i=2; $i <= 9; $i++) {
            for ($r=0; $r <= 8 ; $r++) {
            $chiffre = mt_rand(1 , 9);
              while (!in_array($chiffre , $lignes["ligne".$i])) {
                $lignes["ligne".$i][$r] = $chiffre;
                $chiffre = mt_rand(1 , 9);
            }

        }
        //ligne de test
        echo " | " . array_sum($lignes["ligne".$i]) . " | ";
    }
        $i++;
    }
    print_r($lignes['ligne1']);
    print_r($cell1);
}
sudoku();
