<?php
    $testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est laborum deleniti itaque ab doloribus quibusdam, modi fugiat quasi. Esse libero ratione et maiores? Vel fugiat totam voluptate autem assumenda? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est laborum deleniti itaque ab doloribus quibusdam, modi fugiat quasi. Esse libero ratione et maiores? Vel fugiat totam voluptate autem assumenda? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est laborum deleniti itaque ab doloribus quibusdam, modi fugiat quasi. Esse libero ratione et maiores? Vel fugiat totam voluptate autem assumenda?';
    $input = $_GET["userInput"];
    $testoMod = str_replace($input, '***', $testo);
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
        <form action="index.php" method="get">
            <p>Inserisci una parola da censurare: <input type="text" name="userInput"></p>
            <input type="submit" value="Submit">
        </form>
        <p> <?php echo $testo; ?></p>
        <p>La lunghezza del paragrafo è: <?php echo strlen($testo); ?></p>
        <hr>
        <p> <?php echo $testoMod; ?></p>
        <p>La lunghezza del paragrafo è: <?php echo strlen($testoMod); ?></p>
    </body>

</html>