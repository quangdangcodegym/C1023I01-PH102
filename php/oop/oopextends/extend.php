<?php

class A
{
    protected string $some_property;

    function some_method()
    {
        echo "This method is defined inside class A";
    }
}
class B extends A
{
    function method_InClassB()
    {
        $this->some_property = "some_property";
    }
    function getSomeProperty()            // nêu ko để access modifiers thì mặc định là public
    {
        return $this->some_property;
    }
}

$b = new B();
$b->getSomeProperty();
$b->some_method();
