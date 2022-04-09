<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php 
    $string = "D3 Rekayasa Perangkat Lunak Aplikasi"
    ?>

    <h1>
        <?php
        echo substr($string, 3);
        ?>
    </h1>

    <h1>
        <?php 
        echo substr($string, -8);
        ?>
    </h1>

    <h1>
        <?php
        echo substr($string, 3, 24);
        ?>
    </h1>
    
</body>
</html>