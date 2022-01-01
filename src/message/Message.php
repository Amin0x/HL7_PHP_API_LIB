<?php

class Message {
    private $header = null;
    private $segments = [];

    public function addSegment($segment)
    {
        $all = ['AL1','DRG','DG1','EVN','GT1','IN1','MRG','MSA','MSH','NK1','NPU',
        'NTE','OBR','OBX','ORC','PD1','PID','PR1','PV1','PV2','RXA','RXC','RXE','RXO','RXR','SPM','TQ1','TXA','ZFH','ZSC','ZSH'];
        
        $class = strtoupper(get_class($segment));
        if(!in_array($class, $all))
            return;

        if($class === "MSH"){
            $this->header = $segment;
            return;
        }
       
        $this->segments[] = $segment;
    }

    public function getSegments(){
        return $this->segments;
    }

    public function setHeader(MSH $header)
    {
        $this->header = $header;
    }

    public function getHeader()
    {
        return $this->header;
    }

}
