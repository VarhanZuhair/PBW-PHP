<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Learning PHP</title>
    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
            margin-left : 100px;
            margin-right : 100px;
            padding-top : 30px;
        }
    </style>
</head>
<body>
    <!-- No. 1 -->
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

    <hr>
    <!-- No 2 -->
        <?php
        $string = array("Saya adalah Abdullah", "Saya punya seekor kucing yang sangat lucu", "Setiap hari ku ajak dia bermain");
        $finds = array("Abdullah", "kucing", "lucu", "bermain");
        $ganti = array("Abdurrahman", "bebek","gemuk", "berenang");
        ?>
    <h2>Sebelum diganti : </h2>
    <h2>
        <?php
        foreach($string as $string_value){
            echo ($string_value. ", ");
        }
        ?>
    </h2>
    <h2>Setelah di ganti : </h2>
    <h2>
        <?php
        $arr2 = str_replace($finds, $ganti, $string);
    
        foreach($arr2 as $arr2_value){
            echo ($arr2_value. ", ");
        }
        ?>
    </h2>

    <hr>
    <!-- No. 3 -->
    <?php
    $str = "My Password";
    $user = "username";
    ?>

    <h2>
        <?php
        echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$user));
        ?>
    </h2>
    <h2>
        <?php
        echo sprintf("The sha1 hashed password of %s is: %s\n",$str, sha1($str.$user));
        ?>
    </h2>
    <h2>
        <?php
        echo sprintf("The gost hashed password of %s is: %s\n",$str, hash('gost', $str. $user));
        ?>
    </h2>
    
    <hr>

    <!-- No. 4 -->
    <h2>Bilangan Prima</h2>
    <?php
        function is_prima($number){
            if($number == 1){
                return false;
            }
            if($number == 2){
                return true;
            }
            $x = sqrt($number);
            $x = floor($x);

            for($i = 2; $i <= $x; ++$i){
                if($number % $i == 0){
                    break;
                }
            }

            if($x == $i-1){
                return true;
            } else {
                return false;
            }
        }


        function cekPrima($n, $m){
            $jumlah = 0;
            for($i = $n; $i <= $m; $i++){
                if(is_prima($i)){
                    echo $i.", ";
                    $jumlah++;
                }
            }
            echo "<br>jumlah bilangan prima ".$jumlah.".";
        }
    ?>

    <h2><?php echo cekPrima(1, 50);?></h2>
</body>
</html>