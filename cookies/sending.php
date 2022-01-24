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
            setcookie('name', $value = $name);
            setcookie('sexe', $value = $sexe);

            echo 'your last name is :'.$_COOKIE['name'].'<br/>';
            echo 'your are : '.$_COOKIE['sexe'].'<br/>';
        ?>
    </main>
    
</body>
</html>