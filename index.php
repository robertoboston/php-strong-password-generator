<?php
$password_length = $_GET['number'];
var_dump($password_length);



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
        </main>
    </div>
   
</body>
</html>