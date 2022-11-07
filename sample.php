<html>
<?php
$a=$_POST['a'];
if(10>=$a)
{
    echo "入力された値は10以上です";
}else{
    echo htmlspecialchars($a,ENT_QUOTES,'UTF-8');
}
?>
</html>
