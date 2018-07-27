<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget kl83\widgets\Scrollbar */
/* @var $content string */

?>

<?= Html::beginTag('div', $widget->options) ?>

    <div class="baron__scroller">
        <?= $content ?>
    </div>

    <div class="baron__track">
        <div class="baron__control baron__up">▲</div>
        <div class="baron__free">
            <div class="baron__bar"></div>
        </div>
        <div class="baron__control baron__down">▼</div>
    </div>

<?= Html::endTag('div') ?>
