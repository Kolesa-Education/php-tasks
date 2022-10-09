<?php

namespace App\Tasks\Task1;

class NumberCollection
{
    public function sumOfArray(array $integers): int
    {
        $sum = 0;
           for ($i=0; $i < count($integers); $i++) {
                $sum += $integers[$i];
           }
        return $sum;
    }
}
$numberCollection = new NumberCollection();
$sum = $numberCollection->sumOfArray([1, 2, 3, 1]);
echo $sum;
