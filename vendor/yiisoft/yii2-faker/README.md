Faker Extension for Yii 2
=========================

This extension provides a [`Faker`](https://github.com/fzaninotto/Faker) fixture command for Yii 2.

For license information check the [LICENSE](LICENSE.md)-file.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiisoft/yii2-faker
```

or add

```json
"yiisoft/yii2-faker": "~2.0.0"
```

to the require section of your composer.json.


Usage
-----

To use this extension,  simply add the following code in your application configuration (console.php):

```php
'controllerMap' => [
    'fixture' => [
        'class' => 'yii\faker\FixtureController',
    ],
],
```
