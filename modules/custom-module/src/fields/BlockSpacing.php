<?php
namespace custommodule\fields;
use craft\fields\Dropdown;
use \craft\db\Query;

class BlockSpacing extends Dropdown
{

    public function init(): void
    {
        $this->setBlockSpacings();
        parent::init();
    }

    public static function displayName():string
    {
        return "Block Spacing";
    }

    protected function setBlockSpacings(): void
    {

        $backgroundColors = [
            'Extra Small' => 'extraSmall',
            'Small' => 'small',
            'Large' => 'large',
            'Zero' => 'zero',
        ];

        $this->options = [
            [
                'label' => 'Default',
                'value' => 'default',
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
