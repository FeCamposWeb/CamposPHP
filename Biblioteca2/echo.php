<?php

    $nome="Fernando";
    $apelido="Campos";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $nome. ' '.$apelido ?><br>
    <?php echo "$nome $apelido"?><br>
    <?php echo $nome, ' ',$apelido?>
    <?php echo "<h3>$nome $apelido</h3>"?>
    <?php echo "<h3 class=\"texto-vermelho\"> $nome $apelido</h3>"?>
    <?php echo '<h3 class="texto-vermelho">',"$nome $apelido","</h3>"?>
    <?='<h3 class="texto-vermelho">',"$nome $apelido","</h3>"?>
    <p><?= substr($apelido,0,4)?></p>
</body>
</html>