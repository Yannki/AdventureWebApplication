<?php

namespace App\Services;

class Instagram
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function post($text){
        $newString = $text.$this->apiKey;
        return $newString;
    }

    public function postTest($text){
        $newString = $text.$this->apiKey;
        dd($newString);
    }
}