<?php

function check($num)
{
    if ($num >= 0 && $num < 100 && $num != 0) {
        return "Good number!";
    } else {
        return "Try better!";
    }
};

var_dump(check(32));
var_dump(check(0));