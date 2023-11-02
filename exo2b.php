<?php

echo "***********b) plusieurs execution***********";

    function TableMulti($nbre){
        for($i=1; $i<=10; $i++){
            $question = readline("Entrez le nommbre pour le lequel vous voulez la table de multiplication :");
    
            echo $i ."x" .$nbre."=".$i * $nbre ."\n";

           
        }
        $question =readline("Voulez vous continuer ?");
        if(strlen($question =="O")){
            $question = readline("Entrez le nommbre pour le lequel vous voulez la table de multiplication :");
            echo $i ."x" .$nbre."=".$i * $nbre ."\n"; 
        }else{
            $question == "N";
            echo "Au revoir à bientôt!";

        }
        
    
        
    }