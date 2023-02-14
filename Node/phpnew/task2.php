<?php
require_once ('functions.php');
echo "Проверить кратность двух чисел:"."<br/>";
comparison(116,4);
echo "Вывести квадрат большего из двух чисел:"."<br/>";
squareIsMore(14,18);
$month=2;
echo "Вывести количество дней в месяце: Месяц="."$month."."<br/>";
countOfDays($month);
$year=2023;
echo "Оперделить , является ли год високосным: Год="."$year."."<br/>";
is_leap_year($year);
$x=50;
$y=75;
//echo "X="."$x.".", Y="."$y."."<br/>";
//painting($x,$y);
$N1=321;
$N2=0;
echo "<span style='color:red;'>N1="."$N1"."; N2="."$N2"."<br/>";
echo "<span style='color:blue;'>Вывести результат сложени двух чисел, если они оба кратны 3,
 или результат деления первого числа на второе"."<br/>";
multiplicity_3($N1,$N2);