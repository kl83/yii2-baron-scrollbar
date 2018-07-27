<?php

namespace kl83\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\Widget;

/**
 * Custom scrollbar widget.
 */
class Scrollbar extends Widget
{
    /**
     * Available themes.
     */
    const THEME_WINXP = '_winxp';
    const THEME_MACOSX = '_macosx';
    const THEME_SIMPLE = '_simple';
    const THEME_UBUNTU12 = '_ubuntu12';

    /**
     * @var array HTML-attributes.
     */
    public $options = [];

    /**
     * @var array Baron scrollbar options.
     */
    public $baronOptions = [];

    /**
     * @var array Baron scrollbar default options.
     */
    private $baronDefaults = [
        'scroller' => '.baron__scroller',
        'bar' => '.baron__bar',
        'scrollingCls' => '_scrolling',
        'draggingCls' => '_dragging',
    ];

    /**
     * @var string Theme.
     */
    public $theme = self::THEME_SIMPLE;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        ob_start();
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        ScrollbarAsset::register($this->getView());
        Html::addCssClass(
            $this->options,
            'baron baron__root baron__clipper ' . $this->theme
        );
        $this->options['data']['options'] =
            ArrayHelper::merge($this->baronDefaults, $this->baronOptions);
        return $this->render('scrollbar', [
            'widget' => $this,
            'content' => ob_get_clean(),
        ]);
    }
}
