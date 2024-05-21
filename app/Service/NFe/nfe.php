<?php

namespace App\Service\NFe;


class NFeService
{
    protected $tools;

    public function __construct()
    {
        $config = [
            "atualizacao" => "2021-09-01 16:26:00",
            "tpAmb" => 2,
            "razaosocial" => "Sua Razão Social",
            "siglaUF" => "SP",
            "cnpj" => "00000000000000",
            "schemes" => "PL_009_V4",
            "versao" => "4.00",
            "tokenIBPT" => "AAAAAAA",
            "CSC" => "000001",
            "CSCid" => "0000000000000000000000000000000000000000000"
        ];

        $certificadoDigital = file_get_contents(config('nfe.certificate.path'));
        $this->tools = new Tools(json_encode($config), Certificate::readPfx($certificadoDigital, config('nfe.certificate.password')));
    }

    public function emitirNFe(array $dadosNFe)
    {
        $nfe = new Make();
        // Preencher os dados da NF-e aqui...
        $nfe->taginfNFe(...);
        $nfe->tagide(...);
        $nfe->tagemit(...);
        // Continue preenchendo todos os dados necessários...

        $xml = $nfe->getXML();
        $signedXml = $this->tools->signNFe($xml);
        $response = $this->tools->sefazEnviaLote([$signedXml], 1);

        return $response;
    }
}