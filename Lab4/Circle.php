<?php
    require_once("Shape.php");
    class Circle extends Shape
    {
        protected $radius;
        protected $resize;

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

        public function resize($in_resize)
        {
            $this->resize = $in_resize;
            $this->resize = $this->resize /100;
            $this->radius = $this->radius * $this->resize;
            $area = pi() * pow($this->radius,2);
            return $area;
        }//end resize
    }//end class Circle
?>