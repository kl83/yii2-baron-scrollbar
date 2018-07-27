# Yii2 baron scrollbar widget
[Baron](https://github.com/Diokuz/baron) — a small, fast and crossbrowser custom scrollbar with native system scroll mechanic.


## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-baron-scrollbar *
~~~
or add
~~~
"kl83/yii2-baron-scrollbar": "*"
~~~
to the require section of your composer.json file.

## Usage
~~~
<?php \kl83\widgets\Scrollbar::begin([
    'theme' => \kl83\widgets\Scrollbar::THEME_MACOSX,
    'options' => [
        'style' => 'height: 30vh',
    ],
    'baronOptions' => [
        'cssGuru' => false,
    ],
]); ?>
<p>Some scrollable content...</p>
<p>Height of parent DOM element must be set.</p>
<?php \kl83\widgets\Scrollbar::end(); ?>
~~~

## License
MIT License