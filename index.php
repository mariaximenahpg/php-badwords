<?php
$paragraph = "La panna cotta è uno dei dolci al cucchiaio più conosciuti e apprezzati non solo in Italia, ma anche all'estero Per la semplicità della sua preparazione, il gusto particolarmente delicato e il modo elegante in cui può essere impiattata e condita, è diventato un classico dolce di fine pasto perfetto per ogni occasione. Le origini precise di questo dolce sono sconosciute, si sa solo che è nato nella zona delle Langhe piemontesi all'inizio del Novecento.";
// var_dump($paragraph);
$badWord = $_GET["badWord"];
$replaceWith = "***";
$paragraphCensored = str_replace($badWord, $replaceWith, $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <h3>PARAGRAFO:</h3>
    <p><?php echo $paragraph;?></p>
    <h3>Lunghezza paragrafo: <?php echo strlen ($paragraph); ?></h3>
    <h3>Parola da censurare:</h3>
    <form action="">
        <input type="text" name="badWord">
        <button type="submit">CENSURA</button>
    </form>
    <h3>PARAGRAFO CENSURATO:</h3>
    <p><?php echo $paragraphCensored;?></p>
    <h3>Lunghezza del paragrafo: <?php echo strlen($paragraphCensored); ?></h3>
</body>
</html>