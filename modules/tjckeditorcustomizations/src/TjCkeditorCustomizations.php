<?php

namespace modules\tjckeditorcurcustomizations;

use Craft;
use yii\base\Module as BaseModule;
use craft\ckeditor\Plugin;
use modules\tjckeditorcurcustomizations\web\assets\tjckeditorcustomizations\TjCkeditorCustomizationsAsset;

/**
 * TjCkeditorCustomizations module
 *
 * @method static TjCkeditorCustomizations getInstance()
 */
class TjCkeditorCustomizations extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias('@modules/tjckeditorcurcustomizations', __DIR__);

        Plugin::registerCkeditorPackage(TjCkeditorCustomizationsAsset::class);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\tjckeditorcurcustomizations\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\tjckeditorcurcustomizations\\controllers';
        }

        parent::init();

        $this->attachEventHandlers();

        // Any code that creates an element query or loads Twig should be deferred until
        // after Craft is fully initialized, to avoid conflicts with other plugins/modules
        Craft::$app->onInit(function() {
            // ...
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/5.x/extend/events.html to get started)
    }
}
