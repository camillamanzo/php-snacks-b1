<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<!DOCTYPE html>
<?php 
    $students = [
        [
            "name" => "dfewrf",
            "surname" => "dfgqeg",
            "notes" => [234234, 2342, 234, 564]
        ],
        [
            "name" => "dsf",
            "surname" => "dfrg",
            "notes" => [635, 8765, 453, 34]
        ],
        [
            "name" => "wewre",
            "surname" => "ewrer",
            "notes" => [234, 547, 756, 3433]
        ],
        [
            "name" => "fege",
            "surname" => "ferferg",
            "notes" => [56456, 4564, 4353, 23]
        ],
    ]; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($students as $student){ ?>
        <li><?php echo $student["name"] . " " . $student[ "surname"] . "'s notes' average is:  " . array_sum($student["notes"]) / count($student["notes"]); ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>
