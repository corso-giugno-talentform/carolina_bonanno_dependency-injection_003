<?php

abstract class Gpu
{
    abstract public function type();
}

class Nvidia extends Gpu
{
    public function type()
    {
        return "Nvidia 5678";
    }
}

class Ati extends Gpu
{
    public function type()
    {
        return "ATI 6789";
    }
}

class Integrated extends Gpu
{
    public function type()
    {
        return "Integrata";
    }
}
