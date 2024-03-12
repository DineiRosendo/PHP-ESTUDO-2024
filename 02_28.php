<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28-02</title>
</head>
<body>

    <?php //PRIMEIRO EXEMPLO DO DIA?>

    <?php
    $num1 = 2;
    $num2 = 3;

    $soma = $num1 + $num2;

    echo "<table border='1'>";

    echo "<tr>";
        echo"<td>".$num1." + ".$num2 ." = </td>";
        echo "<td>".$soma ." </td>";
    echo "</tr>";
    
    echo "<table>";
    ?>

    <hr>
    <?php //SEGUNDO EXEMPLO DO DIA?>

    <?php
    $price = 20;
    $wallet = 50;
    echo "O produto custa  R$".$price;
    echo "<br>Tenho R$".$wallet;
    if ($price<$wallet) {
        echo "<br>Posso comprar e ainda sobra R$". ($wallet-$price);
    }
    else{
        echo "Dinheiro insuficiente. Preciso de mais R$";
    }
    ?>

    <hr>
    <?php //TERCEIRO EXEMPLO DO DIA?>

    <?php 
    $nr = 0;
    for ($nr=1; $nr<=10; $nr++){
        echo ($nr . "<br>");
    }
    echo ($nr . "Fora do FOR");
    ?>

    <hr>
    <?php //TERCEIRO EXEMPLO DO DIA?>

    <?php 
    echo "Contrução de uma tabela usando FOR";

    echo "<table border='2'>";
    for ($nr=1; $nr<=10; $nr++){
    echo "<tr>";
        echo"<td>Teste</td>";
        echo "<td>".$nr ." </td>";
    echo "</tr>";
    }
    echo "</table>";
    
    ?>

    <hr>
    <?php //QUARTO EXEMPLO DO DIA?>

    <?php
    $produto = 20;
    $carteira = 101;
    $count =0;
    echo"Usamos while para as repetições condicionadas
    a uma condição inicial verdadeira.<br>" ;
    echo"Usamos while para as repetições que permitem
    pelo menos uma execução para depois validar a 
    condição.<br>";
    while($carteira>0){
        $carteira-=$produto;
        if($carteira<0) break;
        $count++;
        echo "<br>Comprei ".$count. " produto(s)";
        echo "<br>Saldo da Carteira: ".$carteira;
    } 
    ?>

    <hr>
    <?php//TABUADA 1 AO 10?>
    <?php
    echo "<table border='1'>";
    for ($i=2; $i<=10; $i++) {
    echo "<tr>";
    for ($j=1; $j<=10; $j++) {
        echo "<td>" . $i*$j . "</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
    ?>
    

  </script>
</body>
</html>