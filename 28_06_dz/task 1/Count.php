<?php

namespace Task1;

class Count
{
    public function calc(float $a, float $b, string $c){
        echo $a . " " . $c . " " . $b . " = ";
        switch($c){
            case '+':
                echo $a+$b;
                break;
            case '-':
                echo $a-$b;
                break;
            case '*':
                echo $a*$b;
                break;
            case '/':
                if($b!=0)
                    echo $a/$b;
                else echo "На 0 делить нельзя!";
                break;
            default:
                echo "Ошибка! Данной операции не существует";
        }
    }
}