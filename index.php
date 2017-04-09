<?php
//引入类文件
require './wechat.class.php';
$wechat = new Wechat();
//判断是验证还是消息处理的
if($_GET["echostr"]){
  $wechat->valid();
}else{
  $wechat->responseMsg();
}
