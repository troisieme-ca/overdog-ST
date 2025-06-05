<?php

namespace modules\tjckeditorcurcustomizations\web\assets\tjckeditorcustomizations;

use Craft;
use craft\ckeditor\web\assets\BaseCkeditorPackageAsset;

/**
 * Tj Ckeditor Customizations asset bundle
 */
class TjCkeditorCustomizationsAsset extends BaseCkeditorPackageAsset
{
    public $sourcePath = __DIR__ . '/dist';
    public $depends = [];
    public $js = [
        'special-characters.js',
        'nbsp.js'
    ];
    public $css = [];
    public array $pluginNames = [
        'SpecialCharacters',
        'SpecialCharactersEssentials',
        'Nbsp'
    ];
    public array $toolbarItems = [
        'specialCharacters',
        'nbsp'
    ];
}
