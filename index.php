<?php
    $testo = 'Mi sono rotto il cavolo, non è veramente possibile questa storia, e che cavolo, non se ne può più.';
    $testoMod = str_replace('cavolo', '***', $testo);
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
        <p> <?php echo $testo; ?></p>
        <p>La lunghezza del paragrafo è: <?php echo strlen($testo); ?></p>
        <hr>
        <p> <?php echo $testoMod; ?></p>
        <p>La lunghezza del paragrafo è: <?php echo strlen($testoMod); ?></p>
    </body>

</html>