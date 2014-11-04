<?php
    require_once("Shape.php");
    class Triangle extends Shape
    {
        protected $base;
        protected $height;

        public function __construct($in_name, $in_base, $in_height)
        {
            $this->base = $in_base;
            $this->height = $in_height;
            parent::__construct($in_name);
        }//end constructor

        public function calculateSize()
        {
            $area = ($this->base * $this->height) / 2;
            return $area;
        }//end calculateSize

        public function resize()
        {
            $area = pi() * pow($this->radius,2);
            return $area;
        }//end resize

    }//end class Triangle
?>