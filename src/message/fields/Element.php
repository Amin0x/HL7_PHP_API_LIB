<?php


namespace amin0x\nabidh;


class Element
{
    private $components = [];

    protected function setElementValue(int $index, $value){
        if(count($this->components) > $index){
            foreach ($this->components as $i => $comp){
                $this->components[$i] = '';
            }
        }

        $this->components[$index-1] = trim($value);
    }

    protected function getElementValue(int $index)
    {
        if (isset($this->components[$index]) && !empty($this->components[$index]))
        {
            return $this->components[$index];
        }

        return '';
    }

    public function __toString(){
        if (empty($this->components)){
            return '';
        }

        $str = '';
        foreach ($this->components as $component){
            $str .= $component . '^';
        }

        return  rtrim($str, '^');
    }
}