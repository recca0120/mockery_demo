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
        preg_match_all('/<tr>.*<\/tr>/ismU', $tbody, $matches);

        return $matches[0];
    }
}