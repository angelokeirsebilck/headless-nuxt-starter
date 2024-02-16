<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class Spacing extends Dropdown
{

    public function init(): void
    {
        $this->setMargins();
        parent::init();
    }

    public static function displayName():string
    {
        return "Spacing";
    }

    protected function setMargins(): void
    {

        $margins = [
            'Small' => 'small',
        ];

        $this->options = [
            [
                'label' => 'Default',
                'value' => 'default',
                'default' => true
            ]
        ];

        foreach ($margins as $key => $value) {
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
