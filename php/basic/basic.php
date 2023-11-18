<?php
/*
    Javascript
    let a = 5;

    type of a: để xem kiểu dữ liệu
    $a : undefined

    PHP
    $a;
    $a1 = 5;            // Integer, Float, Boolean, String, Array, Object, UNDEFINED, NULL
    var_dump($a);       // hiển thị thông tin: kiểu dữ liệu và giá trị
    print_r($a);        // hiển thị giá trị
    echo "HAHA";

    $str = "CODEGYM";
    $a = "HELLO";
    echo $a . $str;     // Muốn nối chuỗi thì dùng dấu .
    echo "HELLO $str";  //  gần giống `${biến}` : striing literal

    // -----------Biến  toàn cục - biến cục bộ
    $x = 5; / global scope 
    myTest();

    echo "Giá trị biến $y";
    function myTest()
    {
        global $x;              // bên trong hàm muốn dùng biến toàn cục thì thêm từ khóa global
        echo "<p>Variable x inside function is: $x</p>";
        $y = 10;
    }

    // Biến toàn cục thông qua $GLOBALS['key-tenbien']
    $x = 5;
    $y = 10;

    function myTest()
    {
        // cách khác để gọi biến toàn cục dùng $GLOBALS['key-tenbien']
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; 

    // ---- Từ khóa static: sau khi gọi hàm biến cục bộ ko bị mất đi
    function myTest()
    {
        static $x = 0;          // cần thêm từ khóa static
        echo $x;
        $x++;
    }
    myTest();
    myTest();
    myTest();


    // --- So sanh echo và print
    echo: có thể nhiều tham số, print: 1 tham số
    echo: ko trả về (void), trả về 1 con số (int)

    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    print "MY ";
    echo print("QUANG DANG");


    // --- HẰNG SỐ: ko được cập nhật giá trị
    const PI = 3.14;        // javascript dùng const để khai báo hằng sô
    PI = 5;

    define("PI", 3.14);     // php dùng define để khai báo hằng số

    PI = 5;
    echo PI;


    // --- 
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

    */
