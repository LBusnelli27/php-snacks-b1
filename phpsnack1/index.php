<?php
    $matches = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraFuori' => 'Cantu',
            'punteggio' => '55-60'
        ],
        [
            'squadraCasa' => 'Bergamo',
            'squadraFuori' => 'Venezia',
            'punteggio' => '70-100'
        ],
        [
            'squadraCasa' => 'Bergamo',
            'squadraFuori' => 'Olimpia Milano',
            'punteggio' => '50-70'
        ],
        [
            'squadraCasa' => 'Roma',
            'squadraFuori' => 'Torino',
            'punteggio' => '85-30'
        ]
    ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 1</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($matches); $i++) { ?>
            <li><?php echo $matches[$i]['squadraCasa']; ?> - <?php echo $matches[$i]['squadraFuori']; ?> | <?php echo $matches[$i]['punteggio']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>