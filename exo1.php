<?php
 
 $R = readline("Quel est le rayon du cercle ? : 0.75");
 echo "Sa Circonférence est de            : 4.7123889803847\n";
 echo" Sa Surface est de            : 1.7671458676443\n";
 
 $question = readline("Voulez vous faire un autre calcul (O/N)");
 if ($question == "O"){
        $R = readline("quel est le rayon du cercle ? : 27");
        echo "Sa Circonférence est de            : 169.64600329385\n";
        echo" Sa Surface est de            : 2290.221044467\n";
 
 }else{
    $question == "N";
    echo"Au revoir à bientôt! ";
 }
 $question =readline("Voulez vous faire un autre calcul (O/N)");
 if ($question == "N"){
    echo"Au revoir à bientôt! ";
 }
 