<?php


namespace amin0x\nabidh;


class Element
{
    private $components = [];

    protected function setElementValue(int $index, $value){
        if ($index < 0)
            return;

        if($index > count($this->components)){
            for ($i = count($this->components); $i < $index-1 ; ++$i)
            {
                $this->components[$i] = '';
            }
        }

        $this->components[$index-1] = trim($value);
    }

    protected function getElementValue(int $index)
    {
        if (isset($this->components[$index-1]) && !empty($this->components[$index-1]))
        {
            return $this->components[$index-1];
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