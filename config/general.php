<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 * @link https://craftcms.com/docs/5.x/reference/config/general.html
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls(true)
    // Preload Single entries as Twig variables
    ->preloadSingles(true)
    // Prevent user enumeration attacks
    ->preventUserEnumeration(true)
    // Set the @webroot alias so the clear-caches command knows where to find CP resources
    ->aliases([
        '@web' => App::env('SITE_URL'),
        '@webroot' => dirname(__DIR__) . '/web',
        '@rootUrl' => App::env('SITE_URL'),
        /**
          *  AWS Cloudfront URLs
          *  Used in layout.twig with the preconnect attribute 
          *  Remove or edit if you use a different setup
          */
        '@imagesUrl' => App::env('S3_IMAGES_URL') ?: '',
        '@docsUrl' => App::env('S3_DOCS_URL') ?: '',
    ])
    // Overdog opinionated - db backup on update - set to false to avoid backing up large db on git deploy
    // Do the backup with your db provider before deploying a Craft update.
    ->backupOnUpdate(false)
    // Overdog opinionated - search option to enable fuzzy search from both directions GLOBALLY FOR ALL FORMS
    ->defaultSearchTermOptions([
        'subLeft' => true
    ])
    // Overdog opinionated - use only ascii caracter in auto generated slugs and filename
    ->limitAutoSlugsToAscii(true)
    ->convertFilenamesToAscii(true)
    // Overdog opinionated - limit revision to avoid adding lot to db
    ->maxRevisions(6)
    // Overdog opinionated - set default same site cookie value
    ->sameSiteCookieValue('Lax')
    // Overdog opinionated - remove the X-Powered-By: Craft CMS header should be sent, helping to identify that the site is running on Craft
    ->sendPoweredByHeader(false)
    // Add query param when user activate account to add notifications message
    ->activateAccountSuccessPath('?activated')
    // Control Panel trigger word
    ->cpTrigger('admin')
    // Add query param on logout to add notifications message
    ->postLogoutRedirect('?loggedout')
    // The secure key Craft will use for hashing and encrypting data
    ->securityKey(App::env('CRAFT_SECURITY_KEY') ?: '')
    // Overdog opinionated - important for assets cache replacement
    ->revAssetUrls(true)
    // Overdog opinionated - change partials folder name
    ->partialTemplatesPath('_matrix')
;
