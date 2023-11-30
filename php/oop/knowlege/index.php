<?php
/*
$clothes = "xanh";
$glass = true;
$age = 24;
*/

class Person
{
    // public: chỉ phạm vi truy cập tới thuộc tính và phương thức, truy cập mọi nơi
    // private: chỉ truy cập trong phạm vi lớp
    private $clothes;            // thuộc tính của đối tương: đặc điểm của đối tượng
    private $glass;
    private $age;
    private $bankNumber;
    private $name;

    // Constructor: hàm để khởi tạo đối tương
    // Nếu không định nghĩa hàm khởi tạo thì php tự tạo 1 hàm khởi tạo không tham só
    public function __construct($name, $clothes, $glass, $age, $bankNumber)
    {
        $this->name = $name;
        $this->clothes = $clothes;
        $this->glass = $glass;
        $this->age = $age;
        $this->bankNumber = $bankNumber;
    }

    // phương thức: hành vi
    public function getBankNumber()
    {
        return $this->bankNumber - $this->bankNumber * 80 / 100;
    }
    public function sayHello()
    {
        return "Tôi là {$this->name} tôi mặc áo màu {$this->clothes}";
    }
    public function setBankNumber($bankNumber)
    {
        $this->bankNumber = $this->bankNumber + $bankNumber;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}

$hoang  = new Person("Hoang", "xanh", true, 24, 5000000000);
$thai = new Person("Thai", "đen", false, 30, 3000);


// echo $hoang->bankNumber;
echo $hoang->getBankNumber();
echo $hoang->sayHello() . "<br>";
echo $thai->sayHello();

$thai->setAge(26);

echo "Tuổi của thái {$thai->getAge()}";
