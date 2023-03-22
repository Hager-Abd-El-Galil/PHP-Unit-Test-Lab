<?php

use PHPUnit\Framework\TestCase;

require './src/User.php';

Class UserTest extends TestCase{
    public function testUser(){
        
        $newUser = new User('Radwa','Radwa@gmail.com');
        
        $this->assertEquals('Radwa',$newUser->name()); 
        $this->assertEquals('Rowan',$newUser->name('Rowan')); 

        $this->assertEquals('Radwa@gmail.com',$newUser->email()); 
        $this->assertEquals('Omnia@gmail.com',$newUser->email('Omnia@gmail.com'));
    } 
    
}