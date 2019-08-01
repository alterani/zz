<?php 

$opts = array('http' => array('header' => "User-Agent:MyAgent/1.0\r\n"));
$context = stream_context_create($opts);

$content = file_get_contents('https://booking.resdiary.com/widget/Mini/Portrait/PizzaeMozzarella/6674',FALSE, $context);
//$content = file_get_contents('https://booking.resdiary.com/widget/standard/PizzaeMozzarella/6674');
//$content = file_get_contents('https://booking.resdiary.com/widget/FixedSize/PizzaeMozzarella/6674');

$content = str_replace('http://www.resdiary.com">', 'https://pizzaemozzarella.it">', $content);
$content = str_replace('Reserve Now', 'PRENOTA', $content); 
$content = str_replace('Powered by ResDiary', 'Prenota Online', $content); 

$content = str_replace('</head>','<link rel="stylesheet" type="text/css" href="https://www.pizzaemozzarella.it/css/resdiary.css"/></head>', $content);
$content = str_replace('None Available','Posti Esauriti - Cambiare data', $content);
$content = str_replace('"None Available"','"Posti Esauriti - Cambiare data"', $content);

//$content = str_replace('</head>','<link rel="stylesheet" type="text/css" href="https://www.pizzaemozzarella.it/css/resdiary.css"/></head>', $content);

// $content = str_replace('</head>','<script type="text/javascript" src="https://www.pizzaemozzarella.it/js/resdiary.js"></script></head>', $content);


echo $content;


