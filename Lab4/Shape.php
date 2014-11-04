<?php
    abstract class Shape
    {
        //variables
        protected $name;

        //abstract methods
        abstract public function calculateSize();
        abstract public function resize();

        //public methods
        public function __construct($in_name)
        {
            $this->name = $in_name;
        }//end constructShape

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
