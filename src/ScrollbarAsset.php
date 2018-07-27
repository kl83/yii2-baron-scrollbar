<?php

namespace kl83\widgets;

use yii\web\AssetBundle;

class ScrollbarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kl83/yii2-baron-scrollbar/dist';
    public $js = ['baron.js'];
    public $depends = ['kl83\widgets\BaronAsset'];
}
