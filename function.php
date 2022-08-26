<?php

class Calculation
{
    public function Summation($num1, $num2)
    {
        echo "<br>summation: " . $num1 + $num2;
    }

    public function Subtraction($num1, $num2)
    {
        echo "<br>Subtraction: " . $num1 - $num2;
    }
    public function Multiplication($num1, $num2)
    {
        echo "<br>Multiplication: " . $num1 * $num2;
    }
    public function Division($num1, $num2)
    {
        echo "<br>Division: " . $num1 / $num2;
    }
}
