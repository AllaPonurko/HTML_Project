<?php
function addNumbersColor($n1, $n2, $color)
{
    echo "<span style='color:black;'>Sum is: <span style='color:".$color.";'>".
        ($n1+$n2)."</span><br/>";
}
function replace($n1,$n2)
{
    echo "<span style='color:black;'>$n1 $n2"."<br/>";
    echo "<span style='color:red;'>$n2 $n1"."<br/>";

}
function greeting($name,$age,$color1,$color2)
{
    echo "Hello, my name is "."<span style='color:".$color1.";'>"."$name"."<br/>";
    echo "I am "."<span style={'color:".$color2.";'}>"."$age"."<br/>";
}
function comparison($n1,$n2)
{
    if($n1%$n2==0)
        echo "$n1 "."кратно"." $n2"."<br/>";
    else echo "условие не соблюдено"."<br/>";
}
function squareIsMore($n1,$n2)
{
    if($n1>$n2) {
        $sq = $n1 * $n1;
        echo "$sq"."<br/>";
    }
    else
    {$sq=$n2*$n2;
        echo "$sq"."<br/>";
    }
}
function countOfDays($n)
{
    switch ($n) {
        case "1":echo "Days in the month 31" . "<br/>";break;
        case "2":echo "Days in the month 28" . "<br/>";break;
        case "3":echo "Days in the month 31" . "<br/>";break;
        case "4":echo "Days in the month 30" . "<br/>";break;
        case "5":echo "Days in the month 31" . "<br/>";break;
        case "6":echo "Days in the month 30" . "<br/>";break;
        case "7":echo "Days in the month 31" . "<br/>";break;
        case "8":echo "Days in the month 31" . "<br/>";break;
        case "9":echo "Days in the month 30" . "<br/>";break;
        case "10":echo"Days in the month 31" . "<br/>";break;
        case "11":echo "Days in the month 30" . "<br/>";break;
        case "12":echo "Days in the month 31" . "<br/>";break;
        default: "Data is not correct" . "<br/>";
    };


}
