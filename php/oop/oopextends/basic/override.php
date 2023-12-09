<?php

class Cha
{
    public function veGai()
    {
        echo 'ru xem phim';
    }
}
class Con extends Cha
{
    public function veGai()
    {
        echo 'ru di nhà nghỉ';
    }
}

$kiet = new Con();
$hieu  = new Con();

$kiet->veGai();
