<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $x = 10;
            
            function portee1(){
                echo 'La valeur de $x globale est :'.$x. '<br>';
            }
            function portee2(){
                $x = 5;
                echo 'La valeur de $x locale est : ' .$x. '<br>';
            }
            function portee3(){
                $y = 0;
                $y++;
                echo '$y contient la valeur : ' .$y. '<br>';
            }
            function portee4(){
                $z = 1;
            }
            portee1();
            portee2();
            portee3();
            portee3();
            portee4();
            echo 'La variable locale $z contient : ' .$z;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>