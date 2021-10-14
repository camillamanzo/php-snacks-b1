<!DOCTYPE html>

<?php 
    //Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
    //DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    //Stampare ogni data con i relativi post.
    //Qui l'array di esempio: 
    
    $days = [
        "01-01-2001" => [
            "title" => "dsff",
            "author" => "fvefrv",
            "text" => "vsvfsw"
        ],
        "02-02-2002" => [
            "title" => "agaer",
            "author" => "fdvdfv",
            "text" => "fdvdfvf"
        ],
        "03-03-2003" => [
            "title" => "sddvdsv",
            "author" => "fwfvr",
            "text" => "fdbxv"
        ],
        "04-04-2004" => [
            "title" => "sdvsdfvf",
            "author" => "jkiuki",
            "text" => "fdfgwr"
        ],
        "05-05-2005" => [
            "title" => "fdgeg",
            "author" => "sdfswef",
            "text" => "dfwr"
        ],
    ]
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print_r($days); 
        var_dump($days);
    ?>
        

    <?php foreach($days as $key => $value) { ?>

        <h3><?php echo $key; ?></h3>
        <p>title: <?php echo $value["title"] ; ?></p>
        <p>author: <?php echo $value["author"] ; ?></p>
        <p>text: <?php echo $value["text"] ; ?></p>

    <?php } ?>
    
</body>
</html>