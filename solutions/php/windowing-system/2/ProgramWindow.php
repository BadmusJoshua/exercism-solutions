<?php

class ProgramWindow
{
    //defining properties of the program window
    public $y;
    public $x;
    public $width;
    public $height;

    //defining intial values for the program window
    function __construct()//this runs everytime the class is instantiated
    {
        $this->x = $x = 0;
        $this->y = $y = 0;
        $this->width = $width = 800;
        $this->height = $height = 600;
    }

//method to resize window
        function resize($size){
        $this->height = $size->height;
        $this->width = $size->width;
    }

    //method to move window
        function move($position){
        $this->x = $position->x;
        $this->y = $position->y;
    }

}