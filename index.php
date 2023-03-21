<?php
$password_source = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

$password_length = $_GET['password_length'] ?? false;

$password = '';

for ($i = 0; $i < $password_length; $i++) {
    $random_index = rand(0 , (strlen($password_source) - 1));
    $password = $password . $password_source[$random_index];

    // var_dump($random_index, $password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrongPass</title>
</head>
<body>
    
    <form action="." method="GET">
        <div>
            <label for="length">Lunghezza Password</label>
            <input type="number" id="length" name="password_length">
            <button type="submit">Invia</button>
        </div>
    </form>

    <?php
    if (isset($password)) {
    ?>
    <h3>La tua password è:</h3>
    <h1> <?php echo $password ?></h1>    
    <?php
    }
    ?>

</body>
</html>