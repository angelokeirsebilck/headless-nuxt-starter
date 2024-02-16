<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class ButtonStyle extends Dropdown
{

    public function init(): void
    {
        $this->setStyle();
        parent::init();
    }

    public static function displayName():string
    {
        return "Button Style";
    }

    protected function setStyle(): void
    {

        $positions = [
            'Special' => 'special',
        ];

        $this->options = [
            [
                'label' => 'Default',
                'value' => 'default',
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
