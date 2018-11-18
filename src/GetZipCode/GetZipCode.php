<?php

namespace GetZipCode\GetZipCode;
use GetZipCode\Console\Console;

class GetZipCode extends Console
{
    public function __construct() {
        $this->line('initial ' . date('h:i:s'));
        foreach(range(0, 10) as $number){
            $this->line($number);
        }
        $this->line('final ' . date('h:i:s'));
    }
}
