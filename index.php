<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file index.php.

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale.

[BONUS] Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrareall'utente.

[BONUS] Milestone 4
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). -->
<!-- Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<form>
    <label for="number">Scegli la Lunghezza della tua password</label>
    <input type="number" name="number" id="number">
    <button type="submit">Genera Password</button>
</form>


<?php
if(isset($_GET['number'])){
    $length = $_GET['number'];
    
} else{
    $length = 0;
}


$password = createPassword($length);
echo "La Tua password è: $password";


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

</body>
</html>