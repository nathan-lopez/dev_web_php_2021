<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>formulaire</title>

</head>
<body>
    <form method="post" class="form" action="controller/controller.php">
        <div>
            your first name: <input type="text" name="fname"> </br>
            your last name: <input type="text" name="lname"> </br>
            your are : <select name="sexe" id="">
                <option value="m">I am a man</option>
                <option value="w">I am a woman</option>

            </select></br>
            your day of birth: <input type="number" name="birth"> </br>
            email: <input type="email" name="email"> </br>
            <input type="submit" value="Submit"> </br>

        </div>
    </form>
</body>
</html>