<?php

$students = [
    [
        "firstName" => "James",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],
        "average" => 0
    ],
    [
        "firstName" => "Richard",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => 0
    ],
    [
        "firstName" => "Mark",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],
        "average" => 0
    ],
    [
        "firstName" => "Thomas",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],
        "average" => 0
    ],
    [
        "firstName" => "Jeremy",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],
        "average" => 0
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>res04-php-minibulletin</title>
</head>
<body>
    <?php   
    foreach($students as $student){
    ?>
    <article class="">
        <header>
            <h1>
                <?php $student["firstName"]." ".$student["lastName"]?>
            </h1>
        </header>
        <section>
            <h2>Notes : </h2>
            <ul>
                <?php foreach($student["grades"] as $grade){?>
                <li><?php
                    $student["average"] = $student["average"] + $grade;
                    echo $grade; 
                    ?>
                </li>
                <?php } ?>
            </ul>
        </section>
        <footer>
            <h3>Moyenne des notes de l'étudiant: <?php echo ($student["average"] / count($student["grades"])) ?> </h3>
        </footer>
    </article>
    <?php } ?>
</body>
</html>