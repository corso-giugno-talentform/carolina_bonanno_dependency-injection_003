<?php

abstract class Ram
{
    abstract public function size();
}

class Small extends Ram
{
    public function size()
    {
        return "8 GB";
    }
}

class Medium extends Ram
{
    public function size()
    {
        return "16 GB";
    }
}

class Large extends Ram
{
    public function size()
    {
        return "32 GB";
    }
}

class Xlarge extends Ram
{
    public function size()
    {
        return "64 GB";
    }
}
