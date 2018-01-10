<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.12.2017
 * Time: 13:19
 */

namespace system\models;


class SQL
{
	/**
	 * Выполняет SQL запрос и записывает результат в массив.
	 *
	 * @param string $query SQL запрос
	 * @param bool $object При $object = true записи из БД выводятся в качестве объектов.
	 * При $object = false записи из БД выводятся в качестве ассоциотивного массива.
	 * @return array
	 * @throws \Exception
	 */
	public static function QueryToArray($query, $object = false) {
		$arResult = [];

		/* @var $DBi  \mysqli */
		global $DBi;

		/* @var $oResultMysql  \mysqli_result */
		$oResultMysql = $DBi->query($query);

		if (!$oResultMysql)
			throw new \Exception($DBi->error, $DBi->errno);

		if ($object)
			while ($oRow = $oResultMysql->fetch_object())
				$arResult[] = $oRow;
		else
			while ($oRow = $oResultMysql->fetch_assoc())
				$arResult[] = $oRow;


		return $arResult;
	}

	/**
	 * Выполняет SQL запрос и записывает результат в одномерный массив пл
	 * заданному столбцу
	 * @global \mysqli $DBi
	 * @param string $query SQL запрос
	 * @param string $colName Название столбца
	 * @param string $key Название столбца, значения которого
	 * будут служить ключами к значениям массива, необязательный параметр.
	 * @return array
	 * @throws \Exception
	 */
	public static function QueryToSimpleArray($query, $colName, $key = "") {
		$arResult = [];
		global $DBi;

		/* @var $oResultMysql  \mysqli_result */
		$oResultMysql = $DBi->query($query);

		if (!$oResultMysql) {
			throw new \Exception($DBi->error, $DBi->errno);
		}

		while ($arRow = $oResultMysql->fetch_assoc()) {
			if (key_exists($colName, $arRow)) {
				if ($key)
					$arResult[$arRow[$key]] = $arRow[$colName];
				else
					$arResult[] = $arRow[$colName];
			}
		}

		return $arResult;
	}

	/**
	 * Выполняет SQL запрос и возвращает первую записть в качестве массива или объекта.
	 *
	 * @param string $query SQL запрос
	 * @param bool $object При $object = true запись из БД выводится в качестве объекта.
	 * При $object = false запись из БД выводится в качестве ассоциотивного массива.
	 * @return array|object
	 * @throws \Exception
	 */
	public static function GetRow($query, $object = false) {
		/* @var $DBi  \mysqli */
		global $DBi;

		/* @var $oResultMysql  \mysqli_result */
		$oResultMysql = $DBi->query($query);

		if (!$oResultMysql)
			throw new \Exception($DBi->error, $DBi->errno);

		if ($object)
			return $oResultMysql->fetch_object();
		else
			return $oResultMysql->fetch_assoc();
	}

	/**
	 * Экранирование SQL строки.
	 * @global \mysqli $DBi
	 * @param string $string
	 * @return string
	 */
	public static function EscapeString($string) {
		/* @var $DBi  \mysqli */
		global $DBi;
		return $DBi->real_escape_string($string);
	}

	/**
	 * Выполняет SQL запрос и записывает результат в массив.
	 * В массив записываются значения определенного поля таблицы (по-умолчанию id).
	 * @global \mysqli $DBi
	 * @param string $query SQL запрос
	 * @param string $field Выбираемое поле
	 * @return array
	 * @throws \Exception
	 */
	public static function GetIDArray($query, $field = "id") {
		$arResult = [];

		/* @var $DBi  \mysqli */
		global $DBi;

		/* @var $oResultMysql  \mysqli_result */
		$oResultMysql = $DBi->query($query);

		if (!$oResultMysql)
			throw new \Exception($DBi->error, $DBi->errno);

		while ($oRow = $oResultMysql->fetch_assoc())
			$arResult[] = $oRow[$field];

		return $arResult;
	}

	/**
	 * Выполняет SQL запрос
	 * @global \mysqli $DBi
	 * @param string $query SQL запрос
	 * @param int $insertID Записывает в данную переменную идентификатор вставленной строки
	 * @return \mysqli_result
	 * @throws \Exception
	 */
	public static function Query($query, &$insertID = null) {
		/* @var $DBi  \mysqli */
		global $DBi;
		$oResult = $DBi->query($query);

		if (!$oResult)
			throw new \Exception($DBi->error, $DBi->errno);

		$insertID = $DBi->insert_id;
		return $oResult;
	}

	/**
	 * Получить одно поле в одной строке
	 * @param string $query SQL запрос (получает первую строку из него)
	 * @param string $field Поле, по умолчанию id.
	 * @return string Значение в указанном поле в первой сстроке
	 */
	public static function GetValue($query, $field = "id") {
		$arRow = self::GetRow($query);
		return $arRow[$field];
	}

	/**
	 * Преобразует true в 1, false в 0, null в NULL (строка).
	 * Экранирует переданное значение и оборачивает его в ''
	 * Напрмер:
	 * SQL::Value(null) вернет "NULL"<br>
	 * SQL::Value("Вася") вернет "'Вася'"<br>
	 * SQL::Value(true) вернет "1"<br>
	 * @global \mysqli $DBi
	 * @param type $value
	 * @return string
	 */
	public static function Value($value) {
		global $DBi;
		if ($value === null)
			return "NULL";
		elseif ($value === true)
			return "1";
		elseif ($value === false)
			return "0";

		return "'" . $DBi->real_escape_string($value) . "'";
	}


	/**
	 * EscapeString для всего массива
	 * @global \mysqli $DBi
	 * @param mixed $array Исходный массив значений
	 * @param string $type Тип данных в массиве
	 * @return mixed
	 */
	public static function EscapeArray($array, $type = "string") {
		global $DBi;
		if (is_array($array) && !empty($array)) {
			foreach ($array as $key => $value) {
				switch ($type) {
					case "int":
						$newValue = intval($value);
						break;
					case "float":
						$newValue = floatval($value);
						break;
					default:
						$newValue = self::EscapeString($value);
						break;
				}
				$array[$key] = $newValue;
			}
		}
		return $array;
	}
}
