<?php
Class Calculator{

    public function Factorial($num){
        if(is_int($num) && $num >= 0){
            if ($num == 0) {
                return 1;
              } else {
                return $num * $this->factorial($num - 1);
              }
            return $num; 
        }else{
            return null;
        }   
    }
}