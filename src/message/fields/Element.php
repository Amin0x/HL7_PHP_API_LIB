<?php


namespace nabidh;


class Element
{
    private $components = [];

    public function addComponent(int $index, $value){
        if(count($this->components) > $index){
            foreach ($this->components as $i => $comp){
                $this->components[$i] = '';
            }
        }

        $this->components[$index-1] = $value;
    }

    public function toString(){
        if (empty($this->components)){
            return '';
        }

        $str = '';
        foreach ($this->components as $component){
            $str .= $component . '^';
        }

        return  $str;
    }
}