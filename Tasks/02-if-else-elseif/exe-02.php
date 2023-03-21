<?php

function compare($num)
{
    if ($num >= 1 && $num <= 100) {
        return true;
    }
};

var_dump(compare(50));