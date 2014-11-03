<?php
    require_once("Shape.php");
    class Rectangle extends Shape
    {
        public function __constructRectangle($in_name,$in_length,$in_width)
        {
            parent::__constructRectangle($in_name,$in_length,$in_width);
        }//end constructor

        public function calculateSize()
        {
            $area = ($this->length * $this->width);
            return $area;
        }//end calculateSize

    }//end class Rectangle
?>