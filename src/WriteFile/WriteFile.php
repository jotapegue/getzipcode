<?php

namespace GetZipCode\WriteFile;

class WriteFile
{
    protected $file;
    protected $name;

    public function __construct($name = 'log.txt') {
        $this->name = $name;
        $this->open();
    }

    protected function open($read = 'a+')
    {
        $this->file = fopen($this->name, $read);
    }

    public function line($text)
    {
        fwrite($this->file, $text.PHP_EOL);
    }

   public function print()
   {
       fclose($this->file);
   }
}