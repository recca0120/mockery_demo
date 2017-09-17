<?php

namespace Acme;

class GoldHistory 
{
    public function get() 
    {
        $url = 'http://rate.bot.com.tw/gold/chart/year/TWD';
        $context = \stream_context_create([
            'http' => [
                'header' => implode("\r\n", [
                    'User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10',
                ])
            ]
        ]);

        $html = file_get_contents($url, false, $context);

        preg_match('/<tbody>.*<\/tbody>/ism', $html, $tbody);
        preg_match_all('/<tr>.*<\/tr>/ismU', $tbody[0], $rows);

        $results = [];

        foreach ($rows[0] as $cols) {
            preg_match_all('/<td[^>]+>(<a[^>]+>)?([^<]+)(<\/a>)?<\/td>/', $cols, $col);
            
            $results[] = [
                'date' => $col[2][0],
                'currency' => $col[2][1],
                'unit' => $col[2][2],
                'buy' => $col[2][3],
                'sell' => $col[2][4],
            ];
        }

        return $results;
    }
}