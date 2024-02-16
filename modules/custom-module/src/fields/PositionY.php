<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class PositionY extends Dropdown
{

    public function init(): void
    {
        $this->setPositions();
        parent::init();
    }

    public static function displayName():string
    {
        return "Position Y";
    }

    protected function setPositions(): void
    {

        $positions = [
            'Bottom' => 'bottom',
        ];

        $this->options = [
            [
                'label' => 'Top',
                'value' => 'top',
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
