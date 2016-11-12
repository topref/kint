<?php

class Kint_Object_Representation_Microtime extends Kint_Object_Representation
{
    public $group = null;
    public $lap = null;
    public $total = null;
    public $avg = null;
    public $i = 0;
    public $mem = 0;
    public $mem_real = 0;
    public $mem_peak = 0;
    public $mem_peak_real = 0;
    public $hints = array('microtime');

    public function __construct($group, $lap = null, $total = null, $i = 0)
    {
        parent::__construct('Microtime');

        $this->group = $group;
        $this->lap = $lap;
        $this->total = $total;
        $this->i = $i;

        if ($i) {
            $this->avg = $total / $i;
        }

        $this->mem = memory_get_usage();
        $this->mem_real = memory_get_usage(true);
        $this->mem_peak = memory_get_peak_usage();
        $this->mem_peak_real = memory_get_peak_usage(true);
    }
}
