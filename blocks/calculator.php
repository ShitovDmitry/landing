<section id="calculator" class="parallax parallax_one color-black" data-stellar-background-ratio="0.5" style="background-position: center bottom">
	<div class="overlay"></div>
	<div class="parallax_inner">
		<div class="container calc-container">
			<h3>Давайте выберем ваши будущие ворота</h3>
			<p>Воспользуйтесь нашим конструктором ворот и подберите наилучший для вас вариант</p>
			<div class="tabs text-center mt-20 mb-20" id="calc_for_what_block">
				<div class="btn_v2 btn btn-default btn-success btn-sm active" calc_for_what="2" data-id="garage">Гаражные</div>
				<div class="btn_v2 btn btn-default btn-success btn-sm" calc_for_what="1" data-id="industrial">Промышленные</div>
				<div class="btn_v2 btn btn-default btn-success btn-sm" calc_for_what="3" data-id="recoiling">Откатные</div>
				<div class="btn_v2 btn btn-default btn-success btn-sm" calc_for_what="4" data-id="swinging">Распашные</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6 col-xs-12 row">
					<div class="col-xs-6 params" data-id="calc_width">
						<label>Ширина проема:</label>
						<input name="calc_width" value=""><span class="ml-10">мм</span>
					</div>
					<div class="col-xs-6 params" data-id="calc_height">
						<label>Высота проема:</label>
						<input name="calc_height" value=""><span class="ml-10">мм</span>
					</div>
					<div class="col-xs-6 params" data-id="calc_profile">
						<label>Тип панели:</label>
						<select id="calc_profile"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_manufacture">
						<label>Производитель:</label>
						<select id="calc_manufacture"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_rack">
						<label>Тип каркаса:</label>
						<select id="calc_rack"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_plate">
						<label>Обшивка:</label>
						<select id="calc_plate"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_control">
						<label>Управление:</label>
						<select id="calc_control"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_color">
						<label>Цвет:</label>
						<select id="calc_color"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_fundament">
						<label>Фундамент:</label>
						<select id="calc_fundament"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_type_color">
						<label>Тип покраски:</label>
						<select id="calc_type_color"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_wicket">
						<label>Калитка:</label>
						<select id="calc_wicket"></select>
					</div>
					<div class="col-xs-6 params" data-id="calc_lock">
						<label>Замок:</label>
						<select id="calc_lock">
							<option value="0">Выберите</option>
							<option value="1">Электромеханический</option>
							<option value="5">Механический</option>
						</select>
					</div>
					<div class="col-xs-6 params" data-id="calc_wicket_width">
						<label>Ширина калитки:</label>
						<input name="calc_wicket_width" value=""><span class="ml-10">мм</span>
					</div>
					<div class="col-xs-6 params" data-id="calc_wicket_height">
						<label>Высота калитки:</label>
						<input name="calc_wicket_height" value=""><span class="ml-10">мм</span>
					</div>
				</div>

				<div class="col-md-6 col-xs-12">
					<img id="calc_img_control" style="display: none;">
					<img id="calc_img_profile" alt="Конструктор рольставней, профиль" style="display: none;">
					<img id="calc_img" src="" alt="Конструктор ворот">
				</div>
				<div class="col-xs-12">
					<div class="row mt-30">
						<div class="col-md-6 col-lg-6 col-xs-12">
							<p class="text_18">
								Выбранные вами данные сразу же отправятся нашему менеджеру, который поможет вам сделать
								правильный выбор, подтвердите параметры выбранные в нашем конструкторе ворот</p>
						</div>
						<div class="col-md-6 col-lg-6 col-xs-12 text-center">
							<div class="btn btn-default btn-success btn-lg js-confirm-params">Подтвердить параметры</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
