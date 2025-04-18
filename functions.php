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
?>