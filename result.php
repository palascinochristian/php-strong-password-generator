<?php 
session_start();
// Se la password non è settata nella sessione, ritorno alla index.php
if (!isset($_SESSION['password'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Result</title>
</head>
<body>
    <h2>Your Generated Password:</h2>
    <p><strong><?php echo $_SESSION['password']; //Recupero la password dalla sessione ?></strong></p>
    <a href="index.php">Generate another password</a>
</body>
</html>