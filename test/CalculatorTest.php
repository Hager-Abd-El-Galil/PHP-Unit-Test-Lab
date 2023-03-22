<?php

use PHPUnit\Framework\TestCase;

require './src/Calculator.php';

Class CalculatorTest extends TestCase{

    public function testFactorial(){
        
        $FactorialObject = new Calculator;
        
        $this->assertEquals(1,$FactorialObject->Factorial(1)); 
        $this->assertEquals(120,$FactorialObject->Factorial(5)); 
        $this->assertEquals(null,$FactorialObject->Factorial(-3)); 
        $this->assertEquals(null,$FactorialObject->Factorial(1.5)); 
        $this->assertEquals(null,$FactorialObject->Factorial('abc')); 
        $this->assertEquals(null,$FactorialObject->Factorial(true)); 
    }   
}