<?php

/*
// $create_at = "2023-10-20";
$today = date("m.d.y");

var_dump($today);
echo $today;

*/

$time_input = strtotime("2011-05-21 08:10:00");

var_dump($time_input);
$date_input = getDate($time_input);
var_dump($date_input);


$d = new DateTime('2023-10-23');
var_dump($d);


class Book
{
    private int $id;
    private string $title;
    private string $author;
    private DateTime $created;
}

/*
[
    {
        "id": 3,
        "title": "Cuốn theo chiều gió",
        "autho": "Nguyễn ngọc ánh"
        "created_at" : "2023-10-20"
    },
    {
        "id": 4,
        "title": "Cuốn theo chiều gió",
        "autho": "Nguyễn ngọc ánh"
        "created_at" : "2023-10-20"
    }
]
*/