<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.12.2017
 * Time: 15:31
 */

namespace system\models;


class AJAX
{
	/**
	 * Метод печатает массив(для JS) с переданными данными в формате JSON и завершает выполнение скрипта
	 * @param mixed $data Даннык
	 * @param int $code Код возврата
	 * @param string $message Сообщение
	 */
	public static function Response($data = "", $code = 0, $message = "")
	{
		$arResponse = [
			"code" => $code,
			"message" => $message,
			"data" => $data,
		];
		print json_encode($arResponse);
		exit();
	}

}
