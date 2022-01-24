<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>date session</title>
</head>
<body>
    <main>
        <?php
            session_start();
            $_SESSION = $_POST;

            $lname = $_SESSION['lname'];
            $sexe = $_SESSION['sexe'];
            $birth = $_SESSION['birth'];

            echo "your last name is : $lname <br/>";
            echo "your are : $sexe <br/>";
            echo "your birthday is : $birth <br/>";

        ?>
    </main>
    
</body>
</html>