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
        $x = 5;
        $y = 10;
        echo $x+$y;
        echo "<br/>";
        $userName = "Name";
        function sum(){
            $z=11115;
            echo "Tesst function $z";
        }
        echo "<br/>";
            sum();
        function total($x, $y){
            echo $x+$y;
        }
        echo "<br/>";
        total(5, 13);
        echo "<br/>";
        $a=100;
        if($a<100){
            echo "x be hon 100";
        }else{
            echo "x lon hon 100";
        }
    ?>
</body>
</html>