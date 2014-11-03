<?php
    abstract class Shape
    {
        //variables
        protected $name;
        protected $length;
        protected $width;
        protected $base;
        protected $height;
        protected $radius;

        //abstract methods
        abstract function calculateSize();

        //public methods
        public function __constructCircle($in_name,$in_radius)
        {
            $this->name = $in_name;
            $this->radius = $in_radius;
        }//end constructCircle

        public function __constructRectangle($in_name,$in_length,$in_width)
        {
            $this->name = $in_name;
            $this->length = $in_length;
            $this->width = $in_width;
        }//end constructRectangle

        public function __constructTriangle($in_name,$in_base,$in_height)
        {
            $this->name = $in_name;
            $this->base = $in_base;
            $this->height = $in_height;
        }//end constructTriangle

        public function getShape()
        {
            return ($this->name);
        }//end getShape

        public function getLength()
        {
            return ($this->length);
        }//end getLength

        public function getWidth()
        {
            return ($this->width);
        }//end getWidth

        public function getBase()
        {
            return ($this->base);
        }//end getBase

        public function getHeight()
        {
            return ($this->height);
        }//end getHeight

        public function getRadius()
        {
            return ($this->radius);
        }//end getRadius

    }//end abstract class Shape
?>
