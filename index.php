<?php


$number = $_GET['number'];

function randomPassword($number) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $password = '';
    for ($i = 0; $i < $number; $i++) {
        $password = $password.$alphabet[rand(0,strlen($alphabet)-1)];
    }
    return $password;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Strong password generator</h1>
            <h3>Genera una password sicura</h3>
        </header>

        <main class="container-main">
            <form action="./index.php" method="GET">
                <label for="number">Lumghezza Password</label>
                <input class="numeri-password" type="number" name="number" id="number" placeholder="numero">
                <button class="send-button">INVIA</button>
            </form>
            <p class="pssw">La tua password è: <?php echo randomPassword($number)?></p>
        </main>
    </div>
   
</body>
</html>