<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 2</title>
</head>
<body>
    <?php if ((strlen($name) >= 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age))) { ?>
        <p><?php echo 'Accesso riuscito' ?></p>
    <?php } else { ?>
        <p><?php echo 'Accesso negato' ?></p>
    <?php } ?>
</body>
</html>