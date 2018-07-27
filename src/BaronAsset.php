<?php

namespace kl83\widgets;

use yii\web\AssetBundle;

class BaronAsset extends AssetBundle
{
    public $sourcePath = '@npm/baron';
    public $js = ['baron.min.js'];
    public $css = [
        'baron.css',
        'skins/styles.css',
    ];
}
