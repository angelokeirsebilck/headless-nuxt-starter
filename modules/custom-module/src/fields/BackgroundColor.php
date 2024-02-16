<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class BackgroundColor extends Dropdown
{

    public function init(): void
    {
        $this->setBackgroundColors();
        parent::init();
    }

    public static function displayName():string
    {
        return "Background Color";
    }

    protected function setBackgroundColors(): void
    {

        $backgroundColors = [
            'Primary' => 'bg-prim'
        ];

        $this->options = [
            [
                'label' => 'Default',
                'value' => 'bg-beige',
                'default' => true
            ]
        ];

        foreach ($backgroundColors as $key => $value) {
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
