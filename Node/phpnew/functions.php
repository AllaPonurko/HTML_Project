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
