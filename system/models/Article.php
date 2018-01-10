<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 16.12.2017
 * Time: 14:23
 */

namespace system\models;


class Article
{

    protected $id;

    protected $title;

    protected $description;

    protected $is_main;

    /**
     * Article constructor.
     * @param $id
     */
    public function __construct($id)
    {
        if($id){
            $sql = "SELECT * FROM papers WHERE id = ".$id." LIMIT 1";
            $oRow = SQL::GetRow($sql);
            $this->id = $oRow["id"];
            $this->title = $oRow["title"];
            $this->description = $oRow["description"];
            $this->is_main = $oRow["is_main"];
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getShortDescription($length = 200)
    {
        $string = strip_tags($this->description);
        $string = substr($string, 0, $length);
        $string = rtrim($string, "!,.-");
        $string = substr($string, 0, strrpos($string, ' '));
        return $string."...";
    }


    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getisMain()
    {
        return $this->is_main;
    }

    /**
     * @param mixed $is_main
     */
    public function setIsMain($is_main)
    {
        $this->is_main = $is_main;
    }

    public static function GetArticle($is_main = false, $limit = null) {
        $sql = "SELECT id FROM papers WHERE 1";
        if($is_main) {
            $sql .= " AND is_main = ".(int)$is_main;
        }
        if($limit) {
            $sql .= " LIMIT ".(int)$limit;
        }
        $arResult = [];
        foreach(SQL::GetIDArray($sql) as $id) {
            $arResult[] = new self($id);
        }
        return $arResult;
    }

}