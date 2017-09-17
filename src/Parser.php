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

    public function parseCols($row) 
    {
        preg_match_all('/<td[^>]+>(<a[^>]+>)?([^<]+)(<\/a>)?<\/td>/', $row, $cols);

        return  [
            'date' => $cols[2][0],
            'currency' => $cols[2][1],
            'unit' => $cols[2][2],
            'buy' => $cols[2][3],
            'sell' => $cols[2][4],
        ];
    }
}