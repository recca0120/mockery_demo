<?php

namespace Acme;

class Parser 
{
    public function parseTbody($html) 
    {
        preg_match('/<tbody>.*<\/tbody>/ism', $html, $matches);

        return $matches[0];
    }

    public function parseRows($tbody)
    {
        
    }
}