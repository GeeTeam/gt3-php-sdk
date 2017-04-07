<?php 
/**
 * 输出二次验证结果,本文件示例只是简单的输出 Yes or No
 */
// error_reporting(0);
require_once dirname(dirname(__FILE__)) . '/lib/class.geetestlib.php';
require_once dirname(dirname(__FILE__)) . '/config/config.php';
session_start();
$GtSdk = new GeetestLib(CAPTCHA_ID, PRIVATE_KEY);


$data = array(
        "user_id" => $_SESSION['user_id'], # 网站用户id
        "client_type" => "web", #web:电脑上的浏览器；h5:手机上的浏览器，包括移动应用内完全内置的web_view；native：通过原生SDK植入APP应用的方式
        "ip_address" => "127.0.0.1" # 请在此处传输用户请求验证时所携带的IP
    );


if ($_SESSION['gtserver'] == 1) {   //服务器正常
    $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $data);
    if ($result) {
        echo '{"status":"success"}';
    } else{
        echo '{"status":"fail"}';
    }
}else{  //服务器宕机,走failback模式
    if ($GtSdk->fail_validate($_POST['geetest_challenge'],$_POST['geetest_validate'],$_POST['geetest_seccode'])) {
        echo '{"status":"success"}';
    }else{
        echo '{"status":"fail"}';
    }
}
?>
