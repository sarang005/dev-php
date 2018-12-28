<?php
namespace EE\calculator\operations;
class Addition implements OperationInterface
{
    function isValid(array $numberArray): bool
    {
        foreach($numberArray as $number) {
            if (!is_numeric($number)) {
                return false;
            }
            return true;
        }
    }

    public function execute(array $numberArray)  
    {
        return array_sum($numberArray);

    }
}








