<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    
    <title>Document</title>


</head>
<body class="body">
    <main>
        <?php

            $hello = 'hello';

            if (isset($_POST['lname'])) {
                $lname = $_POST['lname'];
            } else {
                $lname = 'unkwonws';
            }

            if (isset($_POST['birth'])) {
                $birth = $_POST['birth'];
            } else {
                $birth = 'unkwonws';
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $email = 'unkwonws';
            }

            if ((isset($_POST['fname'])) and (isset($_POST['sexe']))) {
                $sexe = $_POST['sexe'];
                $fname = $_POST['fname'];

                if ($sexe == 'm') {
                    $hello = $hello.' sir';
                    $sexe = 'man';
                } else {
                    $hello = $hello.' miss';
                    $sexe = 'woman';
                }

                echo "<h2> $hello $fname </h2>";
            }
            echo "your last name is : $lname <br/>";
            echo "your are : $sexe <br/>";
            echo "your birthday is : $birth <br/>";
            echo "your email  is : $email <br/>"; ?>
    
    </main>
</body>
</html>
