<?php

class StopWatch
{
    private $startTime;
    private $endTime;


    public function __construct()
    {
        $this->startTime = microtime(true);
    }
    public function start()
    {
        $this->startTime = microtime(true);
    }
    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}


$s = new StopWatch();
echo "Bắt đầu chạy: ";
$s->start();
// code A

// Mất 

// code B
$s->stop();
echo "Thời gian thực hiện: " . $s->getElapsedTime();
