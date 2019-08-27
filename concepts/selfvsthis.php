<?php class A{
  
  function showName(){
         
      return self::getName();
      return $this->getName();
      
    }
  
  function getName(){
        echo "Hello from class A"; 
    }
  
}

class B extends A{
  function getName(){
             echo "Hello from class B";   
    }
}

$obj= new B();

 echo $obj->showName(); ?>