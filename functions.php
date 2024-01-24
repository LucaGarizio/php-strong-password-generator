<?php
if(isset($_GET['number'])){
    $length = $_GET['number'];
    
} else{
    $length = 0;
}


$password = createPassword($length);
echo '<h2>La Tua password è: </h2>';
echo '<h3>' . $password . '</h3>';


function createPassword ($length) {
    // crea un array vuoto per la password che verrà popolato attarverso il ciclo for 
    $psw = array();
    // stabilisci i caratteri che la password dovrà contenere
    $characters = "0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ!@#$%^&*";

    // cicla fino a quando non raggiunge la lunghezza stabilita dall'utente
    for ($i = 0; $i < $length; $i++) { 
        // prende un numero random di caratteri tra 0 e la lunghezza della stringa
        $addRandom = rand(0, strlen($characters) - 1);
        // Aggiungere il carattere corrispondente all'indice generato alla password
        $password[] = $characters[$addRandom];
    }
    // unisci tutti i caratteri in una sola stringa e ritorna il valore
    return implode($password);
}


?>