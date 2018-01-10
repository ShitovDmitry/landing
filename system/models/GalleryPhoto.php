<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.12.2017
 * Time: 13:39
 */

namespace system\models;


class GalleryPhoto
{
	protected $id;
	protected $url;
	protected $alter;

	/**
	 * Gallery constructor.
	 * @param $id
	 */
	public function __construct($id)
	{
		if($id){
			$sql = "SELECT * FROM gallery WHERE id = ".$id." LIMIT 1";
			$oRow = SQL::GetRow($sql);
			$this->id = $oRow["id"];
			$this->url = $oRow["url"];
			$this->alter = $oRow["alter"];
		}
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param mixed $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}

	/**
	 * @return mixed
	 */
	public function getAlter()
	{
		return $this->alter;
	}

	/**
	 * @param mixed $alter
	 */
	public function setAlter($alter)
	{
		$this->alter = $alter;
	}


	public static function GetAllPhoto($limit = null) {
		$sql = "SELECT id FROM gallery";
		if($limit) {
			$sql .= " LIMIT ".$limit;
		}
		$arResult = [];
		foreach(SQL::GetIDArray($sql) as $id) {
			$arResult[] = new self($id);
		}
		return $arResult;
	}

}
