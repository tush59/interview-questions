<?php 

interface shape {
        public function draw();
}

class rectangle implements shape{
        public function draw(){
                echo 'rectangle is drawn';
        }
}

class square implements shape{
        public function draw(){
                echo 'square is drawn';
        }
}

class roundedsquare implements shape{
        public function draw(){
                echo 'rounded square is drawn';
        }
}

class roundedrectangle implements shape{
        public function draw(){
                echo 'rounded rectangle is drawn';
        }
}

abstract class abstractFactory{

        abstract function getShapeType($type);
}


class roundedShape extends abstractFactory{
        public function getShapeType($type){

                if($type=='roundedrectangle'){
                      return new roundedrectangle(); 
                }

                if($type=='roundedsquare'){
                        return new roundedsquare(); 
                }
        }
}

class getShape extends abstractFactory{
        public function getShapeType($type){

                if($type=='rectangle'){
                      return new rectangle(); 
                }

                if($type=='square'){
                        return new square(); 
                }
        }
}



class factoryProducer {

        public function getFactory($shape){
                if($shape=='rounded'){
                        return new roundedShape();
                }
                if($shape=='shape'){
                        return new getShape();
                }
        }
}

        $producer= new factoryProducer();
        $shapetype= $producer->getFactory('rounded');
        $shape= $shapetype->getShapeType('roundedsquare');
        echo $shape->draw();
?>