<?php

abstract class Cpu
{
    abstract public function type();
}

class Intel extends Cpu
{
    public function type()
    {
        return "Intel";
    }
}

class Amd extends Cpu
{
    public function type()
    {
        return "AMD";
    }
}

class Apple extends Cpu
{
    public function type()
    {
        return "Apple Silicon";
    }
}
