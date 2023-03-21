<?php

function greeting($word)
{
    if ($word === 'hello') {
        return 'world';
    }
}

var_dump(greeting('hello'));