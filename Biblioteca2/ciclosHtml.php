<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor{
            color:brown;
        }
    </style>
</head>
<body>
    <?php for($i =100;$i<120;$i++):?>
        <p><?=$i?></p>
    <?php endfor;?>

    <?php
        $nomes=['fermen','bungu'];
        echo '<ul>';
        foreach ($nomes as $nome){
            echo "<li>$nome</li>";
        }echo '</ul>'
    ?>

    <ul>
        <?php foreach($nomes as $nome):?>
            <li><?= $nome?></li>
        <?php endforeach;?>
    </ul>

    
</body>
</html>