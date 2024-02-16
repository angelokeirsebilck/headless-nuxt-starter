<?php


namespace custommodule;

use Craft;
use craft\elements\Entry;
use custommodule\fields\BackgroundColor;
use custommodule\fields\PositionX;
use custommodule\fields\PositionY;
use custommodule\fields\MarginTop;
use custommodule\fields\TextYAlignment;
use custommodule\fields\TextXAlignment;
use custommodule\fields\HeadingSize;
use custommodule\fields\Spacing;
use custommodule\fields\BlockSpacing;
use custommodule\fields\ButtonStyle;
use custommodule\twigextensions\Filters;
use custommodule\twigextensions\Functions;
use Yii\base\Module;
use Yii\base\Event;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use Twig\Extra\String\StringExtension;

class CraftModule extends Module
{

    public function init()
    {
        Craft::setAlias('@custommodule', __DIR__);

        parent::init();
        $this->_registerCustomFieldTypes();
        $this->_registerTwigExtensions();
    }

    private function _registerTwigExtensions()
    {
        $extensions = [
            Filters::class,
            Functions::class,
        ];

        foreach ($extensions as $extension) {
            Craft::$app->view->registerTwigExtension(new $extension);
        }
    }

    private function _registerCustomFieldTypes()
    {
        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function (RegisterComponentTypesEvent $event) {
                $event->types[] = BackgroundColor::class;
                $event->types[] = PositionX::class;
                $event->types[] = PositionY::class;
                $event->types[] = TextYAlignment::class;
                $event->types[] = TextXAlignment::class;
                $event->types[] = HeadingSize::class;
                $event->types[] = MarginTop::class;
                $event->types[] = Spacing::class;
                $event->types[] = BlockSpacing::class;
                $event->types[] = ButtonStyle::class;
            }
        );
    }
}

