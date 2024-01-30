<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

		<form method="get" action="functions.php">
			<!-- <input type="number" name="piero" placeholder="a caso" /> -->
			<label for="number"></label>
			<input
				type="number"
				name="number"
				placeholder="Digita la lunghezza della tua password"
			/>
			<button type="submit">Genera Password</button>
		</form>


	</body>

	<style>

	body{
		background-color: #333;
	}

		h2,
		h3 {
			text-align: center;
			margin-bottom: -10px;
		}

		form {
			display: flex;
			justify-content: center;
			margin-top: 20px;
		}
		input {
			padding: 5px;
			width: 300px;
			margin-right: 20px;
		}

		button {
			width: 150px;
			padding: 4px;
		}
	</style>
</html>
