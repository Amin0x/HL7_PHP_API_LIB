<?php


namespace amin0x\nabidh;


class PID_Group
{
    private PID $pid;
    private $pd1 = [];
    private PV1_group $PV1_group;
    private $in1 = [];
    private $gt1 = null;
    private $al1 = [];
}