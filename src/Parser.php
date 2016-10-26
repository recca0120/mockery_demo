<?php

namespace Recca0120\TaiwanBank;
use Symfony\Component\DomCrawler\Crawler;

class Parser {
    public function __construct(Gold $gold)
    {
        $this->gold = $gold;
    }

    public function toArray()
    {
        $crawler = new Crawler($this->gold->getHtml());

        return $crawler->filter('.toggle-circle tbody tr')->each(function (Crawler $node, $i) {
            $cols = $node->filter('td');

            $date = $cols->eq(0)->text();
            $buy =  $cols->eq(3)->text();
            $sell =  $cols->eq(4)->text();

            return compact('date', 'buy', 'sell');
        });
    }
}
