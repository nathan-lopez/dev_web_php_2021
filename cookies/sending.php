<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cookies</title>
</head>
<body>
    <main>
        <?php

            $name = $_POST['lname'];
            $sexe = $_POST['sexe'];

            // session ne fonctionne pas avec les données de la methode post directement
            /*
            * setcookie prend en paremettre :
            * NAME du cookie
            * VALUE du cookie qui sera accessible avec le nom
            * EXPIRES_OR_OPTIONS : le temps qu'il mettra, fixer la vleur avec time()
            * en y ajoutant le nombre en seconde ainsi 30 jours = time()*3600*24*30
            * path (str): le chemin sur le serveur sur lequel le cookie sera disponible, si la valeur vaut '/' il sera partout
            * doamin (str): sous-doamine
            * secure (bool) : true le cookies ne sera envoyer que si la connexin est securisé
            * httponly : true le cookie ne sera accessibleque par le protocol HTTP
            * option : le tableau
            * la valeur de retour de cette fonction est soit true soit false , true si le cookie fontionne et false dans le cas inversels
            * les données de cookies sont accessible dans le tableau super global $_COOKIE
            */
            setcookie('name', $value = $name, time() * 3600);
            setcookie('sexe', $value = $sexe);

            echo 'your last name is :'.$_COOKIE['name'].'<br/>';
            echo 'your are : '.$_COOKIE['sexe'].'<br/>';
        ?>
    </main>
    
</body>
</html>