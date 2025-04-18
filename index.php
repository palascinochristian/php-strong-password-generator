<?php
session_start();
require_once 'functions.php'; // Prendo la funzione da functions.php

//Verifico la presenza del parametro lenght per il GET
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
//Se la lunghezza è minore di 8 o maggiore di 16, stampo un messaggio di errore
    if ($length < 8 || $length > 16) {
        $error = "<div class='alert alert-danger'>Please enter a length between 8 and 16.</div>";
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
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Strong Password Generator</h1>
                        <form method="GET" action="index.php">
                            <div class="mb-3">
                                <label for="length" class="form-label">Password Length:</label>
                                <input type="number" class="form-control" id="length" name="length" 
                                       min="8" max="16" placeholder="8" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Generate Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>