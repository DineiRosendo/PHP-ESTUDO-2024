<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas</title>
</head>
<body>

    <h1>
    <?php echo "";?>
    <?php

    echo "<h1>Olá visitante \u{1F920}</h1> " ;
    date_default_timezone_set("America/Sao_Paulo");
    echo "<p>Hoje é dia ".date("d/m/Y");
    echo "<p>Espero que esteja bem.</p>";
    echo "<p>A hora atual é ".date("H:i:s");?>

    <?php
    date_default_timezone_set('Europe/Paris');
    echo "<p>Horário atual da França: " . date('H:i:s'); 
    ?>
    
    <?php
    date_default_timezone_set('Asia/Tokyo');
    echo "<p>Já no japão o horário é: " . date('H:i:s');;  
    ?>

    </h1>
    

    

</body>
</html>