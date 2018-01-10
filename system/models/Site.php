<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.12.2017
 * Time: 14:30
 */

namespace system\models;


class Site{

	protected $id;
	protected $name;
	protected $offer;
	protected $logo;
	protected $mainPhone;
	protected $additionalPhone;
	protected $email;
	protected $address;

	/**
	 * Site constructor.
	 * @param $id
	 */
	public function __construct($id)
	{
		if($id){
			$sql = "SELECT * FROM sites WHERE id = ".$id." LIMIT 1";
			$oRow = SQL::GetRow($sql);
			$this->id = $oRow["id"];
			$this->name = $oRow["name"];
			$this->offer = $oRow["offer"];
			$this->logo = $oRow["logo"];
			$this->mainPhone = $oRow["main_phone"];
			$this->additionalPhone = $oRow["additional_phone"];
			$this->email = $oRow["email"];
			$this->address = $oRow["address"];
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
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getOffer()
	{
		return $this->offer;
	}

	/**
	 * @param mixed $offer
	 */
	public function setOffer($offer)
	{
		$this->offer = $offer;
	}

	/**
	 * @return mixed
	 */
	public function getLogo()
	{
		return $this->logo;
	}

	/**
	 * @param mixed $logo
	 */
	public function setLogo($logo)
	{
		$this->logo = $logo;
	}

	/**
	 * @return mixed
	 */
	public function getMainPhone()
	{
		return $this->mainPhone;
	}

	/**
	 * @param mixed $mainPhone
	 */
	public function setMainPhone($mainPhone)
	{
		$this->mainPhone = $mainPhone;
	}

	/**
	 * @return mixed
	 */
	public function getAdditionalPhone()
	{
		return $this->additionalPhone;
	}

	/**
	 * @param mixed $additionalPhone
	 */
	public function setAdditionalPhone($additionalPhone)
	{
		$this->additionalPhone = $additionalPhone;
	}

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param mixed $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

}
