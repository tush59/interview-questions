<?php

class DatabaseConnector{

 private static  $obj=null;

 private final function __construct(){

    echo  __CLASS__.' can be initialized only once';
  }

  public static function getInstance(){
        
    if(!isset(self::$obj)){
        self::$obj=new DatabaseConnector();
    }
    return self::$obj;
  }
  public final function __destruct(){
    echo "called";
  }
}

        $obj1=DatabaseConnector::getInstance();
        $obj2=DatabaseConnector::getInstance();
        //$ob3= new DatabaseConnector(); // cannot create because constructor is 
        echo $obj1==$obj2;
        


?>