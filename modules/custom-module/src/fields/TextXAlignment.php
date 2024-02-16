<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class TextXAlignment extends Dropdown
{

    public function init(): void
    {
        $this->setPositions();
        parent::init();
    }

    public static function displayName():string
    {
        return "Text X Alignment";
    }

    protected function setPositions(): void
    {

        $positions = [
            'Center' => 'center',
        ];

        $this->options = [
            [
                'label' => 'Left',
                'value' => 'left',
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
