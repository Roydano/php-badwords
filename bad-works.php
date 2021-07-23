<!-- variabili php -->
<?php

$paragrafo = 'Goku, un bambino con la coda di scimmia e la forza smisurata, incontra un giorno una ragazza di nome Bulma. Ella è alla ricerca delle sette sfere del drago, potenti oggetti magici che, se riuniti, permettono di evocare il drago Shenron, creatura che esaudisce un qualunque desiderio a colui che l\'ha richiamato. Goku viene quindi persuaso da Bulma ad aiutarla nella ricerca delle sfere e i due partono per un lungo viaggio, nel corso del quale fanno numerosi incontri. In seguito Goku si sottopone agli allenamenti del Maestro Muten e partecipa a numerose edizioni del Torneo Tenkaichi, un campionato mondiale di arti marziali che si svolge ogni tre anni. Nel corso della sua crescita e del suo sviluppo, affronta numerosi nemici, tra cui Piccolo, figlio e reincarnazione di una creatura demoniaca, diventando così il combattente più forte della Terra.';

$lunghezza_paragrafo = strlen($paragrafo);

// impostiamo la parola il valore da censurare su input
$parola_censurata = $_GET['censura'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Dragon Ball</h2>
     <!-- stampiamo la stringa -->
    <p> <?php echo $paragrafo ?></p>

    <!-- stampiamo la lunghezza -->
    <p> Il paragrafo è lungo <?php echo $lunghezza_paragrafo ?> caratteri.</p>


    <h2>Dragon Ball - Testo Censurato</h2>

    <!-- sostituiamo la parola da censurare con *** -->
    <p>
        <?php
            $testo_censurato = str_replace($parola_censurata, '***', $paragrafo);

            //stampiamo il nuovo paragrafo censurato
            echo $testo_censurato;

        ?>
    </p>

    <!-- stampiamo la lunghezza del nuovo paragrafo   -->
    <p> Il paragrafo è lungo <?php echo $lunghezza_paragrafo_censurato = strlen($testo_censurato); ?> caratteri.</p>
    
</body>
</html>