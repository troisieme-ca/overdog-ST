<?php

namespace modules\tjcustomadminnotices;

use Craft;
use craft\events\TemplateEvent;
use craft\web\View;
use yii\base\Module;
use yii\base\Event;
use yii\i18n\PhpMessageSource;

/**
 * TjCustomAdminNotices module
 *
 * @method static TjCustomAdminNotices getInstance()
 */
class TjCustomAdminNotices extends Module
{
    public function init(): void
    {
        Craft::setAlias('@modules/tjcustomadminnotices', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\tjcustomadminnotices\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\tjcustomadminnotices\\controllers';
        }

        Craft::$app->i18n->translations['tjcustomadminnotices'] = [
            'class' => PhpMessageSource::class,
            'sourceLanguage' => 'en',
            'basePath' => '@modules/tjcustomadminnotices/translations',
            'forceTranslation' => true,
        ];

        parent::init();

        $this->attachEventHandlers();

        // Any code that creates an element query or loads Twig should be deferred until
        // after Craft is fully initialized, to avoid conflicts with other plugins/modules
        Craft::$app->onInit(function() {
            Event::on(
                View::class,
                View::EVENT_BEFORE_RENDER_TEMPLATE,
                function(TemplateEvent $event) {
                    $request = Craft::$app->getRequest();
                    $user = Craft::$app->getUser()->getIdentity();

                    if ($user && $user->admin) {
                        if (
                            $request->getSegment(2) === 'categories' ||
                            $request->getSegment(2) === 'globals' ||
                            $request->getSegment(2) === 'tags') {
                            
                                if ($request->getSegment(2) === 'categories') {
                                    $message = Craft::t('tjcustomadminnotices', 'categoriesDeprecationNotice');
                                } elseif ($request->getSegment(2) === 'globals') {
                                    $message = Craft::t('tjcustomadminnotices', 'globalsDeprecationNotice');
                                } elseif ($request->getSegment(2) === 'tags') {
                                    $message = Craft::t('tjcustomadminnotices', 'tagsDeprecationNotice');
                                }

                                Craft::$app->getView()->registerJs(
                                    "document.querySelector('#main').insertAdjacentHTML('afterbegin', " .
                                    json_encode('<div style="padding: 1rem; background: #fff3cd; border: 1px solid #ffeeba; color: #856404; margin-bottom: 1rem;">'. $message .'</div>') .
                                    ");"
                                );
                            }
                    }
                }
            );
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/5.x/extend/events.html to get started)
    }
}
