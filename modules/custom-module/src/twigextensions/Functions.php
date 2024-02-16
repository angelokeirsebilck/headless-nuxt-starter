<?php


namespace custommodule\twigextensions;

use Twig\TwigFilter;

class Functions extends \Twig\Extension\AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new \Twig\TwigFunction('test', [$this, 'test']),
        ];
    }

    public function test() {
        return 'test';
    }
}