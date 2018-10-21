<?php 

//$content = file_get_contents('https://booking.resdiary.com/widget/Mini/Portrait/PizzaeMozzarella/6674');
//$content = file_get_contents('https://booking.resdiary.com/widget/standard/PizzaeMozzarella/6674');
$content = file_get_contents('https://booking.resdiary.com/widget/FixedSize/PizzaeMozzarella/6674');

$content = str_replace('http://www.resdiary.com">', 'https://pizzaemozzarella.it">', $content);
$content = str_replace('Reserve Now', 'PRENOTA', $content); 
$content = str_replace('Powered by ResDiary', 'Prenota Online', $content); 
$content = str_replace('<title>ResDiary Widget</title>', '<title>Pizza & Mozzarella - Prenota Online</title><meta name="description" content="Prenotazioni Online - Booking Online - Prenota un tavolo - Settimo Milanese - Seguro - Milano">', $content); 
$content = str_replace('</head>','<link rel="stylesheet" type="text/css" href="https://www.pizzaemozzarella.it/css/resdiary.css"/></head>', $content);
$content = str_replace('"Let us know if you have any special requests and we will do our best to assist. Please note that special requests cannot be guaranteed."','"Note"', $content);
$content = str_replace('Contact Details','Contatti', $content);
$content = str_replace('"First Name"','"Nome"', $content);
$content = str_replace('"Last Name"','"Cognome"', $content);
$content = str_replace('"Mobile Number"','"Numero Cellulare"', $content);
$content = str_replace('"Email Address"','"Indirizzo Mail"', $content);
$content = str_replace('"A First Name is Required"','"Inserisci Nome"', $content);
$content = str_replace('"A Last Name is Required"','"Inserisci Cognome"', $content);
$content = str_replace('"A Valid Telephone Number is Required"','"Inserisci Numero corretto"', $content);
$content = str_replace('"A Valid Email is Required"','"Inserisci indirizzo mail"', $content);
$content = str_replace('"Please Check Your Details"','"Controlla Dati Prenotazione"', $content);
$content = str_replace('Please Check Your Details','Controlla Dati Prenotazione', $content);
$content = str_replace('"No Time Selected"','"Seleziona una data"', $content);
$content = str_replace('No Time Selected','Seleziona una data', $content);
$content = str_replace('None Available','Posti Esauriti - Cambiare data', $content);
$content = str_replace('"None Available"','"Posti Esauriti - Cambiare data"', $content);

$content = str_replace('<body>','<body> <a href="https://pizzaemozzarella.it" style="position: absolute; top:8px; right:8px; z-index: 1010000"> X <span class="glyphicon glyphicons-remove-circle"> </span> </a>
', $content);




//$content = str_replace('Next','Avanti', $content);



echo $content;


