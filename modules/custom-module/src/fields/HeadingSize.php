<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class HeadingSize extends Dropdown
{

    public function init(): void
    {
        $this->setPositions();
        parent::init();
    }

    public static function displayName():string
    {
        return "Heading Size";
    }

    protected function setPositions(): void
    {

        $positions = [
            'H1' => 'h1',
            'H2' => 'h2',
            'H3' => 'h3',
            'H4' => 'h4',
            'H5' => 'h5',
            'H6' => 'h6',
        ];

        $this->options = [
            [
                'label' => 'H1',
                'value' => 'h1',
                'default' => true
            ]
        ];

        foreach ($positions as $key => $value) {
            $this->options[] = [
                'label' => $key,
                'value' => $value
            ];
        }
    }

    public function getSettingsHtml(): string
    {
        return '';
    }
}
