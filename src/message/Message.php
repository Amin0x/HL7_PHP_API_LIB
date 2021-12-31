<?php

class Message {
    private $header = null;
    private $segments = [];

    public function addSegment(Segment $segment)
    {
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
