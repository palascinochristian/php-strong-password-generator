<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Pasword Generator</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <form method="GET" action="index.php">
        <label for="length">Password Length:</label>
        <input type="number" id="length" name="length" min="8" max="16" placeholder="8" required>
        <button type="submit">Generate Password</button>
    </form>

    <?php
    // Definisco una funzione per generare la password a cui passo la lunghezza desiderata come argomento
    function generatePassword($length = 0) {
        // Definisco i caratteri che possono essere usati per generare la password inclusi caratteri speciali e numeri
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?';
        $password = ''; // Inizializzo la password come stringa vuota
        // Genero la password randomicamente con un ciclo for
        for ($i = 0; $i < $length; $i++) {
            // Seleziono un carattere casuale dalla stringa di caratteri
            // e lo concateno alla password
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    //Verifico la presenza del parametro lenght per il GET
    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        //Se la lunghezza è minore di 8 o maggiore di 16, stampo un messaggio di errore
        
        if ($length < 8 || $length > 16) {
            echo "<p style='color: red;'>Please enter a length between 8 and 16.</p>";
        } else {
            //Altrimenti genero la password
            $password = generatePassword($length);
        }
        echo "<h2>Your Generated Password:</h2>";
        echo "<p><strong>$password</strong></p>";
    }

    ?>
</body>
</html>