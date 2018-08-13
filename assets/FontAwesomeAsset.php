<?php

/**
 * @copyright Copyright Victor Demin, 2017
 * @license https://github.com/ruskid/yii2-jssocials/LICENSE
 * @link https://github.com/ruskid/yii2-jssocials#readme
 */

namespace ruskid\jssocials\assets;

use yii\web\AssetBundle;

/**
 * Yii Font Awesome asset
 *
 * @author Victor Demin <demmbox@gmail.com>
 */
class FontAwesomeAsset extends AssetBundle {

    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $css = [
        'css/font-awesome.min.css'
    ];
}
