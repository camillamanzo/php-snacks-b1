<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.
-->
<!DOCTYPE html>
<?php 
    $paragraph = "Albert Einstein (/ˈaɪnstaɪn/ EYEN-styne;[4] German: [ˈalbɛʁt ˈʔaɪnʃtaɪn] (About this soundlisten); 14 March 1879 – 18 April 1955) was a German-born theoretical physicist,[5] widely acknowledged to be one of the greatest physicists of all time. Einstein is best known for developing the theory of relativity, but he also made important contributions to the development of the theory of quantum mechanics. Relativity and quantum mechanics are together the two pillars of modern physics.[3][6] His mass–energy equivalence formula E = mc2, which arises from relativity theory, has been dubbed most famous equation.[7] His work is also known for its influence on the philosophy of science.[8][9] He received the 1921 Nobel Prize in Physics for his services to theoretical physics, and especially for his discovery of the law of the photoelectric effect,[10] a pivotal step in the development of quantum theory. His intellectual achievements and originality resulted in Einstein becoming synonymous with genius."; 
    $arr = explode('.', $paragraph);
    print_r($arr);
    var_dump($arr);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php foreach($arr as $par){; ?>
            <li>
                <?php 
                    echo $par;
                ?>
            </li>
        <?php } ?>
    </ol>    
</body>
</html>
