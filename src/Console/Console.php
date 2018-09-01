<?php

namespace GetZipCode\Console;

class Console
{
    public $line;
    
    public function line($input)
    {
        $this->line = $input;
        print_r($this->line.PHP_EOL);
        return $this;
    }
}
