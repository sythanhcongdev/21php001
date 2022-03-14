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
        echo "BT1: Có hai tổ công nhân, tổ một có 12 công nhân, tổ hai nếu có thêm 4 người thì sẽ gấp đôi tổ một. 
        Hỏi tổ hai có bao nhiêu công nhân?";
        echo "<br/>";
        $to1=12;
        $to2=(12*2)-4;
        echo "to 1 co $to1 nguoi";
        echo "to 2 co $to2 nguoi";
        echo "<br/>";

        
        echo "BT2: Cho ban 2000 vnđ đi mua kẹo .Biết : 1 viên kẹo giá 200 vnđ. cứ 2 vỏ kẹo đổi được 1 viên. 
        Hỏi với 2000 vnđ, ban sẽ mua đc bao nhiêu viên kẹo ?";
        echo "<br/>";
        $choban = 2000;
        $giaKeo =200;
        $sumKeo=$choban/$giaKeo;
        $voKeo=$sumKeo;
       
        for( $i=2; $i<=$voKeo;$i++){
            if($voKeo >=$i){
                $sumKeo = $sumKeo + ($voKeo/2);
            }
        }
        echo "sumKeo= $sumKeo";
        echo "voKeo= $voKeo";
        echo"<br/>";
        

        echo "BT3:Túi thứ nhất có 18 viên bi, túi thứ hai gấp hai lần túi thứ nhất. 
        Hỏi phải chuyển bao nhiêu viên bi từ túi thứ hai sang túi thứ nhất để số bi ở hai túi bằng nhau?";
        echo "BT4: Bình có 27 quyển sách, Bình có số sách gấp 3 lần số sách của Minh. 
        Hỏi Bình phải chuyển cho Minh bao nhiêu quyển sách để số sách của Bình gấp đôi số sách của Minh?";

    ?>

</body>
</html>