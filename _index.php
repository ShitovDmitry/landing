<?php

use system\models\Article;
use system\models\Site;
use system\models\SQL;
use system\models\GalleryPhoto;


$arGalleryPhoto = GalleryPhoto::GetAllPhoto();
$site_id = 1;
if(!isset($_GET["utm_term"])){
	$site_id = 1;
}
$oSite = new Site($site_id);

$arMainArticls = Article::GetArticle(true, 2);
$arAdditionalArticls = Article::GetArticle(false, 4);

$title="";
$mainSliderPhoto="";
