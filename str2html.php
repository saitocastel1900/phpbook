<?php
require_once "functions.php";
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
    echo str2html($row[0])."<br>";
    echo str2html($row[4])."<br>"."<br>";
}

