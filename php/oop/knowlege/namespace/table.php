<?php

namespace Html;

class Table
{
    public string $title = "";
    public int $numRows = 0;

    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
class User
{
    private $username;
}
