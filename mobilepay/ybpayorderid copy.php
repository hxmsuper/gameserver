
<?php  
//该脚本直接反馈得到的订单号给客户端
include("yeepay/yeepayMPay.php");
include("config.php");
function a() {echo "aaaa";};


$yeepay = new yeepayMPay($merchantaccount,$merchantPublicKey,$merchantPrivateKey,$yeepayPublicKey);

	$ip='115.29.42.184';

	//GET得到订单号
	$order_id = create_str(15);//$_GET['orderid'];//订单号由后台生成并反馈给前端
	echo $order_id;
function create_str( $length = 8 ) {  
// 密码字符集，可任意添加你需要的字符  
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';  
$str = '';  
for ( $i = 0; $i < $length; $i++ )  
{  
// 这里提供两种字符获取方式  
// 第一种是使用 substr 截取$chars中的任意一位字符；  
// 第二种是取字符数组 $chars 的任意元素  
// $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);  
$str .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
}  
return $str;  
}

//header($url);
//echo "生成URL包含数据";
// echo'<html>
// <head>
// <meta http-equiv="refresh" 
// content="5;url='.$url.'"> 
// </head>
// <body>

// <p>订单号:'.$order_id.'</p>'.'
// <p>时间:'.$transtime.'</p>'.'
// <p>商品类型码:'.$product_catalog.'</p>'.'
// <p>支付身份标识:'.$identity_id.'</p>'.'
// <p>支付身份标识类型码:'.$identity_type.'</p>'.'
// <p>用户ip（报备后可以使用商户自己的ip）:'.$user_ip.'</p>'.'
// <p>回调URL（商户后台回调）:'.$callbackurl.'</p>'.'
// <p>回调URL（商户前台回调）:'.$fcallbackurl.'</p>'.'
// <p>商品名称:'.$product_name.'</p>'.'
// <p>商品描述:'.$product_desc.'</p>'.'
// <p>金额（以分为单位）:'.$amount.'</p>'.'

// <form method="post" action='.'"'.$url.'"'.'>'.'
// <input type="submit" value="去支付页面">
// </form>
// </bosy>
// </html>';
 
?>

