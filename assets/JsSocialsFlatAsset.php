<?php

/**
 * @copyright Copyright Victor Demin, 2017
 * @license https://github.com/ruskid/yii2-jssocials/LICENSE
 * @link https://github.com/ruskid/yii2-jssocials#readme
 */

namespace ruskid\jssocials\assets;

use yii\web\AssetBundle;

/**
 * Yii JsSocials Flat Theme Asset
 *
 * @author Victor Demin <demmbox@gmail.com>
 */
class JsSocialsFlatAsset extends AssetBundle {

    public $sourcePath = '@bower/jssocials';

    public function init() {
        parent::init();

        $this->css[] = 'dist/jssocials-theme-flat.css';
    }

    public $depends = [
        'ruskid\jssocials\assets\JsSocialsAsset'
    ];

}
