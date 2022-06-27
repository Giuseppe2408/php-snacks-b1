<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $arrGames = [
        [
            [
                'name' => "Olimpia Milano",
                'di_casa' => true,
                'point' => 55
            ],
            [
                'name' => "Cantù",
                'di_casa' => false,
                'point' => 60
            ],
                       
        ],
        [
            [
                'name' => "Roma",
                'di_casa' => true,
                'point' => 90
            ],
            [
                'name' => "Napoli",
                'di_casa' => false,
                'point' => 80
            ],
        ],
        [
            [
                'name' => "Bergamo",
                'di_casa' => true,
                'point' => 100
            ],
            [
                'name' => "Cagliari",
                'di_casa' => false,
                'point' => 130
            ],
        ],
        [
            [
                'name' => "Bologna",
                'di_casa' => true,
                'point' => 76
            ],
            [
                'name' => "Torino",
                'di_casa' => false,
                'point' => 68
            ],
        ],
        [
            [
                'name' => "Venezia",
                'di_casa' => true,
                'point' => 105
            ],
            [
                'name' => "Verona",
                'di_casa' => false,
                'point' => 80
            ],
        ],
    ];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
	$arr_length = count($arrGames);
	for ($i = 0; $i < $arr_length ; $i++) {
		$partita = $arrGames[$i];	
		?>
		<div> 
            <?= "{$partita[0]['name']} - {$partita[1]['name']} | {$partita[0]['point']}-{$partita[1]['point']}" ?>
		</div>
        <?php
	} ?> 
</body>
</html>