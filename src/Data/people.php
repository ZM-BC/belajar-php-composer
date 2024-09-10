<?php

namespace Zm\Data;

class people{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, my name is $this->name";
    }

}