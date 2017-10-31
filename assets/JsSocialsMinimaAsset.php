<?php

/**
 * @copyright Copyright Victor Demin, 2017
 * @license https://github.com/ruskid/yii2-jssocials/LICENSE
 * @link https://github.com/ruskid/yii2-jssocials#readme
 */

namespace ruskid\jssocials\assets;

use yii\web\AssetBundle;

/**
 * Yii JsSocials Minima Theme Asset
 *
 * @author Victor Demin <demmbox@gmail.com>
 */
class JsSocialsMinimaAsset extends AssetBundle {

    public $sourcePath = '@bower/jssocials';

    public function init() {
        parent::init();

        $this->css[] = 'dist/jssocials-theme-minima.css';
    }

    public $depends = [
        'ruskid\jssocials\assets\JsSocialsAsset'
    ];

}
