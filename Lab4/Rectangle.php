<?php
    require_once("Shape.php");
    class Rectangle extends Shape
    {
        protected $length;
        protected $width;

        public function __construct($in_name, $in_length, $in_width)
        {
            $this->length = $in_length;
            $this->width = $in_width;
            parent::__construct($in_name);
        }//end constructor

        public function calculateSize()
        {
            $area = ($this->length * $this->width);
            return $area;
        }//end calculateSize

    }//end class Rectangle
?>