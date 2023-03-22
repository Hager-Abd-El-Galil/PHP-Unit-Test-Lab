<?php
class User{
    
    private $name;
    private $email;

    public function __construct($name ,$email)
    {
        $this-> name = $name;
        $this-> email = $email;
    }
    
    public function name($username = null)
    {
        if($username){
            $this-> name = $username; 
        }

        return $this-> name;
    }
    
    public function email($useremail = null)
    {
        if($useremail){
            $this-> email = $useremail; 
        }

        return $this-> email;
    }

}