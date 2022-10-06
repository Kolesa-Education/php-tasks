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
        // Напишите реализацию метода multiply, который умножает $a на $b
    }

    public function divide($a, $b)
    {
        // Напишите реализацию метода divide, который делит $a на $b. Если деление на $b невозможно, верните null
    }

    // Напишите новый метод pow. Он должен возводить $a в степень $b

    public function run($a, $b, $operator = '+')
    {
        switch ($operator) {
            case '+':
                return $this->add($a, $b);
            case '-':
                return $this->sub($a, $b);
        }

        // Допишите реализацию метода run. Метод принимает два операнда и оператор
        // затем выбирает какой метод этого же класса нужно вызвать с этими операндами
        // Если невозможно делить, метод должен возвращать строку "Divide by zero"
        // Если передан неизвестный оператор, метод должен возвращать строку "Unknown operator: $operator"
    }
}
