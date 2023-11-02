<?php
$a = 0;
$b = 0;
$c = 0;
$x = 0;
$delta = $b² - 4 * $a * $c;

echo"Racine de l'equation du 2nd degré y=ax²+bx+c";
$a = readline("quelle est la valeur de a " ==5);
$b =readline("Quel est la valeur de b"==3);
$c = readline("Quelle est la valeur de c" ==2);
echo"L'équation ne possède pas de racine réelle : \n
 d = -31";

 switch($$question = readline("Voulez vous continuer ? :" . ("O/N" ))){
    case 1:
        ;
            if ($question =="O"){
                $a = readline("quelle est la valeur de a " ==-2);
                $b =readline("Quel est la valeur de b"==0.6);
                $c = readline("Quelle est la valeur de c" ==0.5);
                echo"L'équation possède 2 racines distinctes : \n
                    d = 4.36";
                echo"x1 = -0.37201532544553 \n
                    x2 = 0.67201532544553";
        
            
                }else{
                    echo "Au revoir à bientôt!";
                } 
        
                 
 break;
 
    case 2:
        $question = readline("Voulez vous continuer ? :" . ("O/N" ));
            if ($question =="O"){
                $a = readline("quelle est la valeur de a " ==0);
                $b =readline("Quel est la valeur de b"==2);
                $c = readline("Quelle est la valeur de c" ==0.5);
                echo"L'équation est du 1er degré! \n
                   L'équation s'annule pour x=-(c/d) : -0.25";
                           
                }else{
                    echo "Au revoir à bientôt!";
                }  
        
            
break;
    case 3:
        $question = readline("Voulez vous continuer ? :" . ("O/N" ));
            if ($question =="O"){
                $a = readline("quelle est la valeur de a " ==0);
                $b =readline("Quel est la valeur de b"==0);
                $c = readline("Quelle est la valeur de c" ==0.5);
                echo"L'équation n'en est plus une!!! \n";
                   
                           
                }else{
                    echo "Au revoir à bientôt!";
                } 
 break;
 
 case 4:
    
             
}
