<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/system/init.php";

use system\models\Article;
use system\models\Lead;
use system\models\SQL;
use system\models\AJAX;
use system\models\SendMailSmtpClass;
call_user_func($_POST["ACTION"], $_POST["PARAMETERS"]);

function getCalculatePhotoUrl($arParams){
	$sql = "SELECT url FROM calculate WHERE 1";
	if(isset($arParams["door_type"])){
		$sql .= " AND door_type = ".SQL::Value($arParams["door_type"]);
	}
	if(isset($arParams["calc_profile"])){
		$sql .= " AND calc_profile = ".$arParams["calc_profile"];
	}
	if(isset($arParams["calc_rack"])){
		$sql .= " AND calc_rack = ".$arParams["calc_rack"];
	}
	if(isset($arParams["calc_plate"])){
		$sql .= " AND calc_plate = ".$arParams["calc_plate"];
	}
	if(isset($arParams["calc_color"])){
		$sql .= " AND calc_color = ".$arParams["calc_color"];
	}
	if(isset($arParams["calc_wicket"])){
		$sql .= " AND calc_wicket = ".$arParams["calc_wicket"];
	}
	$sql .= " LIMIT 1";
	$url = SQL::GetValue($sql, "url");

	if(!$url){
		switch ($arParams["door_type"]){
			case "garage":$url = "/img/calculator/garage/default.jpg";break;
			case "industrial":$url = "/img/calculator/industrial/default.jpg";break;
			case "recoiling":$url = "/img/calculator/recoiling/default.jpg";break;
			case "swinging":$url = "/img/calculator/swinging/default.jpg";break;
		}
	}

    return AJAX::Response($url);
}

function getPaperById($arParams){
    $oArticle = new Article($arParams["article_id"]);
    $arResult = [
        "title"=>$oArticle->getTitle(),
        "description"=>$oArticle->getDescription(),
    ];
    AJAX::Response($arResult);
}

function sendRequest($arParams){
    $site_block = $arParams["siteBlock"];
    $name = $arParams["name"];
    $phone = $arParams["phone"];
    $ip_address = getRealIpAddr();
    $additionalParamsString = isset($arParams["additional_params"]) ?  $arParams["additional_params"] : "";
    $oLead = new Lead();
    $oLead->setName($name);
    $oLead->setPhone($phone);
    $oLead->setIp($ip_address);
    $oLead->setAdditionaParams($additionalParamsString);
    $oLead->save();
    try{
        $subject = "Заявка на вашем сайте";
        $message = ' 
        <html> 
            <head> 
                <title>Заявка на вашем сайте</title> 
            </head> 
            <body> 
                <h4>'.$site_block.'</h4>
                <p><b>Имя:</b> '.$name.'</p>
                <p><b>Телефон:</b> '.$phone.'</p> 
            </body> 
        </html>';
        $result = sendEmail($subject,$message);
        if($result === true){
            AJAX::Response(null, 0, "Письмо успешно отправлено");
        }else {
            AJAX::Response(null, 0, "Письмо не отправлено. Ошибка: " . $result);
        }
    }catch (ErrorException $e){}


}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function sendEmail($subject, $message){
    $mailSMTP = new SendMailSmtpClass('vorota-service@vor-service.ru', 'zrq342SNnZma', 'mx1.hostinger.ru', 'vorota-service', 587); // создаем экземпляр класса
// заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: VokService<vorota-service@vor-service.ru>\r\n"; // от кого письмо
    $result =  $mailSMTP->send('directreklama2016@yandex.ru', $subject, $message, $headers); // отправляем письмо
    return $result;

}
