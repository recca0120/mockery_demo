<?php

namespace Recca0120\TaiwanBank;

class Parser {
    public function __construct(Gold $gold)
    {
        $this->gold = $gold;
    }

    public function toArray()
    {
        return $this->gold->getHtml();
    }
}
