<?php

namespace App\Practices\Practice1;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {   if ($b === 0) {
            return null;
        } 
        return $a / $b;
    }

    public function pow($a, $b)
    {
        return $a ** $b;
    }

    public function run($a, $b, $operator = '+')
    {
        switch ($operator) {
            case '+':
                return $this->add($a, $b);
            case '-':
                return $this->sub($a, $b);
            case '*':
                return $this->multiply($a, $b);
            case '/':
                if ($b === 0) {
                    return 'Divide by zero';
                }
                return $this->divide($a, $b);
            case '^':
                return $this->pow($a, $b);
            default:
                return "Unknown operator: $operator";
        }
    }
}
