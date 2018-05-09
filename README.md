Yii2 taobao sdk 
===============
淘宝开放平台 Yii2 SDK

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require hbhe/yii2-taobao-sdk "*"
```

or add

```
"hbhe/yii2-taobao-sdk": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
require_once(Yii::getAlias("@hbhe/yii2-taobao-sdk/TopSdk.php"));
$c = new \TopClient;
$c->appkey = 'key-xxxx';
$c->secretKey = 'secret-xxxx';
$req = new \UserSellerGetRequest;
$req->setFields("user_id,uid,nick,sex,avatar,has_shop,vip_info,email");
$resp = $c->execute($req, 'session-xxxx');
Yii::error($resp);

?>```

本扩展目标之一是尽量少地改动原Taobao SDK文件, 方便与官方同步.
如果src目录内缺少你需要的接口文件，你可以在淘宝后台下载对应权限的SDK包，然后将文件直接copy到src目录下即可, 非常方便！
有问题请即联系QQ:57620133

enjoy :-)
