<?php

/**
 * @copyright Copyright Victor Demin, 2017
 * @license https://github.com/ruskid/yii2-jssocials/LICENSE
 * @link https://github.com/ruskid/yii2-jssocials#readme
 */

namespace ruskid\jssocials;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;

/**
 * Yii JsSocials Widget
 *
 * @author Victor Demin <demmbox@gmail.com>
 */
class JsSocials extends \yii\base\Widget {

    /**
     * @var string Select theme to load theme assets. Set to false to load none
     */
    public $theme = self::THEME_FLAT;

    /**
     * @var bool Load font awesome assets or not. 
     * TODO ?! dynamic depends howto?
     */
    public $useFontAwesome = true;

    /**
     * @var string
     */
    public $tag = 'div';

    /**
     * @var array
     */
    public $tagOptions = [];

    /**
     * @var array JsSocials options
     */
    public $pluginOptions = [];

    const THEME_FLAT = 'flat';
    const THEME_CLASSIC = 'classic';
    const THEME_MINIMA = 'minima';
    const THEME_PLAIN = 'plain';

    /**
     * Init js socials
     */
    public function init() {
        parent::init();

        if (!isset($this->tagOptions['id'])) {
            $this->tagOptions['id'] = $this->id;
        }
    }

    /**
     * Run js socials
     */
    public function run() {
        $view = $this->getView();
        assets\JsSocialsAsset::register($view);
        $this->registerThemeAsset();

        $this->renderTag();
    }

    /**
     * Renders div tag and client script js socials init
     */
    protected function renderTag() {
        $view = $this->getView();

        $id = $this->tagOptions['id'];
        $jsOptions = Json::encode($this->pluginOptions);

        $view->registerJs("$('#{$id}').jsSocials({$jsOptions});", View::POS_END);
        echo Html::tag($this->tag, '', $this->tagOptions);
    }

    /**
     * Registers theme assets
     */
    protected function registerThemeAsset() {
        $view = $this->getView();

        switch ($this->theme) {
            case self::THEME_FLAT:
                assets\JsSocialsFlatAsset::register($view);
                break;
            case self::THEME_CLASSIC:
                assets\JsSocialsClassicAsset::register($view);
                break;
            case self::THEME_MINIMA:
                assets\JsSocialsMinimaAsset::register($view);
                break;
            case self::THEME_PLAIN:
                assets\JsSocialsPlainAsset::register($view);
                break;
        }
    }

}
