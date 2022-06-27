<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];


    $namelen = strlen($name);
    $intAge = intval($age);
    $checkmail = strpos($mail, '@');
    $checkpoint = strpos($mail, '.', $checkmail);


    if (isset($name) && isset($age) && isset($mail)) {
        if ($namelen > 3 && $intAge !== 0 && $checkmail && $checkpoint == true) {
            $result = 'Accesso Riuscito';       
        }
        else {
            $result = 'Accesso negato';
        }
        
    } else {
        $result = '';
    }; 
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Name">
        
        <input type="text" name="age" placeholder="Age">
        
        <input type="text" name="mail" placeholder="Mail">
        <button>invia</button>
    </form>
    
    <h1><?=$result?></h1>
    
</body>
</html>