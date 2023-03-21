<?php
include __DIR__ . "/functions.php";
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