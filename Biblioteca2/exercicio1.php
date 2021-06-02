<?php 

    $dados =[
        ['joão','M','Portugal'],
        ['ana','F','Brasil'],
        ['Carlos','M','Angola'],
        ['Matilde','F','Moçambique']
    ];

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
    <table>
    
        <thead>
            <tr>
                <th>Nome</th>
                <th>Género</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $dado):?>
                <tr>
                    <td><?=$dado[0] ?></td>
                    <td><?=$dado[1] ?></td>
                    <td><?=$dado[2] ?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    
    </table>
</body>
</html>