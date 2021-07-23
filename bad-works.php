<!-- variabili php -->
<?php

$paragrafo = 'Son Goku, un bambino con la coda di scimmia e la forza smisurata, incontra un giorno una ragazza di nome Bulma. Ella è alla ricerca delle sette sfere del drago, potenti oggetti magici che, se riuniti, permettono di evocare il drago Shenron, creatura che esaudisce un qualunque desiderio a colui che l\'ha richiamato. Goku viene quindi persuaso da Bulma ad aiutarla nella ricerca delle sfere e i due partono per un lungo viaggio, nel corso del quale fanno numerosi incontri. In seguito Goku si sottopone agli allenamenti del Maestro Muten e partecipa a numerose edizioni del Torneo Tenkaichi, un campionato mondiale di arti marziali che si svolge ogni tre anni. Nel corso della sua crescita e del suo sviluppo, affronta numerosi nemici, tra cui Piccolo, figlio e reincarnazione di una creatura demoniaca, diventando così il combattente più forte della Terra.';

$lunghezza_paragrafo = strlen($paragrafo)

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
    <h1>Dragon Ball</h1>
     <!-- stampiamo la stringa -->
    <p> <?php echo $paragrafo ?></p>

    <!-- stampiamo la lunghezza -->
    <p> Il paragrafo è lungo <?php echo $lunghezza_paragrafo ?> caratteri.</p>
    
</body>
</html>






<!-- Creare una variabile con un paragrafo di testo a vostra scelta.

Stampare a schermo il paragrafo e la sua lunghezza.

Una parola da censurare viene passata dall'utente tramite parametro GET.

Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->