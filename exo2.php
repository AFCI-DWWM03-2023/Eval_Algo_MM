<?php

echo"************a)une execution***************";
 function TableMulti($nbre){
    for($i=1; $i<=10; $i++){
        $question = readline("Entrez le nommbre pour le lequel vous voulez la table de multiplication :");

        echo $i ."x" .$nbre."=".$i * $nbre ."\n";
    }
}
    