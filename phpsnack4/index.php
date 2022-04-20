<?php
    $randomNumbers = [];

    while (count($randomNumbers) < 15) { 
        $randomInt = rand(0, 100);
        if (!in_array($randomInt, $randomNumbers)) {
            $randomNumbers[] = $randomInt;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 4</title>
</head>
<body>
    <ul>
    <?php for ($i=0; $i < count($randomNumbers); $i++) { ?>
        <li><?php echo $randomNumbers[$i]; ?></li>
        
    <?php } ?>
    </ul>
</body>
</html>