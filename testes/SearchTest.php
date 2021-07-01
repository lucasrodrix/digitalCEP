<?php

use PHPUnit\Framework\TestCase;
use Lucas\DigitalCep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipCode(string $input, array $expected){
        $result = new Search;
        $result = $result->getAddressFromZipCode($input);
        
        $this->assertEquals($expected, $result);
    }

    public function dadosTeste(){
        return [
            "Endereço Casa Bailarina" =>[
                "09852820",
                [
                    "cep" => "09852-820",
                    "logradouro" => "Rua Nova Diamantina",
                    "complemento" => "(Pq Hawaí)",
                    "bairro" => "Alves Dias",
                    "localidade" => "São Bernardo do Campo",
                    "uf" => "SP",
                    "ibge" => "3548708",
                    "gia" => "6350",
                    "ddd" => "11",
                    "siafi" => "7075"
                ]
            ],
            "Endereço Casa Músico" =>[
                "12212140",
                [
                    "cep" => "12212-140",
                    "logradouro" => "Rua Presidente Campos Salles",
                    "complemento" => "",
                    "bairro" => "Santana",
                    "localidade" => "São José dos Campos",
                    "uf" => "SP",
                    "ibge" => "3549904",
                    "gia" => "6452",
                    "ddd" => "12",
                    "siafi" => "7099"
                ]
            ],            
        ];
    }
}