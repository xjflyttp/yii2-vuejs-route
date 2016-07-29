<?php

namespace xj\vuejs;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class VueRouterAsset extends AssetBundle
{

    public $sourcePath = '@bower/vue-router/dist';
    public $basePath = '@webroot/assets';
    public $js = ['vue-router.min.js'];
    public $depends = [
        'xj\vuejs\VueAsset',
    ];

}
