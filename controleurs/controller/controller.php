<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php

            $hello = 'hello';
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $sexe = $_POST['sexe'];
            $birth = $_POST['birth'];
            $email = $_POST['email'];

            if ($sexe == 'm') {
                $hello = $hello.' sir';
            } else {
                $hello = $hello.' miss';
            }

            echo "<h2> $hello $fname </h2>";
            echo "your lsast name is : $lname <br/>";
            echo "your genre is : $sexe <br/>";
            echo "your birthday is : $birth <br/>";
            echo "your email  is : $email <br/>"; ?>
    
    </main>
</body>
</html>
