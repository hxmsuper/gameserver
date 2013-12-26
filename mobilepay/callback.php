<?php
include 'config.php';
include 'yeepay/yeepayMPay.php';

$yeepay = new yeepayMPay($merchantaccount, $merchantPublicKey, $merchantPrivateKey, $yeepayPublicKey);
try {
	$return = $yeepay->callback($_POST['data'], $_POST['encryptkey']);
// TODO:添加订单处理逻辑代码

	
}catch (yeepayMPayException $e) {
// TODO：添加订单支付异常逻辑代码

}
?>