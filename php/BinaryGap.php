<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
    // write your code in PHP7.0
    
    // convert decimal to binary
    $bin = decbin($N);
    
    // split string by '1'
    $zeros = explode('1', $bin);

    // exlude heading 0s and tailing 0s
    unset($zeros[count($zeros)-1]);
    unset($zeros[0]);

    $gap = 0;
    foreach ($zeros as $key => $value) {
        if ($value === "") continue;
        $length = strlen($value);
        if ($length > $gap) $gap = $length;
    }
    return $gap;
}

