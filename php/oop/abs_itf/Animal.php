<?php
require_once("./Ediable.php");
abstract class Animal implements Ediable               // đánh dấu đây là 1 lớp trừu tượng
{
    protected string $name;
    protected int $weight;

    public abstract function eat();         // phương thức trừu tượng: PT còn mơ hồ, ko có phần thân

    // public abstract function cachAn();
}

class Dog extends Animal
{
    // lơp con kế thừa (extends) thì cần ghi đè lại phương thức trừu tượng
    public function eat()
    {
        echo "Nhai cạp cắn xương";
    }
    public function cachAn()
    {
        echo "Hon, mận giả cầy";
    }
}




// $d = new Dog();                 // new thì cần 1 lớp cụ thể
