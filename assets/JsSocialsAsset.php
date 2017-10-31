<?php

/**
 * @copyright Copyright Victor Demin, 2017
 * @license https://github.com/ruskid/yii2-jssocials/LICENSE
 * @link https://github.com/ruskid/yii2-jssocials#readme
 */

namespace ruskid\jssocials\assets;

use yii\web\AssetBundle;

/**
 * Yii JsSocials Asset
 *
 * @author Victor Demin <demmbox@gmail.com>
 */
class JsSocialsAsset extends AssetBundle {

    public $sourcePath = '@bower/jssocials';

    public function init() {
        parent::init();

        $this->css[] = 'dist/jssocials.css';
        $this->js[] = YII_DEBUG ?
                'dist/jssocials.js' : 'dist/jssocials.min.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
        'ruskid\jssocials\assets\FontAwesomeAsset'
    ];

}
