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
        print $hourInital . PHP_EOL;
        $countSave = 0;
        foreach (range($this->initialZipCode, $this->finalZipCode) as $number) {
            $url = "https://viacep.com.br/ws/{$number}/json/";
            $getJson = json_decode(file_get_contents($url));
            print "CEP: {$number} ";
            if(@$getJson->erro){
                print "cep não encontrado". PHP_EOL;
            }else{
                if($getJson->localidade == "Santarém")
                print "cadastrando cep" . PHP_EOL;
                $countSave++;
            }
        }
        $hourFinal = date('d/m/Y H:i:s');
        print $hourFinal . PHP_EOL;
        print "Total de {$countSave} ceps cadastrados" . PHP_EOL;
    }

}

// $get = new GetZipCode(68020050, 68020055);
$get = new GetZipCode;
$get->get();