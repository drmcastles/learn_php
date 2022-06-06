<?php
echo "<pre>";

function foo()
{
    $arr = ["test1", "test2", "test3", "test4", "test5"];
    static $no_call = 0;
    ++$no_call;




    if ($no_call > sizeof($arr))
    {

        $no_call = 0;

    }

    echo $arr[$no_call-1]."<br>";
    return $arr[$no_call-1];
}


foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();
foo();