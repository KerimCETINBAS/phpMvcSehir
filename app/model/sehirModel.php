<?php

class SehirModel {

    private $sehirler = [
        "istanbul" => [
            "name" => "istanbul",
            "plaka" => "34",
            "nufus" => "20mil"
        ],
        "ankara" => [
            "name" => "ankara",
            "plaka" => "06",
            "nufus" => "10mil"
        ],
    ];


    public function GetSehir($sehir): array {
        return $this->sehirler[$sehir];
    }
}