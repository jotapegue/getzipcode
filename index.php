<?php

class GetZipCode
{
    protected $initialZipCode;
    protected $finalZipCode;

    public function __construct(
        $initialZipCode = 68000000,
        $finalZipCode = 68999999
    )
    {
        $this->initialZipCode = $initialZipCode;
        $this->finalZipCode = $finalZipCode;
    }

    public function get()
    {

        $hourInital = date('d/m/Y H:i:s');
        $file = "log.txt";
        $log = fopen($file, "a+");
        print $hourInital . PHP_EOL;
        fwrite($log, $hourInital."\n");
        $countSave = 0;
        foreach (range($this->initialZipCode, $this->finalZipCode) as $number) {
            $url = "https://viacep.com.br/ws/{$number}/json/";
            $getJson = json_decode(file_get_contents($url));
            print "CEP: {$number} ";
            if(@$getJson->erro){
                print "cep não encontrado". PHP_EOL;
            }else{
                if($getJson->localidade == "Santarém")
                fwrite($log, "CEP: {$number} encontrado \n");
                print "cadastrando cep" . PHP_EOL;
                $countSave++;
            }
        }
        $hourFinal = date('d/m/Y H:i:s');
        print $hourFinal . PHP_EOL;
        fwrite($log, $hourFinal."\n");
        print "Total de {$countSave} ceps cadastrados" . PHP_EOL;
        fwrite($log, "Total de {$countSave} ceps encontrados \n");
        fclose($log);
    }

}

$get = new GetZipCode(68020050, 68020055);
// $get = new GetZipCode;
$get->get();