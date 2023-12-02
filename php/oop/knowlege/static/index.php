<?php


class Student
{
    private $id;
    private $name;

    public static $schoolName = "BACKKHOA";

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        self::$schoolName = "KHOA HOC";

        self::chaoCo();
    }
    public static function chaoCo()
    {
        echo "Ngẫng cao đầu";
    }
}

$s1 = new Student(1, "Quang");         // instance - thể hiện - đối tượng
$s1 = new Student(2, "Quang1");
$s1 = new Student(3, "Quang2");
$s1 = new Student(4, "Quang3");


var_dump(Student::$schoolName);

Student::chaoCo();
