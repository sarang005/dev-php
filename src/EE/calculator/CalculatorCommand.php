<?php
namespace EE\calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use EE\calculator\operations\OperationFactory;


class CalculatorCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'calculate';

    protected function configure()
    {
        $this->setName('calculate')
             ->setDescription('Runs the Calculator.')
             ->addArgument('operator',InputArgument::REQUIRED,'Enter operator')
             ->addArgument('numbers',InputArgument::REQUIRED,'Enter number');

        ;;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $numbers=$input->getArgument('numbers');
        $numberArray=explode(',',$numbers);
        try{
        $operation=OperationFactory::getOperation($input->getArgument('operator'));
        $output->write($operation->execute($numberArray));

        }
        catch(CalculatorException $exception){
        $output->write($exception->getMessage());

        }
   
    }   
}   