<section id="contacts" class="trial mt-40 mb-30 text-bold">
	<h2 class="text-center mb-20" style="color:#000">Контактная информация</h2>
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7c372419f33029fe5d447ea44e8e1f6771fc8e2289164020837bd3ecb6825df2&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4" >
				<h6>Телефон:</h6>
				<h5 style="color:#000"><i style="color:rgb(0,133,62)" class="fa fa-phone-square" aria-hidden="true"></i>
					<?php echo $oSite->getMainPhone()?>
				</h5>
			</div>
			<div class="col-xs-12 col-md-4" style="text-align:left">
				<h6>Email:</h6>
				<h5 style="color:#000"><i style="color:rgb(0,133,62)" class="fa fa-envelope" aria-hidden="true"></i>
					<a style="color:#000" href="mailto:email"><?php echo $oSite->getEmail()?></a>
				</h5>
			</div>
			<div class="col-xs-12 col-md-4" style="text-align:left">
				<h6>Адрес:</h6>
				<h5 style="color:#000"><i style="color:rgb(0,133,62)" class="fa fa-map-marker" aria-hidden="true"></i>
					<a style="color:#000"><?php echo $oSite->getAddress()?></a>
				</h5>
			</div>
		</div>
		<div class="text-center mb-20">
			<a class="btn btn-default js-get-call">Заказать звонок</a>
		</div>

	</div>
</section>
