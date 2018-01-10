<section id="paper_2" class="excellence mb-50">
	<div class="container">
		<h5 style="color:#000"><span style="color:rgb(0,133,62)">ПОЛЕЗНЫЕ</span> СТАТЬИ</h5>
		<div class="row mt-40">
			<div class="col-md-5 other-papers">
                <?php foreach ($arAdditionalArticls as $oArticle):?>
                    <div class="col-md-6 article right-border">
                        <span class="title"><?php echo $oArticle->getTitle()?></span>
                            <span class="article-body">
                            <?php echo $oArticle->getShortDescription()?>
                            <a class="js-open-article-modal" data-article-id="<?php echo $oArticle->getId()?>" style="color:black">читать далее...</a>
                        </span>
                    </div>
                <?php endforeach;?>
			</div>
			<div class="col-md-7 main-papers ">
                <?php foreach ($arMainArticls as $key=>$oArticle):?>
                    <div class="article
                    <?php if($key % 2 == 0) echo "green";
                            else echo "blue"?>">
                        <span class="title"><?php echo $oArticle->getTitle()?></span>
                        <hr>
                        <span class="article-body">
                            <?php echo $oArticle->getShortDescription(607)?>
                            <a class="js-open-article-modal" data-article-id="<?php echo $oArticle->getId()?>" style="color:black">читать далее...</a>
                        </span>
                    </div>
                <?php endforeach;?>
			</div>
		</div>
	</div>
</section>
