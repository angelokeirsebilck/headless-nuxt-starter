<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class MarginTop extends Dropdown
{

    public function init(): void
    {
        $this->setMargins();
        parent::init();
    }

    public static function displayName():string
    {
        return "Margin Top";
    }

    protected function setMargins(): void
    {

        $margins = [
            'Small' => 'small',
            'Zero' => 'zero',
        ];

        $this->options = [
            [
                'label' => 'Normal',
                'value' => 'normal'
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
