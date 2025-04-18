<?php
session_start();
require_once 'functions.php'; // Prendo la funzione da functions.php

//Verifico la presenza del parametro lenght per il GET
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    //Se la lunghezza è minore di 8 o maggiore di 16, stampo un messaggio di errore
    if ($length < 8 || $length > 16) {
        $error = "<p style='color: red;'>Please enter a length between 8 and 16.</p>";
    } else {
        //Altrimenti genero la password la salvo in sessione e reindirizzo a result.php
        $_SESSION['password'] = generatePassword($length);
        header('Location: result.php');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <form method="GET" action="index.php">
        <label for="length">Password Length:</label>
        <input type="number" id="length" name="length" min="8" max="16" placeholder="8" required>
        <button type="submit">Generate Password</button>
    </form>
</body>
</html>