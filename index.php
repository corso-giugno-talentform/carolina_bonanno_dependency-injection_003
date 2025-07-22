<?php

require 'ram.php';
require 'gpu.php';
require 'cpu.php';

class Computer
{

    public $ram;
    public $gpu;
    public $cpu;

    public function __construct(Ram $ram, Gpu $gpu, Cpu $cpu)
    {
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->cpu = $cpu;
    }

    public function checkApple()
    {
        if (!($this->cpu instanceof Apple)) {
            echo "Il PC che hai configurato ha una RAM di " . $this->ram->size() . ", una Scheda video " . $this->gpu->type() . " e un Processore " . $this->cpu->type() . "\n";
        } else {
            echo "Il MacBook che hai configurato ha una RAM di " . $this->ram->size() . ", una Scheda video " . $this->gpu->type() . " e un Processore " . $this->cpu->type() . "\n";
        }
    }
}


$computers = [
    new Computer(new Small(), new Nvidia(), new Intel()),
    new Computer(new Xlarge(), new Integrated(), new Apple()),
    new Computer(new Medium(), new Ati(), new Amd()),
    new Computer(new Large(), new Nvidia(), new Intel()),
];

foreach ($computers as $computer) {
    $computer->checkApple();
};
