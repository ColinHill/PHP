<?php
    require_once("Shape.php");
    require_once("iResizable.php");

    class Triangle extends Shape implements iResizable
    {
        protected $base;
        protected $height;
        protected $resize;

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

        public function resize($in_resize)
        {
            $this->resize = $in_resize;
            $this->resize = $this->resize /100;
            $this->height = $this->height * $this->resize;
            $area = ($this->base * $this->height) / 2;
            return $area;
        }//end resize
    }//end class Triangle
?>