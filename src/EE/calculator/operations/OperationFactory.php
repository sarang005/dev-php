<?php
namespace EE\calculator\operations;


class OperationFactory
{
    public static function getOperation(string $name){
        switch($name){
            case'add':
            case'addition':
            case'sum':
            return new Addition();
            case'multiply':
            case'product':
            return new Multiply();
            case'minus':
            case'sub':
            case'substract':
            return new Substraction();
            case'divide':
            case'/':
            return new Divide();
            default:
            throw new CalculatorException("Not Supported Operations");
        }
    }
}


