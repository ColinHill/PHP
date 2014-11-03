<?php
    require_once("Shape.php");
    class Triangle extends Shape
    {
        public function __constructTriangle($in_name,$in_base,$in_height)
        {
            parent::__constructTriangle($in_name,$in_base,$in_height);
        }//end constructor

        public function calculateSize()
        {
            $area = ($this->base * $this->height) / 2;
            return $area;
        }//end calculateSize

    }//end class Triangle
?>