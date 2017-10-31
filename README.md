Yii2 JsSocials Wrapper.
==========
Installation
--------------------------

The preferred way to install this extension is through http://getcomposer.org/download/.

Either run

```sh
php composer.phar require ruskid/yii2-jssocials "dev-master"
```

or add

```json
"ruskid/yii2-jssocials": "dev-master"
```

to the require section of your `composer.json` file.

Why?
--------------------------
I didn't like existing yii2 share solutions...

1. **yii2-social** has only native sharing and non customizable buttons
2. Other solutions provided customizable buttons, but without built in popup and native sharing support.

**jssocials** is :+1: =)

Check these for **pluginOptions**
--------------------------

http://js-socials.com/demos/
https://github.com/tabalinas/jssocials


### Usage
```php
echo JsSocials::widget([
    'theme' => JsSocials::THEME_MINIMA, //4 available themes
    'pluginOptions' => [
        'showLabel' => false,
        'showCount' => false,
        'shareIn' => 'popup',
        'shares' => [
            [
              'share' => 'email',
              'label' => Yii::t('app', 'Email'),
              'to' => 'demmbox@gmail.com',
            ],
            "twitter",
            "facebook", 
            "googleplus", 
            "linkedin",
            "pinterest",
            "stumbleupon", 
            "whatsapp"
        ]
    ]
]);
```