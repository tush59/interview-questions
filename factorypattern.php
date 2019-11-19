<?php 
interface shape {
        public function draw();
}

class circle implements shape{
    public function draw(){
        echo "circle is drawn";
    }
}

class rectangle implements shape{
    public function draw(){
        echo "rectangle is drawn";
    }
}

class triangle implements shape{
    public function draw(){
        echo "triangle is drawn";
    }
}

class getshape{
    public function returnShape($shapeName){
        switch ($shapeName){
            case 'circle': return new circle();
                    break;
            case 'rectangle': return new rectangle();
                    break;
            case 'triangle': return new triangle();
                    break;
        }
}
}
$shape =new getshape();
$obj= $shape->returnShape('rectangle');
echo $obj->draw();

?>