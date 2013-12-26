<?php  
include("yeepay/yeepayMPay.php");
include("config.php");
function a() {echo "aaaa";};


$yeepay = new yeepayMPay($merchantaccount,$merchantPublicKey,$merchantPrivateKey,$yeepayPublicKey);

	$ip='115.29.42.184';

	//GET得到订单号
	$order_id = create_str(15);//$_GET['orderid'];//订单号由后台生成并反馈给前端
	//GET得到用户id
	$user_id  =	$_GET['userid'];
	//GET得到产品id
	$product_id= $_GET['productid'];
	//得到用户ip
	if($_GET['userip'])
	$user_ip	= $_GET['userip'];
	//$order_id = create_str(15);                      	//客户订单号
	$transtime = time();                                                          //交易时间
	$product_catalog ='1';   							//商品类别码
	$identity_id = '2344442err233';           			//支付身份标识
	$identity_type = 0;     							//支付身份标识类型码
 	$user_ip = $user_ip;                                 //用户ip
    $callbackurl ='http://'.$ip.'/ugcpay/zone.php?type='.'paycallback'.'&userid='.$user_id.'&productid＝'.$product_id.'&orderid＝'.$order_id; //商户后台系统回调地址，前后台的回调结果一样
    //echo $callbackurl;
    $fcallbackurl ='what?';           //商户前台系统回调地址，前后台的回调结果一样
	$product_name = '暗影之枪';        				//商品名称
	$product_desc = '金币';        						//商品描述
	$other = 'ergrttth245345.4565.33434';                           //其他支付身份信息
	$amount =4;		                  //交易金额
				
	$url = $yeepay->webPay($order_id,$transtime,$amount,$product_catalog,$identity_id,$identity_type,$user_ip,$callbackurl,$fcallbackurl,$currency=156,$product_name,$product_desc,$other);

 	$arr = explode("&",$url);
 	$encrypt = explode("=",$arr[1]);
 	$data = explode("=",$arr[2]); 
 	//var_dump($url);	


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
echo'<html>
<head>
<meta http-equiv="refresh" 
content="5;url='.$url.'"> 
</head>
<body>

<p>订单号:'.$order_id.'</p>'.'
<p>时间:'.$transtime.'</p>'.'
<p>商品类型码:'.$product_catalog.'</p>'.'
<p>支付身份标识:'.$identity_id.'</p>'.'
<p>支付身份标识类型码:'.$identity_type.'</p>'.'
<p>用户ip（报备后可以使用商户自己的ip）:'.$user_ip.'</p>'.'
<p>回调URL（商户后台回调）:'.$callbackurl.'</p>'.'
<p>回调URL（商户前台回调）:'.$fcallbackurl.'</p>'.'
<p>商品名称:'.$product_name.'</p>'.'
<p>商品描述:'.$product_desc.'</p>'.'
<p>金额（以分为单位）:'.$amount.'</p>'.'

<form method="post" action='.'"'.$url.'"'.'>'.'
<input type="submit" value="去支付页面">
</form>
</bosy>
</html>';
 
?>

