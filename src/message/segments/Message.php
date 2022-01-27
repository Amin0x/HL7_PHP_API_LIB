<?php
namespace amin0x\nabidh;

class Message {

    private $segments = [];

    public function addSegment($segment)
    {
        $all = ['AL1','DRG','DG1','EVN','GT1','IN1','MRG','MSA','MSH','NK1','NPU',
        'NTE','OBR','OBX','ORC','PD1','PID','PR1','PV1','PV2','RXA','RXC','RXE','RXO',
            'RXR','SPM','TQ1','TXA','ZFH','ZSC','ZSH'];
        
        $class = strtoupper(get_class($segment));
        if ($pos = strrpos($class, '\\')){
            $class = substr($class, $pos + 1);
        }

        if(!in_array($class, $all))
            return;

        if($class === "MSH")
        {
            $this->setHeader($segment);
            return;
        }

        $this->segments[] = $segment;
    }

    public function getAllSegments(){
        return $this->segments;
    }

    public function setHeader(MSH $header)
    {
        if(!empty($this->segments) && ($this->segments[0] instanceof MSH)){
            $this->segments[0] = $header;
            return;
        }

        array_push($this->segments, $header);
    }

    public function getHeader()
    {
        if(!empty($this->segments) && ($this->segments[0] instanceof MSH)){
            return $this->segments[0];
        }
        return null;
    }

    public function toString()
    {
        $str = '';
        foreach ($this->segments as $segment) {
            $str .= $segment . '\r';
        }
        return $str;
    }

    public static function isMSH($segment): bool
    {
        if( !is_array($segment) && ($segment instanceof MSH))
        {
            return true;
        }

        return false;
    }

    public static function isPID($segment): bool
    {
        if( !is_array($segment) && ($segment instanceof PID))
        {
            return true;
        }

        return false;
    }

    public static function isEVN($segment): bool
    {
        if( !is_array($segment) && ($segment instanceof EVN))
        {
            return true;
        }

        return false;
    }

    public static function isPV1($segment): bool
    {
        if( !is_array($segment) && ($segment instanceof PV1))
        {
            return true;
        }

        return false;
    }

}
