<?php

class Form{

    public $data;
    public $surround = 'p';
    public function __construct($data=array()){        
        $this->data = $data;    
    }


   


    public function input($name){
        return $this->surround(
            '<input type="text" name="'.$name.'" value="'. $this->getValue($name).'">'
        );
    }

    public function submit(){
        return $this->surround( '<p><button type="submit">Send</button>');
    }

    private function  surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    private function getvalue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

}

?>