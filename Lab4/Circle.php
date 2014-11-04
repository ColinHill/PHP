<?php
    require_once("Shape.php");
    class Circle extends Shape
    {
        protected $radius;

        public function __construct($in_name, $in_radius)
        {
            $this->radius = $in_radius;
            parent::__construct($in_name);
        }//end constructor

        public function calculateSize()
        {
            $area = pi() * pow($this->radius,2);
            return $area;
        }//end calculateSize

    }//end class Circle
?>