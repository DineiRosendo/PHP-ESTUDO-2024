
<?php
$ouroTotal = 950;
$pontosVida = 100;
?>

    <?php
    $name = "Gandalf";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa Gandalf</title>
</head>
<body>
    
    <h1>Muito prazer, <?php echo $name;?> . Você está na Terra Média.</h1>
    <p>Você tem <?= $pontosVida ?> pontos de vida e possui <?= $ouroTotal ?> de ouro.</p>   
    <p>Em uma emboscada, <?= $name ?> foi atacado por Orcs, durante o combate <?= $name ?> perdeu 55 pontos de vida.</p>
    <? 
    ?>
    <p>O pontos de vida de <?= $name ?> agora é <?= $pontosVida - 55 ?></p>
    <p><?= $name ?> gastou 700 moedas na loja de itens mágicos da cidade, 
    comprando poções de cura e uma espada. Seu ouro total agora é <?= $ouroTotal - 700?>.</p>

</body>
</html>