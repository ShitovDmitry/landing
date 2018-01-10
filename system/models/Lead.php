<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 16.12.2017
 * Time: 14:59
 */

namespace system\models;


class Lead
{
    protected $id;
    protected $name;
    protected $phone;
    protected $ip;
    protected $additionaParams;
    protected $time;

    /**
     * Lead constructor.
     * @param $id
     */
    public function __construct($id = null)
    {
        if($id){
            $sql = "SELECT * FROM leads WHERE id = ".$id." LIMIT 1";
            $oRow = SQL::GetRow($sql);
            $this->id = $oRow["id"];
            $this->name = $oRow["name"];
            $this->phone = $oRow["phone"];
            $this->ip = $oRow["ip"];
            $this->additionaParams = $oRow["additional_params"];
            $this->time = $oRow["time"];
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }


    /**
     * @return mixed
     */
    public function getAdditionaParams()
    {
        return $this->additionaParams;
    }

    /**
     * @param mixed $additionaParams
     */
    public function setAdditionaParams($additionaParams)
    {
        $this->additionaParams = $additionaParams;
    }

    function save(){
        $name = SQL::Value($this->getName());
        $phone = SQL::Value($this->getPhone());
        $ip = SQL::Value($this->getIp());
        $additional_params = SQL::Value($this->getAdditionaParams());
        $sql = "INSERT INTO leads (name, phone, ip, additional_params, time) VALUES (
            ".$name.",".$phone.",".$ip.",".$additional_params.",NOW())";
        SQL::Query($sql);
        return true;
    }
}