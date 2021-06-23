<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "localhost"; $dbname = "ring_db"; $user = "root"; $pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("
                  UPDATE User
                  SET mail='v.durand@edhec.com'
                  WHERE id=2
                ");
                $sth->execute();
                
                //On affiche le nombre d'entrées mise à jour
                $count = $sth->rowCount();
                print('Mise à jour de ' .$count. ' entrée(s)');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>