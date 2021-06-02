<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($apresentar=true){
            echo 'tchweeeeeee e e ee ';
        }else{
            echo 'uaaaaaa  eeeeee';
        }
    ?>
    <?php if(true):?>
        <p>esse paragrafo</p>
    <?php elseif(true):?>
        <p>aquele  paragrafo</p>
    <?php else:?>
        <p>aquele  paragrafo</p>
    <?php endif;?>
</body>
</html>