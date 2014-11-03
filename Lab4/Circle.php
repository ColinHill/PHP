<?php
    require_once("Shape.php");
    class Circle extends Shape
    {
        public function __constructCircle($in_name,$in_radius)
        {
            parent::__constructCircle($in_name,$in_radius);
        }//end constructor

        public function calculateSize()
        {
            $area = 2 * (3.14 * $this->radius);
            return $area;
        }//end calculateSize

    }//end class Circle
?>