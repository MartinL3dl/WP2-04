<?php
$computer = array(
    'CPU' => "AMD RYZEN 7 2700X",
    'GPU' => "NVIDIA GeForce GTX 1060 6GB",
    'RAM' => "32GB",
    'SSD'=> "nějaká M2 s 248GB kterou jsem koupil v alze",
    'keyboard' => "klávesnice",
    'mouse' => "myš se želeeezem ve spodní části",
    'display' => "cool freesync monitor s 144hz - made in CHINAAAA",
    'mainboard' => "PRIME X470-PRO",
    'fans' => "2 větráčky",
    'case' => "Krabice 9000",
    'headphones' => "sluchátka s mikrákem, real swag + to svítí mě do ksichtu když spim 12/10 IGN"
  );
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Můj PC</h2>
<ul>
<li><?=$computer['CPU'] ?> </li>
<li><?=$computer['GPU'] ?> </li>
<li><?=$computer['RAM'] ?> </li>
<li><?=$computer['SSD'] ?> </li>
<li><?=$computer['keyboard'] ?> </li>
<li><?=$computer['mouse'] ?> </li>
<li><?=$computer['fans'] ?> </li>
<li><?=$computer['display'] ?> </li>
<li><?=$computer['mainboard'] ?> </li>
<li><?=$computer['case'] ?> </li>

</ul>
</body>
</html>