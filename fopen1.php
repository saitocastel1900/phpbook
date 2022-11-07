<?php
$fp=fopen("bookdata.csv","r");
//
/**/
if($fp==false)
{
echo "読み込み失敗";
exit;
}
while ($row=fgetcsv($fp))
{
    //XSS対策
    echo htmlspecialchars($row[0],ENT_QUOTES,"UTF-8")."<br>";
    echo htmlspecialchars($row[4],ENT_QUOTES,"UTF-8")."<br>"."<br>";
}

