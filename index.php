<!DOCTYPE html>
<?php 
    
//Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. 
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema.

$squadre = array (
    array(
        "uno" => "squadraUno",
        "due" => "squadraDue",
        "puntiUno" => 22,
        "puntiDue" => 18
    ),
    array(
        "uno" => "squadraTre",
        "due" => "squadraQuattro",
        "puntiUno" => 12,
        "puntiDue" => 32
    ),
    array(
        "uno" => "squadraCinque",
        "due" => "squadraSei",
        "puntiUno" => 34,
        "puntiDue" => 56
    ),
    array(
        "uno" => "squadraSette",
        "due" => "squadraOtto",
        "puntiUno" => 12,
        "puntiDue" => 18
    ),
    array(
        "uno" => "squadraNove",
        "due" => "squadraDieci",
        "puntiUno" => 56,
        "puntiDue" => 34
    )
  );
  

  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack one</title>
</head>
<body>
    <pre>

        <?php 
            print_r($squadre); 
            var_dump($squadre);
        ?>

    </pre>

    <ul>
        <?php foreach($squadre as $squadra){ ?>
        <li>
            <?php echo $squadra["uno"]; ?>
            <?php echo $squadra["due"]; ?>
            <?php echo $squadra["puntiUno"]; ?>
            <?php echo $squadra["puntiDue"]; ?>
        </li>
        <?php } ?>
    </ul>
 
    
</body>
</html>