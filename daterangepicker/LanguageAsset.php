<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2016
 * @package yii2-date-range
 * @version 1.6.7
 */

namespace getpu\plug\daterangepicker;

use yii\web\View;
use getpu\plug\select2\AssetBundle;

/**
 * Language Asset bundle for \kartik\daterange\DateRangePicker.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class LanguageAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];
    public $depends = ['getpu\plug\daterangepicker\MomentAsset'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
