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
        
        $htmlFile = __DIR__.'/../gold-history.html';
        if (file_exists($htmlFile) === false) {
            file_put_contents(
                $htmlFile,
                file_get_contents($url, false, $context)
            );
        }

        $html = file_get_contents($htmlFile);

        preg_match('/<tbody>.*<\/tbody>/ism', $html, $tbody);

        var_dump($matches);
        exit;

        return $html;
    }
}