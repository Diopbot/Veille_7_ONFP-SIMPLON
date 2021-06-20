
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
            $prenom = "Elimane";
            $nom = "Diouf";
            $age = 28;
            $prez = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans";
            $prez2 = 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai '.$age. ' ans';
            
            echo "Je m'appelle " .$prenom. " et j'ai " .$age. " ans <br>";
            echo 'Je m\'appelle ' .$prenom. ' et j\'ai ' .$age. ' ans <br>';
            
            echo $prez. '<br>' .$prez2;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>