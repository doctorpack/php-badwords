
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&family=Oregano:ital@0;1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&display=swap" rel="stylesheet">
  <title>Badwords</title>
</head>
<body>
<h1>BADWORDS</h1>

<form action="" method="GET">
  <label for="overshadow">scrivi parola da censurare:</label>
  <input type="text" name="overshadow" id="overshadow" placeholder="">
  <button><p>invia</p></button>
</form>

<?php
$presentation = 'masterchieff era diretto in una nuova fantastica avventura, ovvero fucili grossi dal calibro grosso per sparare addosso a cose grosse ';

$first_curse = 'masterchief: ';
$first_curse_description = 'qui sierra 117, cortana ti ricevo, mi trovo su nobel six in questo momento, attendo ulteriori istruzioni';

$second_curse = 'Cortana: ';
$second_curse_description = 'qui Cortana, daje masterchief andiamo a sparare in modo ignorante';

$third_curse = 'masterchief: ';
$third_curse_description = 'e se aprissimo un bar lungo spiaggia? potrei usare l armatura per far divertire i bambini';


$full_text = $presentation . ' ' . $first_curse . ' ' . $first_curse_description . ' ' . $second_curse . ' ' . $second_curse_description . ' ' . $third_curse  . ' ' . $third_curse_description;


$badword = "***";
$overshadow = $_GET['overshadow'];


$censured_full_text = str_ireplace($overshadow, $badword, $full_text);
?>


<div><h4><?= $full_text ?></h4></div>
<h5><?= "lunghezza testo " . strlen($full_text) . " parole"; ?></h5>


<h4 id="forb">la parola da censurare è: <span id="word"><?= $overshadow; ?></span></h4>
<h4>testo originale con censura </h4>
<div><h4><?= $censured_full_text ?></h4></div>
<h5><?= "il testo ora è modificato e contiene all'interno " . strlen($censured_full_text) . " parole"; ?></h5>

</body>
</html>