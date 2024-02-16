<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class TextYAlignment extends Dropdown
{

    public function init(): void
    {
        $this->setPositions();
        parent::init();
    }

    public static function displayName():string
    {
        return "Text Y Alignment";
    }

    protected function setPositions(): void
    {

        $positions = [
            'Top' => 'self-start',
            'Bottom' => 'self-end'
        ];

        $this->options = [
            [
                'label' => 'Center',
                'value' => 'self-center',
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
