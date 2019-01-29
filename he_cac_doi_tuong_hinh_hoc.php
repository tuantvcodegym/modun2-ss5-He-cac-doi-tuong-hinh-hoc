<?php
class Shap{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is " . $this->name;
    }
}
class Retangle extends Shap{
    public $width;
    public $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function caculateArea(){
        return $this->height * $this->height;
    }
    public function caculatePerimetter(){
        return ($this->width+$this->height)*2;
    }
}
class Circle extends Shap{
    public $radius;
    function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    function caculeteAtea(){
        return ($this->radius*$this->radius) * 3.14;
    }
    function caculatePerimetter(){
        return ($this->radius*2)*3.14;
    }
}
class Cylinder extends Circle{
    public $height;
    function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    function caculeteAtea()
    {
        return parent::caculeteAtea() *2 + parent::caculatePerimetter() * $this->height;
    }
    public function caculateVolum(){
        return parent::caculeteAtea()*$this->height;
    }
}
?>