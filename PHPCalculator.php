<?php
$num1  = (double)readline("Enter the first number: ");
$calculationType  = readline("Choose between:\n1) Addition\n2) Subtraction\n3) Multiplication\n4) Division\n: ");
$num2  = (double)readline("Enter the second number: ");

switch ($calculationType) {
    case "1":
        echo $num1 + $num2;
        break;
    case "2":
        echo $num1 - $num2;
        break;
    case "3":
        echo $num1 * $num2;
        break;
    case "4":
        echo $num1 / $num2;
        break;
    default:
        echo $calculationType . " is not a valid function";
}
?>