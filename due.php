<!DOCTYPE html>
<?php 
//Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
//che name sia più lungo di 3 caratteri, 
//che mail contenga un punto e una chiocciola e che age sia un numero. 
//Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            print_r($name . " " . $mail . " " . $age); 
            var_dump($name . " " . $mail . " " . $age); 
        ?>
    </pre>

    <?php 
        if((strlen($name) > 3) && 
            (strpos(($mail),"@")) &&
            (strpos(($mail),".")) &&
            (is_numeric($age)) &&
            (strripos($mail, ".") == (strlen($mail) - 4))){
           echo "accesso riuscito";
        } else {echo "accesso negato";}; 
        echo strripos($mail, ".")
    ?>
</body>
</html>