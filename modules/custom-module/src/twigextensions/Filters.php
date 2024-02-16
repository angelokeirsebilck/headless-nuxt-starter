<?php


namespace custommodule\twigextensions;

use Twig\TwigFilter;
use Twig\Extra\String\StringExtension;

class Filters extends \Twig\Extension\AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('urldecode', [$this, 'urldecode']),
            new TwigFilter('rmLastThreeChar', [$this, 'rmLastThreeChar']),
        ];
    }

    public function urldecode($str) {
        return urldecode($str);
    }
    
    public function rmLastThreeChar($str) {
        return substr($str, 0, -3);
    }
}