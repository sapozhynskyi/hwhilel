<?php
class Color
{

    private $red, $green, $blue;
    public function __construct($red,$green,$blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }
    private function setRed($red)
    {
        if ($red >= 0 && $red <= 255) {
          $this->red = $red;
        } else {
            $this->red = null;
        }
    }
    private function setGreen($green)
    {
        if ($green >=0 && $green<=255) {
            $this->green = $green;
        } else {
            $this->green = null;
        }
    }
    private function setBlue($blue)
    {
        if ($blue >=0 && $blue<=255) {
            $this->blue = $blue;
        } else {
            $this->blue = null;
        }
    }

    public function getRed()
    {
        if($this->red !== null) {
            return $this->red;
        } else {
            return "Invalid range Red";
        }

    }
    public function getBlue()
    {
        if($this->blue !== null) {
            return $this->blue;
        } else {
            return "Invalid range Blue";
        }
    }
    public function getGreen()
    {
        if($this->green !== null) {
            return $this->green;
        } else {
            return "Invalid range Green";
        }
    }

    public function comparison($object1,$object2){
        if ( $object1 == $object2){
            return true;
        }
        else return false;
    }
    public static function Random(){
        $red = mt_rand(0,255);
        $green = mt_rand(0,255);
        $blue = mt_rand(0,255);
        $randRgb = new Color($red,$green,$blue);
        return $randRgb;
    }
    public function mix($Color){
        $this->red += $Color->red;
        $this->green += $Color->green;
        $this->blue += $Color->blue;
        $newColor = new Color($this->red/2, $this->green/2, $this->blue/2);
        return $newColor;

    }
}
