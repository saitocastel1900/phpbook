<?php
$weight=(float)$_POST["weight"];
if (0<$weight)
{
    if ($weight<3){
        echo "適正体重は".$weight*$weight*22 ."kgです";
    }else
    {
        echo "身長は3より小さい値を入力してください";
    }
}else
{
    echo "身長を正しく入力してください";
}

?>