# Yii2 [Bootstrap Social](https://lipis.github.io/bootstrap-social/) Asset Bundle

This extension provides a assets bundle with [Bootstrap Social](https://lipis.github.io/bootstrap-social/) for [Yii2](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/denostr/yii2-bootstrap-social/blob/master/LICENSE)-file.

[![License](https://poser.pugx.org/denostr/yii2-bootstrap-social/license)](https://packagist.org/packages/denostr/yii2-bootstrap-social)
[![Latest Stable Version](https://poser.pugx.org/denostr/yii2-bootstrap-social/v/stable)](https://packagist.org/packages/denostr/yii2-bootstrap-social)
[![Latest Unstable Version](https://poser.pugx.org/denostr/yii2-bootstrap-social/v/unstable)](https://packagist.org/packages/denostr/yii2-bootstrap-social)
[![Total Downloads](https://poser.pugx.org/denostr/yii2-bootstrap-social/downloads)](https://packagist.org/packages/denostr/yii2-bootstrap-social)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```
composer require "denostr/yii2-bootstrap-social:~1.0"
```
or add

```
"denostr/yii2-bootstrap-social": "~1.0"
```
to the `require` section of your `composer.json` file.

Usage
-----

As dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'denostr\BootstrapSocial\BootstrapSocialAsset'
	];
}
```
