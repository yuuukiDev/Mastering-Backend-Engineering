<?php


// hooks 

class Example {

    private bool $modified = false;

    public string $foo = 'default value' {
        // long version

        // get {
        //     if ($this->modified) {
        //         return $this->foo . '(modified)';
        //     }
        //     return $this->foo;
        // }
        // set(string $value) {
        //     $this->foo = strtolower($value);
        //     $this->modified = true;
        // }
        
        // short version

        get => $this->foo . ($this->modified ? ' (modified)' : '');
        set => strtolower($value);
    }
}

$example = new Example();

$example->foo = 'CHANGED';

print $example->foo;


// Encapsulation

class myClass {

    public string $public = 'PUBLIC';
    protected string $protected = 'PROTECTED';
    private string $private = 'PRIVATE';


    function printHello(): void
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}


$obj = new myClass();


echo $obj->public;
// echo $obj->protected; // error
// echo $obj->private; // error



