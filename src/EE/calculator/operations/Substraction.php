<?php
namespace EE\calculator\operations;
class Substraction implements OperationInterface
{
    public function isValid(array $numberArray): bool
    {
      
        foreach($numberArray as $number) {
            if (!is_numeric($number)) {
                return false;
            }
            return true;
        }
    }
    public function execute(array $numberArray): float
    {
        return $numberArray[0]-$numberArray[1];
    }
}