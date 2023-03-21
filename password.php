<?php
include __DIR__ . '/functions.php';
?>
<h3>La tua password è:</h3>
<h1> <?php echo $_SESSION['password']; ?></h1>  

<?php
session_destroy();
