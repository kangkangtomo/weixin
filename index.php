<?php
include_once 'Wechat.php';


$options = array(
    'token' => '', // 填写你设定的key
    'encodingaeskey' => '', // 填写加密用的EncodingAESKey
    'appid' => 'wx51664fdf1eaf85dd', // 填写高级调用功能的app id, 请在微信开发模式后台查询
    'appsecret' => 'c09ed8831bcf4ea32f326b851c00c717'
);
$weObj = new Wechat($options); // 创建实例对象

$result = $weObj->getOauthAccessToken();
'<pre>'.var_dump($result).'</pre>';;
$wechatId = $result['openid'];
$we_info = $weObj->getOauthUserinfo($result['access_token'], $result['openid']);
'<pre>'.var_dump($we_info).'</pre>';;