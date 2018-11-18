<?php

require_once('vendor/autoload.php');

use GetZipCode\WriteFile\WriteFile;
use GetZipCode\GetAddress\GetAddress;
use GetZipCode\Console\Console;

// $log = New WriteFile;
// $log->line('conteudo em uma linha');
// $log->line('conteudo em uma nova linha');
// $log->print();

// $get = new GetAddress;
// $get->getUrl('https://viacep.com.br/ws/');
// $get->getParams('68020060');
// $get->getType();
// $get->get();

// $console = new Console;
// $console->line(date('d/m/Y H:i:s-'));
//     foreach (range(0, 10) as $number) {
//         $console->line($number);
//     }
// $console->line(date('d/m/Y H:i:s'));

use GetZipCode\GetZipCode\GetZipCode;

new GetZipCode;