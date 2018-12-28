<?php

require __DIR__.'/vendor/autoload.php';
use Symfony\Component\Console\Application;
use EE\calculator\CalculatorCommand;


$application = new Application();
$calculator= new CalculatorCommand();                                                   
$application->add($calculator);
$application->setDefaultCommand($calculator->getName(),true);
$application->run();