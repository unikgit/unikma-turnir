<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Турнир Кровельщиков 2020-21");

    /* настройки страницы */

    	
	    $global_IS_DATE_TEST = true;	/* задаем-true и отменяем-false тестовый режим по дате */

    	if ($global_IS_DATE_TEST == true && !empty($_GET['test_date'])) {
    		$global_DATE = $_GET['test_date'];  /* здесь присваиваем любое значение, далее оно бедт заменено на реальное, если режим не тестовый/ С ВЕДУЩИМИ НУЛЯМИ!!! */
		    $global_DATE = str_replace("_", ".", $global_DATE);
    	} else {

 	    	$global_DATE = date("d.m.Y");
   	}
	    

	    //$global_DATE = "24.03.2020"; 	

	    $global_IS_OPEN_REGISTRATION = true;	/* включаем-true и закрываем-false прием заявок на участие в Турнире */

	    /*if ($global_IS_DATE_TEST == false) {//$global_IS_DATE_TEST == false
	    	$global_DATE = date("dd.mm.Y");
	    }*/

	    list($t_d, $t_m, $t_y) = explode(".", $global_DATE);
	    $global_Now = $t_y.$t_m.$t_d;
	    	
	    /* Проверка даты, с которой работает страница */
	    /* Для проверки снять комментарий. Смотреть в консоли */

	    /*?><script>console.log("<?=$global_DATE;?>");</script><?*/

    /* анализ текущего моента и задание констант */
	    $cgl_Day1 = "20200304"; //20200304
	    $cgl_Day2 = "20200305"; //20200305
	    $cgl_Day3 = "20200320"; //20200320
	    $cgl_Day4 = "20200321"; //20200321

	    $cgl_moment1 = "before";
	    $cgl_moment2 = "1";
	    $cgl_moment3 = "2";
	    $cgl_moment4 = "between";
	    $cgl_moment5 = "3";
	    $cgl_moment6 = "4";
	    $cgl_moment7 = "after";

	    if ($global_Now < $cgl_Day1) {
	    	$global_CurrMoment = $cgl_moment1;
	    } elseif ($global_Now == $cgl_Day1) {
	    	$global_CurrMoment = $cgl_moment2;
	    } elseif ($global_Now == $cgl_Day2) {
	    	$global_CurrMoment = $cgl_moment3;
	    } elseif ($global_Now > $cgl_Day2 && $global_Now < $cgl_Day3) {
	    	$global_CurrMoment = $cgl_moment4;
	    } elseif ($global_Now == $cgl_Day3) {
	    	$global_CurrMoment = $cgl_moment5;
	    } elseif ($global_Now == $cgl_Day4) {
	    	$global_CurrMoment = $cgl_moment6;
	    } elseif ($global_Now > $cgl_Day4) {
	    	$global_CurrMoment = $cgl_moment7;
	    }

?>

<?/*This is new comment*/?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style_modal.css">


<script>
    	$('.plashka-top').remove();

    	var gl_Now = "<?=$global_Now;?>";//20200228
    	var gl_CurrMoment = "<?=$global_CurrMoment;?>";

      	console.log(gl_Now);
	   	console.log(gl_CurrMoment);
</script>
<script>
	
$(document).ready(function(){
  $('.avt_btn_fil__deact').on('click', function(){
  	  $('.avt_btn_fil__deact').not(this).removeClass('active');
    $(this).addClass('active');
  });
});
</script>
	<div class="avt_main__banner">

		<?/* БЛОК 0.   календарь   */?>
		<div class="avt_main__banner_row3btn">
			<div class="avt_grid_col_25">
				<div id="idDataBlock" class="avt_main__banner_row3btn_block" data-day="2">
					<div class="avt_main__banner_row3btn_block_date">2 марта</div>
					<div class="avt_main__banner_row3btn_block_head">Штучная черепица<br>Подкровельные слои<br>Мансардные окна<br></div>

					<?/*div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">
						<i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;&nbsp;
						Анонс
					</div*/?>
					<div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">Анонс</div>
				</div>
			</div><!--
			--><div class="avt_grid_col_25">
				<div class="avt_main__banner_row3btn_block" data-day="3">
					<div class="avt_main__banner_row3btn_block_date">3 марта</div>
					<div class="avt_main__banner_row3btn_block_head">Композитная черепица<br>Подкровельные слои<br>Мансардные окна<br></div>

					<?/*div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">
						<i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;&nbsp;
						Анонс
					</div*/?>
					<div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">Анонс</div>
				</div>
			</div><!--
			--><div class="avt_grid_col_25">
				<div class="avt_main__banner_row3btn_block" data-day="5">
					<div class="avt_main__banner_row3btn_block_date">5 марта</div>
					<div class="avt_main__banner_row3btn_block_head">Фальц</div>

					<div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">Анонс</div>
					<?/*div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_now">Сегодня</div*/?>
				</div>
			</div><!--
			--><div class="avt_grid_col_25">
				<div class="avt_main__banner_row3btn_block" data-day="6">
					<div class="avt_main__banner_row3btn_block_date">6 марта</div>
					<div class="avt_main__banner_row3btn_block_head">Фальц<br>Мансардные окна<br><br></div>

					<div class="avt_main__banner_row3btn_block_ticket2   avt_ticket_new">Анонс</div>
				</div>
			</div>
		</div>

	</div>

	<div class="avt_main__banner_bottom"></div><br>
</div><hr>
	<? /* Главное меню */?>
<div id="avt_id_main_menu" class="inner">
	<div>
		<div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr01 active" data-group="01">Афиша</div>
		<?/*
		<div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr1" data-group="1">Итоги дня</div>
		<div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr2" data-group="2">Фото и видео</div>
		<div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr3" data-group="3">Сегодня на Турнире</div>
		*/?>
		<span class="bull"></span><div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr7" data-group="7">Лента Инстаграм</div>
		<span class="bull"></span><div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr6" data-group="6">Лекторий</div>
		<span class="bull"></span><div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr4" data-group="4">Расписание</div>
		<span class="bull"></span><div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr02" data-group="02">Правила</div>
		<span class="bull"></span><div class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr5" data-group="5">Участники</div>
	</div>
</div>

	<? /* БЛОК. Афиша. Часть 1 */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr01"> 

		<div class="inner">

			<br><br>
			<!--h2 style="color: #990000;font-weight: bold;">Встретим весну ярко!</h2-->
			<?/*h2 style="color: #b33; font-weight: 600;">Вторая часть Турнира Кровельщиков 2020 (20 и 21 марта) переносится на осень 2020 года!</h2><br  сен.20*/?>
			<?/*div style="color: #b33; font-weight: 600;">Следите за нашими новостями.</div*/?>
			
			
			<?/*h2 style="color: #b33; font-weight: 600;">Вторая часть Турнира Кровельщиков 2020 будет проведена 1 и 3 декабря 2020 года!</h2><br ##13/11/2020## */?>


			<h2 style="color: #555; font-weight: 600;">Турнир Кровельщиков 2020-21 состоится в <span style="color: #b33;">марте 2021 года!</span></h2><br>

			<?/*div style="color: #b33; font-weight: 600;">Подробности в <a href="https://www.instagram.com/p/B9wjZwWK6Jt/" target="_blank" style="border-bottom: dashed 1px;"> информации от Главного Судьи Турнира-2020</a>.</div*/?>

			<h3 class="avt_grid_col_100  avt_padding_right" style="color:#555; font-size: 18px;">
				<p>4 дня и 10 номинаций: подкровельные слои и вентиляция кровли, штучная черепица, композитная черепица, фальц, установка мансардных окон.</p>
				<p>Сложные и интересные задания на базе Стандартов УНИКМА.</p>
				<p>Выступления и дискуссии по строительной тематике в нашем Лектории.</p>
			</h3><br><br>
			<?/*
			<!--
			--><div class="avt_grid_col_50  avt_padding_left">
			</div>
			*/?>
		</div>


		<div class="avt_sel_data_gr   avt_sel_data_gr01" style="max-width: unset; padding: 30px 0px !important; font-size: 16px;">

			<div class="inner" style="">
				
				<?if ($USER->GetID() != 3002 AND $USER->GetID() != 901) { ?>
			
					<div class="inner">
						<!--div style="text-align: center; font-size: 18px; font-weight: bold;">Прием заявок на участие в Турнире завершен.</div><br><br-->
						<div style="text-align: center; font-size: 24px; font-weight: bold;">До начала Турнира кровельщиков осталось</div>
					</div><br><br>



					<br>

					<script src="//megatimer.ru/get/0e01896f84dce2557f6feeb25a9f23ad.js"></script>
					
					<br><br><br>
					<div style="text-align: center; font-size: 18px; font-weight: 400;">
						<?/*Для обеспечения безопасности участников, судей, зрителей и сотрудников фирмы УНИКМА зрители допусаются на Турнир 2020-21 только после регистрации.  */?>
						Чтобы обеспечить безопасность участников, судей, зрителей и сотрудников фирмы УНИКМА всем <br>
						желающим посетить наш Турнир нужно пройти регистрацию и получить подтверждение. <br>
						Подтверждение возможности вашего участия в Турнире в качестве зрителя отправим после получения заявки.<br><br>
						Заполните, пожалуйста, форму и станьте нашим гостем!
					</div>
					<br><br>
					<div style="display: table; margin: 0 auto;" >
						<a href='javascript:jQuery.fn.apiModal("show",{id:"#send_visitors_2021-1"});' class="btn3_no_bg_red" onclick="ym(39057090, 'reachGoal', 'UNI_TURNIR2020__REGISTRACIA'); return true;"  >
																					РЕГИСТРАЦИЯ ПОСЕТИТЕЛЕЙ																	</a>
					</div>
				<?} else {?>
					<br>
					<?				
										
						unset($ar_descr);
						$ar_descr = Array(
							"hall" => "<h3 style='margin-top:0px;margin-bottom:8px;'><b>Расписание прямых включений Камеры 2</b></h3>",
							"lecture_hall" => "<h3 style='margin-top:0px;margin-bottom:8px;'><b>Расписание прямых включений из лектория</b></h3>",					
						);
						unset($ar_zaglushka);
						$ar_zaglushka = Array(
							"hall" => "/roofing_firm/events/turnir-2020-21/img/hall_no_air_2.jpg",
							"lecture_hall" => "/roofing_firm/events/turnir-2020-21/img/lecture_hall_no_air.jpg",
						);
						$current_date = date("d.m.Y");
						unset($ar_type_hall);
						$ar_type_hall = Array();
						
						unset($arFilter);
						$arFilter = Array("IBLOCK_ID"=>248,'CHECK_PERMISSIONS'=>'N','PROPERTY_VIDEO'=>299736,'ACTIVE'=>'Y','PROPERTY_DAY'=>$current_date);
						$res = CIBlockElement::GetList(Array("PROPERTY_NUMBER"=>'ASC'), $arFilter, false, false);
						while($ob = $res->GetNextElement()) {
							$arFields = $ob->GetFields();
							$arProps = $ob->GetProperties();
							$inner = "";
							if ($arProps["TIMING"]["VALUE"]<>""){
								$inner = $inner."<div class='avt_txt_green_sp' style='width:50px;display:inline-block;'>".$arProps["TIMING"]["VALUE"]."</div>";
							}
							if ($arProps["AVTOR"]["VALUE"]<>""){
								$inner = $inner."<b>".$arProps["AVTOR"]["VALUE"]."</b>";
							}
							if ($arProps["URL"]["VALUE"]<>""){
								$inner = $inner."<a href='".$arProps["URL"]["VALUE"]."' target='_blank'><i class='fa fa-youtube-play avt_btn_video2' aria-hidden='true' style='margin-right:6px;'></i></a>";
							}
							$inner = $inner.$arFields["~NAME"];
							$ar_descr[$arProps["LOCATION"]["VALUE_XML_ID"]] = $ar_descr[$arProps["LOCATION"]["VALUE_XML_ID"]]."<div style='margin-bottom:10px;'>".$inner."</div>";
						}				
						unset($arFilter);
						$arFilter = Array("IBLOCK_ID"=>247,'CHECK_PERMISSIONS'=>'N');
						$res = CIBlockElement::GetList(Array("SORT"=>'ASC'), $arFilter, false, false);
						while($ob = $res->GetNextElement()) {
							$arFields = $ob->GetFields();
							$arProps = $ob->GetProperties();
							$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["NAME"] = $arProps["LOCATION"]["VALUE"];
							if (empty($ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["ACTIVE_CAM"])){
								$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["ACTIVE_CAM"] = "";
							}					
							$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["NAME"] = $arFields["NAME"];
							if ($arFields["ACTIVE"]=="Y" AND $arProps["URL"]["VALUE"]<>""){
								if ($ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["ACTIVE_CAM"] == ""){
									$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["ACTIVE_CAM"] = $arFields["ID"];
								}
								$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["ON_AIR"] = "<iframe style='width: 100%;' src='".$arProps["URL"]["VALUE"]."' frameborder='0' allowfullscreen='1'></iframe>";
							} else {
								$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["ON_AIR"] = "<img width='100%' src='".$ar_zaglushka[$arProps["LOCATION"]["VALUE_XML_ID"]]."'>";
							} 
							if ($arProps["LIVE_BROADCAST"]["VALUE"] == 'Да') {	
								$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["DESCR"] = $ar_descr[$arProps["LOCATION"]["VALUE_XML_ID"]];	
							} else {
								$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["DESCR"] = '';
							}
							$ar_type_hall[$arProps["LOCATION"]["VALUE_XML_ID"]]["CAM"][$arFields["ID"]]["DESCR_CAM"] = $arFields["PREVIEW_TEXT"];
						}
						foreach($ar_type_hall as $id_type_hall => $type_hall){
							if ($type_hall["ACTIVE_CAM"]==""){
								$ii = 1;
								foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){
									if ($ii == 1){
										$ar_type_hall[$id_type_hall]["ACTIVE_CAM"] = $id_cam;	 
									}	
									$ar_type_hall[$id_type_hall]["CAM"][$id_cam]["ON_AIR"] = "<img width='100%' src='".$ar_zaglushka[$id_type_hall]."'>"; 
									$ii++;
								}
							}
						}				
										
						$ii = 1;
						foreach($ar_type_hall as $id_type_hall => $type_hall){
							if ($ii <> 1){?>
								<span class="bull"></span>
					<?					}  ?>
							<div class="avt_btn_fil2   avt_btn_fil__deact2   avt_btn_videozone_<?=$ii;?> <?if ($ii == 1){?> active <?}?>" data-group="<?=$ii;?>" onclick="click_type_hall('<?=$id_type_hall;?>')"><?=$type_hall["NAME"];?></div>
					<?					$ii++;
						}		?>	
						<br><br> 
				
						<div id="bl-3" class="bl-34" style="flex-direction:row; flex-wrap:wrap; line-height: normal;">

						</div>
						
						<br>
						<div id="descr_cam">

						</div>				
						<br> 
						<div class="avt_videozone">
							<div class="avt_grid_col_50  avt_padding_right" style="margin-bottom: 15px;">
								<div class="video" id="video_on_air">	
									
								</div>
							</div><!--
							--><div class="avt_grid_col_50  avt_padding_left" id="description">

							</div>
						</div>

				<?}?>	
     		</div>
     	</div>
	</div><br><br>

<script> 
	// начальное заполнение списка кнопок и объектов
	$(document).ready(function(){
		var div_video_on_air  = document.getElementById('video_on_air');
		if (div_video_on_air){
			div_video_on_air.innerHTML = "<?=$ar_type_hall["hall"]["CAM"][$ar_type_hall["hall"]["ACTIVE_CAM"]]["ON_AIR"];?>";								
		}
		var div_description  = document.getElementById('description');
		if (div_description){
			div_description.innerHTML = "<?=$ar_type_hall["hall"]["CAM"][$ar_type_hall["hall"]["ACTIVE_CAM"]]["DESCR"];?>";	
		}
		
		$('#bl-3').html("");  // Обнуляем текущий список камер
		var element  = document.getElementById('bl-3');
		var fragment = document.createDocumentFragment();
		<?foreach($ar_type_hall["hall"]["CAM"] as $id_cam => $ar_cam){?>
			var div = document.createElement('div');
			div.setAttribute("class", "col-item_i21");
			div.setAttribute("onclick", "click_cam('hall',<?=$id_cam;?>);");
			div.innerHTML = "";
			<?if ($id_cam == $ar_type_hall["hall"]["ACTIVE_CAM"]){?>
				inner = "<a class='iknopka2_cam active_but2' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera avt_btn_video2' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
			<?} else {?>
				inner = "<a class='iknopka2_cam' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
			<?}?>				
			div.innerHTML = inner;
			inner = "";
			fragment.appendChild(div);
			element.appendChild(fragment);
		<?}?>	
		var div_descr_cam  = document.getElementById('descr_cam');
		if (div_descr_cam){
			div_descr_cam.innerHTML = "<?=$ar_type_hall["hall"]["CAM"][$ar_type_hall["hall"]["ACTIVE_CAM"]]["DESCR_CAM"];?>";								
		}
	});	
	function click_cam(id_location,id_cam) {
		var div_video_on_air  = document.getElementById('video_on_air');
		if (div_video_on_air){
		<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>	
				if (id_location == '<?=$id_type_hall;?>') {		
					<?foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){?>		
						if (id_cam == '<?=$id_cam;?>') {				
							div_video_on_air.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$id_cam]["ON_AIR"];?>";
						}	
					<?}?>						
				}	
			<?}?>						
		}
		var div_description  = document.getElementById('description');
		if (div_description){
			<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>	
				if (id_location == '<?=$id_type_hall;?>') {		
					<?foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){?>		
						if (id_cam == '<?=$id_cam;?>') {						
							div_description.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$id_cam]["DESCR"];?>";	
						}	
					<?}?>						
				}	
			<?}?>							
		}
		$('#bl-3').html("");  // Обнуляем текущий список камер
		var element  = document.getElementById('bl-3');
		var fragment = document.createDocumentFragment();
		<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>		
			if (id_location == '<?=$id_type_hall;?>') {	
				<?foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){?>
					var div = document.createElement('div');
					div.setAttribute("class", "col-item_i21");
					div.setAttribute("onclick", "click_cam('<?=$id_type_hall;?>',<?=$id_cam;?>);");
					div.innerHTML = "";
					if (id_cam == '<?=$id_cam;?>') {		
						inner = "<a class='iknopka2_cam active_but2' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera avt_btn_video2' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
					} else {
						inner = "<a class='iknopka2_cam' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
					}							
					div.innerHTML = inner;
					inner = "";
					fragment.appendChild(div);
					element.appendChild(fragment);
				<?}?>	
			}	
		<?}?>	
		var div_descr_cam  = document.getElementById('descr_cam');
		if (div_descr_cam){
			div_descr_cam.innerHTML = "";
			<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>	
				if (id_location == '<?=$id_type_hall;?>') {		
					<?foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){?>		
						if (id_cam == '<?=$id_cam;?>') {								
							div_descr_cam.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$id_cam]["DESCR_CAM"];?>";	
						}	
					<?}?>						
				}	
			<?}?>		
		}
	}	
	function click_type_hall(id_location) {
		var div_video_on_air  = document.getElementById('video_on_air');
		if (div_video_on_air){
			<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>
				if (id_location == '<?=$id_type_hall;?>') {		
					div_video_on_air.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$ar_type_hall[$id_type_hall]["ACTIVE_CAM"]]["ON_AIR"];?>";
				}
			<?}?>				
		}
		var div_description  = document.getElementById('description');
		if (div_description){
			<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>
				if (id_location == '<?=$id_type_hall;?>') {		
					div_description.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$ar_type_hall[$id_type_hall]["ACTIVE_CAM"]]["DESCR"];?>";
				}
			<?}?>	
		}
		$('#bl-3').html("");  // Обнуляем текущий список камер
		var element  = document.getElementById('bl-3');
		var fragment = document.createDocumentFragment();
		<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>		
			if (id_location == '<?=$id_type_hall;?>') {	
				<?foreach($ar_type_hall[$id_type_hall]["CAM"] as $id_cam => $ar_cam){?>
					var div = document.createElement('div');
					div.setAttribute("class", "col-item_i21");
					div.setAttribute("onclick", "click_cam('<?=$id_type_hall;?>',<?=$id_cam;?>);");
					div.innerHTML = "";
					<?if ($id_cam == $ar_type_hall[$id_type_hall]["ACTIVE_CAM"]){?>
						inner = "<a class='iknopka2_cam active_but2' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera avt_btn_video2' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
					<?} else {?>
						inner = "<a class='iknopka2_cam' id='btn_<?=$id_cam;?>'><i id='icon_<?=$id_cam;?>' class='fa fa-video-camera' aria-hidden='true'></i>&nbsp;&nbsp;<?=$ar_cam["NAME"];?></a><br>";
					<?}?>					
					div.innerHTML = inner;
					inner = "";
					fragment.appendChild(div);
					element.appendChild(fragment);
				<?}?>	
			}	
		<?}?>		
		var div_descr_cam  = document.getElementById('descr_cam');
		if (div_descr_cam){
			div_descr_cam.innerHTML = "";
			<?foreach($ar_type_hall as $id_type_hall => $type_hall){	?>
				if (id_location == '<?=$id_type_hall;?>') {				
					div_descr_cam.innerHTML = "<?=$ar_type_hall[$id_type_hall]["CAM"][$ar_type_hall[$id_type_hall]["ACTIVE_CAM"]]["DESCR_CAM"];?>";	
				}
			<?}?>				
		}
	}		
</script>

	<? /* БЛОК. Афиша. Врезка */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr01" style="max-width: unset; padding: 30px 0px !important;">
		<div class="avt_color_block_1">
			<div class="inner">

				
				<div class="avt_color_block_1_in">
					<h3>СТАТЬ УЧАСТНИКОМ ТУРНИРА КРОВЕЛЬЩИКОВ</h3><br>
					
					<p>Подать заявку на участие в Турнире Кровельщиков 2020-21 может любая строительная фирма, ИП, частное лицо, специализирующиеся на строительстве и реконструкции скатных кровель.</p><br>

					<?/*div class="avt_btn_zayavka" onclick="javascript:jQuery.fn.apiModal('show',{id:'#send_participant_2021'});">Подать заявку на участие в Турнире</div*/?>
					<div class="avt_btn_zayavka">Запись закрыта</div>
				</div>
			</div>

		</div>
	</div>

	<?

		unset($arInf_246);
		$arInf_246 =Array();

		$db_iblock = CIBlock::GetList(Array("IBLOCK_TYPE_ID"=>"ASC"),Array());
		while ($ar_iblock = $db_iblock->GetNext()){
			if ($ar_iblock["XML_ID"]=="instagram_search_hashtag"){
				$arInf_246['IBLOCK_ID'] = $ar_iblock['ID'];	
			}
		}

	    $dbR = CIBlockElement::GetList(Array("NAME" => "desc"), Array("IBLOCK_ID"=>$arInf_246['IBLOCK_ID'],"ACTIVE"=>"Y",'!PROPERTY_LIKE'=>false,'CHECK_PERMISSIONS'=>'N'), false, Array("nTopCount" => 4), Array());  

		unset($arSM_insta);
		$arSM_insta =Array();
	   	
		/* формирование массива данных */
			$sc_count = 0;
		   	while($arSRT = $dbR->GetNextElement()) {
		    	$data_fields = $arSRT->GetFields();
				$data_props = $arSRT->GetProperties(); 

		        //$p1 = $data_fields["ID"];
		        //$p2 = $data_props["DOC_NAME"]["VALUE"];
		        $sc = $data_props["SHORT_CODE"]["VALUE"];

		        $arSM_insta[$sc]["SHORT_CODE"] = $sc;
		        $arSM_insta[$sc]["MAIN_FOTO"] = CFile::GetPath($data_props["PIC_320_320"]["VALUE"]);
		        $arSM_insta[$sc]["OWNER_ID"] = $data_props["OWNER_ID"]["VALUE"];
		        $arSM_insta[$sc]["USERNAME"] = $data_props["USERNAME"]["VALUE"];

				$t_fullname = $data_props["FULL_NAME"]["VALUE"];
				$arSM_insta[$sc]["FULL_NAME"] = $t_fullname;
				if (strlen($t_fullname) > 15) {
					$t_fullname = substr($t_fullname, 0, 15)." ...";//
					//$t_last_pos = strrpos($t_fullname, " ");
					//$t_fullname = substr($t_fullname, 0, $t_last_pos-1)."  ...";//
				}
		        $arSM_insta[$sc]["SHORT_NAME"] = $t_fullname;
		        $arSM_insta[$sc]["PIC_PROFILE"] = CFile::GetPath($data_props["PIC_PROFILE"]["VALUE"]);
		        
				$t_comment = $data_props["COMMENT"]["VALUE"]["TEXT"];
				if (strlen($t_comment) > 70) {
					$t_comment = substr($t_comment, 0, 70)." ...";//
				}
				$bad_symbols = array("\n", "\r");
				$t_comment = str_replace($bad_symbols,'',$t_comment);
		        $arSM_insta[$sc]["COMMENT"] = $t_comment;
		        $sc_count += 1;
		    }
		
			$divider_after = "-->";
			$divider_before = "<!--";
    ?>
	<div class="avt_sel_data_gr   avt_sel_data_gr01" style="max-width: unset; padding: 30px 0px !important; font-size: 16px;">
		<div class="inner">

			<h3><b>Публикации в Инстаграм с хештегом #турниркровельщиков</b></h3>

			<div id="html_insta_preview"></div><br>
			<div style="float:right;font-size: 15px;" class="avt_btn_fil3 avt_btn_fil__deact">СМОТРЕТЬ ВСЕ&nbsp;<i class="fas fa-arrow-right" style="solid"></i></div>
		</div>	
	</div>

	
	<br><br>
	
	<script>	
		$(document).ready(function(){
			var wh = document.documentElement.clientWidth;
			var div_html_insta_preview  = document.getElementById('html_insta_preview');
			if (div_html_insta_preview){
				var ii = 0;
				var html_insta = '';
				var html_insta_row_before = '<div class="avt_grid__insta_25">';
				var html_insta_row_after = '</div><?=$divider_before;?>';
				if (wh>769){ 
					var html_insta1 = html_insta_row_before;
					var html_insta2 = '<?=$divider_after;?>'+html_insta_row_before;
					var html_insta3 = '<?=$divider_after;?>'+html_insta_row_before;
					var html_insta4 = '<?=$divider_after;?>'+html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						ii++;						
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						if (ii==1) {
							html_insta1 = html_insta1+html_insta;
						}
						if (ii==2) {
							html_insta2 = html_insta2+html_insta;
						}
						if (ii==3) {
							html_insta3 = html_insta3+html_insta;
						}
						if (ii==4) {
							html_insta4 = html_insta4+html_insta;
							ii = 0;
						}						
					<?}	?>	
					html_insta1 = html_insta1+html_insta_row_after;
					html_insta2 = html_insta2+html_insta_row_after;
					html_insta3 = html_insta3+html_insta_row_after;
					html_insta4 = html_insta4+html_insta_row_after;					
					div_html_insta_preview.innerHTML = html_insta1+html_insta2+html_insta3+html_insta4;
				}
				if (wh<=769 && wh>=376){  
					var html_insta1 = html_insta_row_before;
					var html_insta2 = '<?=$divider_after;?>'+html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						ii++;						
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						if (ii==1) {
							html_insta1 = html_insta1+html_insta;
						}
						if (ii==2) {
							html_insta2 = html_insta2+html_insta;
							ii = 0;
						}											
					<?}?>	
					html_insta1 = html_insta1+html_insta_row_after;
					html_insta2 = html_insta2+html_insta_row_after;
					div_html_insta_preview.innerHTML = html_insta1+html_insta2;
				}
				if (wh<376){  
					var html_insta1 = html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						html_insta1 = html_insta1+html_insta;
					<?}?>	
					div_html_insta_preview.innerHTML = html_insta1+html_insta_row_after;					
				}
			}			
		});	
	</script>
	
<div class="inner">
	<? /* БЛОК. Афиша. Часть 2 */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr01" style="color: #555; font-size: 16px;">

		<br><br>
		<div class="avt_rasp_dop">
			<br><h4>Календарь</h4><br>
			<h4><i>- Турнир Кровельщиков 2020-21 -</i></h4><br><br>

			<div class="avt_grid_col_25  avt_padding_center">
				<h5>29 января</h5><p>Анонс Турнира 2020-21 и старт приема заявок на участие в Турнире 2020-21</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_red_sp">15 февраля</span></h5><p>Финиш приема заявок на участие в Турнире 2020-21</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_red_sp">16 февраля</span></h5><p>Публикация списка участников Турнира 2020-21</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_blue_sp">17 февраля</span></h5><p>Отправка заданий участникам Турнира 2020-21</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_blue_sp">25 февраля</span></h5><p>Публикация информации о форме и дате брифингов</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_green_sp">2 марта • ТУРНИР</span></h5><p>Подкровельные слои<br>Штучная черепица<br>Мансардные окна</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_green_sp">3 марта • ТУРНИР</span></h5><p>Подкровельные слои<br>Композитная черепица<br>Мансардные окна</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_green_sp">5 марта • ТУРНИР</span></h5><p>Фальц</p>
			</div><!--
			--><div class="avt_grid_col_25  avt_padding_center">
				<h5><span class="avt_txt_green_sp">6 марта • ТУРНИР</span></h5><p>Фальц <br>Мансардные окна</p>
			</div>
			<?/*!--
			--><div class="avt_grid_col_25  avt_padding_center">
			</div*/?>
		</div><br><br>


		<h3>Место проведения и контакты</h3>
		<div class="avt_mainline_p1"></div><!-- --><div class="avt_mainline_p2"></div><br><br>

		<div class="avt_grid_col_50  avt_padding_right">

			<div class="avt_txt_green">ФИРМА УНИКМА<br>Центр обслуживания клиентов ЗАПАД</div><br>
			МО, Красногорский район, д. Гольево, ул. Центральная, стр. 6Б.<br><br>

			Координаты GPS для навигатора:<br>
			55.806726, 37.309329 +55°48' 24.21”, +37°18' 33.58”<br><br>

			В Яндекс.Навигатор нас можно найти по фразе <b>УНИКМА Гольево</b><br><br><br>
			
			<div class="avt_txt_green">КОНТАКТЫ</div><br>

			Алексей Горкевич<br>
			Руководитель Проекта<br>
			Тел: +7 (910) 427-10-91<br><br>

		</div><!--
		--><div class="avt_grid_col_50  avt_padding_left">
			
				<img src="img/map1.jpg"/>
			
		</div><br><br>

		<h3>Как добраться</h3>
		<div class="avt_mainline_p1"></div><!-- --><div class="avt_mainline_p2"></div><br><br>

		<div class="avt_grid_col_50  avt_padding_right">
			<div class="avt_txt_green">НА АВТОМОБИЛЕ</div><br>

			<b>По Новорижскому шоссе: </b><br>
	        Проехать 3 км по Новорижскому шоссе от МКАД. Сразу за Москва-рекой по указателю «Красногорск, Ильинское» съехать с Новорижского шоссе 
			на круговое движение.<br><br> 

			На втором съезде съехать с кругового движения. Перед АЗС ЕКА повернуть налево. Двигаться прямо, 
			мимо пятиэтажного здания бизнес-центра (стоит справа). Для проезда на парковку проехать мимо склада до Т-образного перекрестка 
			и повернуть направо. Проехать еще 120 метров прямо до ворот с вывеской УНИКМА.<br><br>
			
		</div><!--
		--><div class="avt_grid_col_50  avt_padding_left">
			<div class="avt_txt_green">НА ОБЩЕСТВЕННОМ ТРАНСПОРТЕ</div><br>

			<b>От станции МЦД2 «Красногорская»:</b><br>
			Станция МЦД2 «Красногорская», последний вагон из центра. 
			Перейти на другую сторону ж/д путей и через поселение Ивановское двигаться в сторону Новорижского шоссе. 
			Через 1000 метров вы увидите ворота с надписью «УНИКМА».<br><br>
		</div><br><br><br>
	</div>

	<? /* БЛОК. Правила */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr02" style="color: #555; font-size: 16px;" hidden>

	

		<div class="avt_grid_col_50  avt_padding_right">
			<h3><b>Организатор Турнира</b></h3> <br>

			<div class="avt_txt_green">ФИРМА УНИКМА</div><br>

			<div class="avt_ramka_block">
				<img src="img/logo_turnir.png"/>
			</div><br>
		</div><!--
		--><div class="avt_grid_col_50  avt_padding_left">
			<h3><b>Официальные спонсоры Турнира</b></h3> <br>

			<div class="avt_txt_green">ВЕДУЩИЕ ПРОИЗВОДИТЕЛИ МАТЕРИАЛОВ ДЛЯ КРОВЛИ</div><br>

			<div class="avt_ramka_block">
				<img src="img/logo-turnir3.png"/>
			</div><br>
		</div><br><br><br>


			
		<div class="avt_grid_col_50  avt_padding_right">

			<h3><b>Подача заявки на участие</b></h3><br>

			<div class="avt_txt_green">УЧАСТНИКИ</div>
			Для участия в номинациях «подкровельные слои» и «кровля» принимаются команды из трех человек: двух кровельщиков и наставника. 
			Для участия в номинации «мансардные окна» принимаются заявки по одному участнику.<br><br>

			<div class="avt_txt_green">СПОСОБ ПОДАЧИ ЗАЯВКИ</div>
			Подать заявку на участие в Турнире Кровельщиков 2020-21 может любая строительная фирма, ИП, частное лицо, специализирующиеся на строительстве и реконструкции скатных кровель.<br>
			Заявка отправляется в электронном виде с сайта фирмы УНИКМА.<br><br>

			<div class="avt_txt_green">СРОК ПОДАЧИ ЗАЯВКИ</div>
			Заявки по всем номинациям принимаются с 29 января 2021 года по 15 февраля 2021 года включительно. В течение 1 рабочего дня после отправки заявки с кандидатом свяжется сотрудник фирмы УНИКМА для проверки контактных данных и подтверждения получения заявки.<br><br>

			<div class="avt_txt_green">РАССМОТРЕНИЕ ЗАЯВКИ</div>
			Заявки рассматривает организационный комитет Турнира под руководством Главного Судьи Турнира.<br>
			С каждым кандидатом на участие в Турнире проводится собеседование.<br><br>
		</div><!--
		--><div class="avt_grid_col_50  avt_padding_left">

			<h3><b>Формирование списка участников</b></h3><br>

			<div class="avt_txt_green">РЕГЛАМЕНТ</div>
			Список участников формируется и размещается на странице Турнира сайта фирмы УНИКМА 16 февраля. Новости о формировании списка участников дублируются в аккаунтах фирмы УНИКМА в социальных сетях Facebook и Instagram.<br><br>

			<div class="avt_txt_green">ТРЕБОВАНИЯ К УЧАСТНИКАМ</div>
			Подавая заявку и соглашаясь на включение в список участников, строитель подтверждает:
			<ul>
				<li>наличие знаний и опыта работы с кровельными материалами</li>
				<?/*li>применение или желание применять на практике Стандарты фирмы УНИКМА по скатным кровлям</li*/?>
				<li>готовность к дню соревнования изучить задание и решить возникающие вопросы с организаторами</li>
				<li>свое стремление к победе</li>
			</ul><br>
			
			<div class="avt_txt_green">ОБЯЗАТЕЛЬСТВО УЧАСТВОВАТЬ</div>
			Участник Турнира Кровельщиков осознает, что неявка на соревнование или отказ от участия менее чем за неделю лишает возможности участвовать и, возможно, победить в Турнире других кровельщиков. Уважайте коллеги и заранее информируйте организаторов о любых изменениях в своих планах!
		</div><br><br><br>
	</div>
</div>

<? /* БЛОК. Правила. Врезка */?>
<div class="avt_sel_data_gr   avt_sel_data_gr02" style="max-width: unset; padding: 30px 0px !important;" hidden>
	<div class="avt_color_block_1">
		<div class="inner">

			
			<div class="avt_color_block_1_in">
				<h3>СТАТЬ УЧАСТНИКОМ ТУРНИРА КРОВЕЛЬЩИКОВ</h3><br>
				
				<p>Подать заявку на участие в Турнире Кровельщиков 2020-21 может любая строительная фирма, ИП, частное лицо, специализирующиеся на строительстве и реконструкции скатных кровель.</p><br>

				<?/*div class="avt_btn_zayavka" onclick="javascript:jQuery.fn.apiModal('show',{id:'#send_participant_2021'});">Подать заявку на участие в Турнире</div*/?>
				<div class="avt_btn_zayavka">Запись закрыта</div>
			</div>
		</div>

	</div>
</div>

<div class="inner">
	<? /* БЛОК. Правила. Часть 2 */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr02" style="color: #555; font-size: 16px;" hidden> 

		<br>

		<div class="avt_grid_col_50  avt_padding_right">

			<h3><b>Задания Турнира</b></h3><br>

			<div class="avt_txt_green">ЗАДАНИЯ</div>
			Задания формируются на основании Стандартов фирмы УНИКМА.<br>
			Сложность задания подбирается организатором Турнира и проверяется в ходе предварительных прогонов.<br>
			Все задания являются исполнимыми при условии предварительной проработки и качественного планирования работы в день Турнира.<br>
			Описание задания будет разослано участникам 17 февраля. Тренировки на своих полях приветствуются.<br><br>

			<b>Степень сложности задания и темп работы – высокие</b><br><br>

			<div class="avt_txt_green">ВРЕМЯ НА ВЫПОЛНЕНИЕ ЗАДАНИЯ</div>
			Работы в номинации «подкровельные слои + кровля» проводятся в один день и занимают 7-8 часов интенсивной работы.<br>
			Работы в номинации «установка мансардного окна» проводятся в один день и занимают 3-4 часа интенсивной работы.<br><br>

			<div class="avt_txt_green">КРИТЕРИИ ОЦЕНКИ</div>
			<ul>
				<li>четкость выполнения задания</li>
				<li>аккуратность</li>
				<li>соблюдение норм безопасности</li>
				<li>организация рабочей площадки</li>
				<li>выполненный объем работ</li>
			</ul>

		</div><!--
		--><div class="avt_grid_col_50  avt_padding_left">

			<h3><b>Проведение Турнира</b></h3><br>

			<div class="avt_txt_green">БРИФИНГ ДЛЯ УЧАСТНИКОВ</div>
			Перед началом соревнования организатор проводит брифинг, на котором объясняет правила Турнира и отвечает на вопросы по заданиям. Форма и время проведения брифинга будут объявлены 25 февраля 2021 года. Рекомендуем участникам не пропускать брифинг!<br><br>

			<div class="avt_txt_green">ВРЕМЯ ПРИБЫТИЯ УЧАСТНИКОВ</div>
			В день соревнования команды-участники должны прибыть в место проведения Турнира к 8:30. Учитывайте погодные условия и возможные пробки. При опоздании команды, организаторы Турнира имеют право отказать в участии.<br><br>

			<div class="avt_txt_green">ПОДВЕДЕНИЕ ИТОГОВ И НАГРАЖДЕНИЕ</div>
			Итоги по всем номинациям подводятся в течение текущего дня Турнира.<br>
			Награждение призеров и вручение дипломов участникам проводится в конце текущего дня Турнира.<br><br>

			<div class="avt_txt_green">СУДЕЙСТВО И ИТОГИ ТУРНИРА</div>
			Судейство обеспечивает организатор Турнира с привлечением профессионалов отрасли.<br><br>

			Итоги Турнира Кровельщиков размещаются на сайте фирмы УНИКМА, а также в аккаунтах фирмы УНИКМА в социальных сетях Facebook и Instagram.
		</div><br><br><br>

		
		<h3><b>Руководители Турнира</b></h3><br>

		<div class="avt_grid_col_25  avt_padding_left text-center">
			<img src="img/gorkevich.jpg" style="border-radius: 50%; width: 180px;"><br><br>
			<b style="color: #000;">Алексей Горкевич</b><br>
			<span style="color: #555;">Руководитель Проекта</span>
		</div><!--
		--><div class="avt_grid_col_25   text-center">
			<img src="img/fedorov1.png" style="border-radius: 50%; width: 180px;"><br><br>
			<b style="color: #000;">Андрей Федоров</b><br>
			<span style="color: #555;">Главный судья Турнира</span>
		</div><!--
		--><div class="avt_grid_col_25  avt_padding_left text-center">
			<img src="img/seleznev.png" style="border-radius: 50%; width: 180px;"><br><br>
			<b style="color: #000;">Владимир Селезнев</b><br>
			<span style="color: #555;">Главный эксперт</span>
		</div><!--
		--><div class="avt_grid_col_25  avt_padding_left text-center">
			<div class="avt-specfoto">
				<img src="img/kovalchuk_180.png" style="border-radius: 50%; width: 180px;">
			</div><br>
			<b style="color: #000;">Александр Ковальчук</b><br>
			<span style="color: #555;">Художник-постановщик</span>
		</div>
		<br>
		<br>
		<br>
	</div>



	<? /* БЛОК. Расписание. Все дни */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr4" hidden>

		<? /* БЛОК. Расписание день 1 - 04.03 - МЧ */?>

		<div class="avt_sel_data_gr4   avt_sel_day1">

			<div class="avt_grid_col_66  avt_padding_right">

				<div class="avt_rasp_main">
					<br><h4>Расписание дня Турнира 2020-21</h4><br><br>

					<h6><i>- Открытие дня -</i></h6><br>
					<div class="avt_grid_col_33  avt_padding_center">
						<h5>08:30</h5><p>Прибытие команд в зал проведения Турнира<br>Расстановка команд у макетов</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>08:45</h5><p>Перекличка участников. Объяснение задач и правил Турнира</p>
					</div>

					<br><br><div class="vis_desctop"><br></div>
					<h3 style="color: #393; font-weight: bold; text-align: center;">2 и 3 марта</h3>
					<h6><i>- Подкровельные слои и кровельное покрытие -</i></h6>

					<div class="avt_grid_col_33  avt_padding_center">
						<h5>09:00</h5><p>Старт номинации Подкровельные слои</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>10:10</h5><p>Финиш номинации Подкровельные слои</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>10:10 - 10:30</h5><p>Перерыв на кофе<br> Работа судей на макетах</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>10:30</h5><p>Старт номинации Кровельное покрытие</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>12:00 - 13:00</h5><p>Перерыв на обед<br> Два потока по 30 минут</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:00</h5><p>Финиш в номинации Кровельное покрытие<br>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:10 - 18:00</h5><p>Перерыв на кофе<br> Работа судей на макетах</p>
					</div>

					<br><br><div class="vis_desctop"><br></div>
					<h3 style="color: #393; font-weight: bold; text-align: center;">2 и 3 марта</h3>
					<h6><i>- Мансардные окна -</i></h6>

					<div class="avt_grid_col_33  avt_padding_center">
						<h5>10:30</h5><p>Старт в номинации Мансардные окна</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>13:00 - 13:30</h5><p>Перерыв на обед</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>15:00</h5><p>Финиш в номинации Мансардные окна</p>
					</div>

					<br>

					<?/*<div class="avt_grid_col_33  avt_padding_center">
						<h5>13:30</h5><p>Старт №2 установки мансардных окон</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:00</h5><p>Финиш №2 установки мансардных окон<br>Сбор инструмента</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:00 - 17:30</h5><p>Работа судей на макетах</p>
					</div>*/?>

					<br><br><div class="vis_desctop"><br></div>
					<h3 style="color: #393; font-weight: bold; text-align: center;">5 и 6 марта</h3>
					<h6>- Фальц и мансардные окна -</h6>

					<div class="avt_grid_col_33  avt_padding_center">
						<h5>09:00</h5><p>Старт номинации Фальц</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>12:00 - 13:00</h5><p>Перерыв на обед<br> Два потока по 30 минут</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:00</h5><p>Финиш в номинации Фальц<br>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>17:10 - 18:00</h5><p>Перерыв на кофе<br> Работа судей на макетах</p>
					</div>

					<br><br><div class="vis_desctop"><br></div>
					<h6><i>- Награждение -</i></h6>

					<div class="avt_grid_col_33  avt_padding_center">
						<h5>18.00</h5><p>Награждение в номинациях:<br>Мансардные окна<br>Подкровельные слои<br>Кровельное покрытие</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center">
						<h5>19.00</h5><p>Закрытие дня Турнира</p>
					</div>

					<br><br><br><br>

				</div>

			<br><br>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_left">

				<?/*
				<div class="avt_rasp_dp">
					<br><h4>Для гостей Турнира</h4><br><br>

					<p>Каждый год на Туринир приезжает много гостей и мы знаем, как спанировать день, чтобы было интересно всем.<br><br>

					Если вас, в первую очередь интересует соревновательная часть, рекомендуем приезжать к середине дня.<br> К 13 часам макеты уже будут частично покрыты кровельным материалом и само соревнование выходит на финишную прямую. Азарт и скорость работы нарастают и наблюдать за работой кровельщиков становится очень увлекательно!<br><br>

					Помимо просмотра соревнований, у нас есть большая программа специально для гостей Турнира. Это ЛЕКТОРИЙ и МАСТЕР-КЛАССЫ. Мы стараемся планировать их на весь день, поэтому вы можете приезжать к нам в лююбое время течение дня и найдете для себя много интерсного.<br><br>

					вы можете пообщаться с коллегами в нашем кафе на первом этаже. Если нужно чуть больше тишины, у нас есть несколько переговорных комнат на втором этаже. Здесь шум Турнира бует не так заметен. 

					у нас есть </p>
				</div>
				>
			    <div class="avt_rasp_progtype">

			    	<h4 class="avt_txt_green">МАСТЕР-КЛАССЫ</h4><br>
			    	
			    	<p>Работа высококлассных мастеров-кровельщиков, а также возможность попробовать свои силы под руководством наставника.<br><br>
			    
			    	Программа мастер-классов будет опубликована во второй половине февраля.</p>

			    	Если вы сами хотите провести мастер-класс - свяжитесь с руководителями Турнира.</p><br>

			    	<img src="img/dp_master.jpg">
			    </div><br><br*/?>

			    <div class="avt_rasp_progtype">

			    	<h4 class="avt_txt_green">ЛЕКТОРИЙ</h4><br>

			    	<p>Выступления и презентации по строительной тематике руководителей строительных фирм, представителей поставщиков, блогеров.<br><br>

			    	Программа лектория будет опубликована до 25 февраля.<br><br>

			    	Если у вас есть интересная тема, которую вы хотите обсудить на нашем лектории - свяжитесь с руководителями Турнира.</p><br>

			    	<img src="img/dp_lectory.jpg">
			    </div>
			</div>

			<br><br>


			<?/*<div class="avt_rasp_dop">
				<br><h4>Расписание дополнительной программы</h4><br>
				<h4><i>- 4 марта -</i></h4><br><br>

				<div class="avt_grid_col_25  avt_padding_center">
					<h5>08:30</h5><p>Прибытие команд в зал проведения Турнира<br>Расстановка команд у макетов</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>08:45</h5><p>Сбор всех участников. Объяснение задач и правил Турнира</p>
				</div>

				<br><br>

				<div class="avt_grid_col_25  avt_padding_center">
					<h5>09:00</h5><p>Старт №1 в номинации «Мансардные окна»</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>12:30</h5><p>Финиш №1 в номинации «Мансардные окна», сбор инструмента</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>12:30 – 13:00</h5><p>Перерыв на кофе<br>Работа судей на макетах</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>13:00 - 14:00</h5><p>Подготовка макетов для второго соревнования</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>14:00</h5><p>Старт №2 в номинации «Мансардные окна»</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>17:30</h5><p>Финиш №2 в номинации «Мансардные окна», сбор инструмента</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>17:30 - 18:00</h5><p>Перерыв на кофе<br>Работа судей на макетах</p>
				</div>

				<br><br>

				<div class="avt_grid_col_25  avt_padding_center">
					<h5>18.00</h5><p>Награждение в номинациях:<br>Мансардные окна<br>Подкровельные слои скатной кровли<br>Металлочерепица</p>
				</div><!--
				--><div class="avt_grid_col_25  avt_padding_center">
					<h5>19.00</h5><p>Закрытие первого дня Турнира</p>
				</div>
			</div>*/?>
			<br>
			
			<?/*
			<div class="avt_rasp_main_foto">
				
				<h3>Фотогалерея</h3>
				<br>
				<?
					$GLOBALS["XML_ID_GALLERY"]=3883653; //3902443
					$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_TEMPLATE_PATH."/gallery/gallery.php"), false);
					$show_gallery = true;
				?>
				<br><br>
			</div>
			*/?>
		</div>
	</div>

	<? /* БЛОК. Лекторий. Все дни */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr6" style="color: #555; font-size: 16px;" hidden>

		<h3><b>Расписание Лектория</b></h3> <br>
		
		<div class="avt_lect_day   avt_lect_day_2" data-day="2">2 марта</div>
		<div class="avt_lect_day   avt_lect_day_3" data-day="3">3 марта</div>
		<div class="avt_lect_day   avt_lect_day_5" data-day="5">5 марта</div>
		<div class="avt_lect_day   avt_lect_day_6" data-day="6">6 марта</div>
		<br>
		<br>
		<!--h4>Расписание лектория будет опубликовано до 25 февраля 2021 года.</h4-->
		<br>
		<br>


				<?/*div class="avt_rasp_main2   avt_lect_day_data   avt_lect_day_2_data">
					<a href="2021mar02.pdf" target="_blanc"><div style="text-align: right; font-size: 16px; color: #777; border-bottom: dashed 1px; display: inline-block;">Версия для печати <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red; font-size: 20px;"></i></div></a>
					<span class="vis_desctop"><br></span>
					<h4>Лекторий<br><br>2 марта</h4><span class="vis_desctop"><br><br></span>

					<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>10:00 - 10:30</h5><p>СТАРТ РАБОТЫ ЛЕКТОРИЯ<br>История Турниров Кровельщиков фирмы УНИКМА</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>10:30 - 11:30</h5><p>УНИКМА<br>Инженерно-техническая поддержка УНИКМА помогает строителям больше зарабатывать</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>11:30 - 12:00</h5><p>GL-HOUSE<br>Строительство до знакомства с фирмой УНИКМА и после</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>12:00 - 13:00</h5><p>ПАРОК<br>Теплоизоляция PAROC. Эффективные решения</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>13:00 - 13:30</h5><p>ДЕРКЕН<br>Ультрафиолетовая стабильность подкровельных пленок</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>13:30 - 14:00</h5><p>S.T.I.M.U.L.</b><br>Примеры работы с заявками с  сайта фирмы УНИКМА</p>
					</div><!-- <div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>14:00 - 15:30</h5><p>ВИЛПЕ<br>Системы вентиляции VILPE<br>
					</div> --><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>15:30 - 16:00</h5><p>ЛЕСОГРАД<br>Проблемы конкурентной борьбы на рынке  кровельных работ. Честные и  нечестные способы получения преимуществ перед конкурентами</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>16:00 - 17:00</h5><p>АКВАСИСТЕМ<br>Металлическая модульная черепица со скрытым креплением – новинка ТМ AQUASYSTEM</p>
					</div>

					<br><br><br><br>
				</div>

				<div class="avt_rasp_main2   avt_lect_day_data   avt_lect_day_3_data">
					<a href="2021mar03.pdf" target="_blanc"><div style="text-align: right; font-size: 16px; color: #777; border-bottom: dashed 1px; display: inline-block;">Версия для печати <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red; font-size: 20px;""></i></div></a>
					<span class="vis_desctop"><br></span>
					<h4>Лекторий<br><br>3 марта</h4><span class="vis_desctop"><br><br></span>

					<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>10:00 - 11:00</h5><p>УНИКМА<br>Инженерно-техническая поддержка УНИКМА помогает строителям больше зарабатывать</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>11:00 - 12:00</h5><p>ТЕГОЛА<br>Вся правда о гибкой черепице</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>12:00 - 13:00</h5><p>БОРИС ЗАЙЦЕВ. АРХИТЕКТОР<br>С чего начинается качественная кровля</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>13:00 - 14:00</h5><p>АНДРЕЙ ФЕДОРОВ.<br>Стропильные системы деревянного дома. Обсуждение</p>
					</div><!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>14:00 - 15:00</h5><p>CEDRAL<br>Красивый и долговечный фасад из фиброцементных панелей. Возможности применения и преимущества материала<br>
					</div>
					<!--
					--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
						<h5>15:00 - 15:30</h5><p>DÖRKEN<br>Ультрафиолетовая стабильность подкровельных пленок<br>
					</div>

					<br><br><br><br>
				</div*/?>
	</div>

	<? /* БЛОК. Участники турнира*/?>
	<div class="avt_sel_data_gr   avt_sel_data_gr5" hidden>

	
	<div class="avt_rasp_dop">
			<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>2 МАРТА</h5>
				<p><img alt="" src="/upload/iblock/789/shch2.460.jpg" class="mFullImage" width="100%"></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>ШТУЧНАЯ ЧЕРЕПИЦА</h5>
				<p><span style="color: #777;">ИП Сясин Иван Сергеевич </span><br>
				<a href="/roofing_firm/build/builders/finde/paritet-dom/" > Паритет Дом </a><br>
				<a href="/roofing_firm/build/builders/finde/gudstroy/" >ГУДСТРОЙ</a><br>
				<a href="/roofing_firm/build/builders/finde/sovremennaya-krovlya/" >Современная кровля</a><br>
				<a href="/roofing_firm/build/builders/finde/ip-vinokurov/" >ИП Винокуров</a><br>
				<a title="GL-house" href="/roofing_firm/build/builders/finde/gl-house/" class="colorm">GL-house</a><br></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>МАНСАРДНОЕ ОКНО</h5><p>
				<a href="/roofing_firm/build/builders/finde/remstroysiti/">БОГАРД</a><br>
				<a href="/roofing_firm/build/builders/finde/paritet-dom/">Паритет Дом</a><br>
				<a href="/roofing_firm/build/builders/finde/sovremennaya-krovlya/">Современная кровля</a><br>
				<a href="/roofing_firm/build/builders/finde/lesograd/">Лесоград</a><br></p>
			</div>
		</div>
		<br><br>
		<div class="avt_rasp_dop">
			<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>3 МАРТА</h5>
				<p><img alt="" src="/upload/iblock/789/gch1.460.jpg" class="mFullImage" width="100%"></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>КОМПОЗИТНАЯ ЧЕРЕПИЦА</h5>
				<p><a href="/roofing_firm/build/builders/finde/remstroysiti/">БОГАРД</a><br>
				<span style="color: #777;">ИП Сясин Иван Сергеевич</span><br>
				<a href="/roofing_firm/build/builders/finde/kharston/">ХАРСТОН</a><br>
				<span style="color: #777;">Юрт</span><br>
				<span style="color: #777;">РуфКреп</span><br>
				<a href="/roofing_firm/build/builders/finde/mks/">МКС</a></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>МАНСАРДНОЕ ОКНО</h5>
				<p><span style="color: #777;">Шушу В.П.</span><br>
				<a href="/roofing_firm/build/builders/finde/ip-khramtsov-v-yu/">ИП Храмцов В.Ю</a><br>
				S.T.I.M.U.L.<br>
				<span style="color: #777;">КрышНофф</span><br></p>
			</div>
		</div>
		<br><br>
		<div class="avt_rasp_dop">
			<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>5 МАРТА</h5>
				<p><img alt="" src="/upload/iblock/789/f1.460.jpg" class="mFullImage" width="100%"></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>ФАЛЬЦ</h5>
				<p>
			<a href="/roofing_firm/build/builders/finde/ooo-vayar/">ВАЯР</a><br>
			<a href="/roofing_firm/build/builders/finde/premer-stroy/" >ПРЕМЬЕР-СТРОЙ М</a><br>
			<!-- <a href="/roofing_firm/build/builders/finde/stroygarant-2002/" >СтройГарант-2002</a><br> -->
			<!-- <a href="/roofing_firm/build/builders/finde/alistal/" >Алистал</a><br> -->
			<!--  <a href="/roofing_firm/build/builders/finde/arkom%20pro/" >Арком-проект</a><br>-->			
			<a href="/roofing_firm/build/builders/finde/inzhstroykom/">ИнжСтройКом</a><br>
			
			<span style="color: #777;">ВИКИРС</span><br>
			<span style="color: #777;">ИП Герасимов Андрей Николаевич</span><br>
			
			<!--span style="color: #777;">KrovExpo</span><br-->
			<span style="color: #777;">РЕМСТРОЙКРОВ</span><br>
			<!-- <span style="color: #777;">Spetskompetens Europa AB (Швеция)</span><br> -->
			<!-- <span style="color: #777;">ИП Покроев Роман Николаевич</span><br> -->
			<!-- <span style="color: #777;">ВИКИРС</span><br> -->
			<!-- <span style="color: #777;">Кровли Москвы</span><br> -->
			<!-- <span style="color: #777;">ИП Махмутов</span><br> -->
			<!-- <a href="/roofing_firm/build/builders/finde/ooo-k-m-s/">К-М-С</a><br> -->
			</p>
			</div><!--
			--><!-- <div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>МАНСАРДНОЕ ОКНО</h5>
				<p>
					<a href="/roofing_firm/build/builders/finde/stroygarant-2002/" >СтройГарант-2002</a><br>
					<a href="/roofing_firm/build/builders/finde/alistal/" >Алистал</a><br>
					<span style="color: #777;">ВИКИРС</span><br>
					<span style="color: #777;">ЮРТ</span><br>
				</p>
			</div> -->
		</div>
		<br><br>
				<div class="avt_rasp_dop">
			<div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>6 МАРТА</h5>
				<p><img alt="" src="/upload/iblock/789/f2.460.JPG" class="mFullImage" width="100%"></p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
					<h5>ФАЛЬЦ</h5>
					<p>
						<!-- 	<a href="/roofing_firm/build/builders/finde/ooo-vayar/">ВАЯР</a><br> -->
						<!-- 	<a href="/roofing_firm/build/builders/finde/premer-stroy/" >ПРЕМЬЕР-СТРОЙ М</a><br> -->
					<!-- 	<a href="/roofing_firm/build/builders/finde/stroygarant-2002/" >СтройГарант-2002</a><br> -->
						<a href="/roofing_firm/build/builders/finde/alistal/" >Алистал</a><br>
						<a href="/roofing_firm/build/builders/finde/arkom%20pro/" >Арком-проект</a><br>
						<!-- 			<a href="/roofing_firm/build/builders/finde/inzhstroykom/">ИнжСтройКом</a><br> -->
			
						<span style="color: #777;">ЮРТ</span><br>
						<!-- 	<span style="color: #777;">Иван Кровля</span><br> -->
			
						<!--span style="color: #777;">KrovExpo</span><br-->
						<span style="color: #777;">Колледж 26 КАДР</span><br>
						<!-- 		<span style="color: #777;">Spetskompetens Europa AB (Швеция)</span><br> -->
						<!-- 			<span style="color: #777;">ИП Покроев Роман Николаевич</span><br> -->
						<!-- 		<span style="color: #777;">ВИКИРС</span><br> -->
						<!-- 	<span style="color: #777;">Кровли Москвы</span><br> -->
						<span style="color: #777;">ИП Махмутов</span><br>
						<!-- 	<a href="/roofing_firm/build/builders/finde/ooo-k-m-s/">К-М-С</a><br> -->
						<span style="color: #777;">Выпускники школы Саврос</span><br>
					</p>
			</div><!--
			--><div class="avt_grid_col_33  avt_padding_center  avt_after_avt_rasp_main2_h5">
				<h5>МАНСАРДНОЕ ОКНО</h5>
				<p>
				<!-- 	<a href="/roofing_firm/build/builders/finde/stroygarant-2002/" >СтройГарант-2002</a><br> -->
					<a href="/roofing_firm/build/builders/finde/alistal/" >Алистал</a><br>
				<!-- 	<span style="color: #777;">ВИКИРС</span><br> -->
					<span style="color: #777;">ЮРТ</span><br>
					<span style="color: #777;">ИП Махмутов</span><br>
				</p>
			</div>
		</div>
		
		
		<br>
	</div>


	<? /* БЛОК. Соцсети*/?>
		<?
			
		            
		    $dbR = CIBlockElement::GetList(Array("NAME" => "desc"), Array("IBLOCK_ID"=>$arInf_246['IBLOCK_ID'],"ACTIVE"=>"Y",'CHECK_PERMISSIONS'=>'N'), false, Array("nTopCount" => 60), Array());  

			unset($arSM_insta);
			$arSM_insta =Array();
		   	
			/* формирование массива данных */
				$sc_count = 0;
			   	while($arSRT = $dbR->GetNextElement()) {
			    	$data_fields = $arSRT->GetFields();
					$data_props = $arSRT->GetProperties(); 

			        //$p1 = $data_fields["ID"];
			        //$p2 = $data_props["DOC_NAME"]["VALUE"];
			        $sc = $data_props["SHORT_CODE"]["VALUE"];

			        $arSM_insta[$sc]["SHORT_CODE"] = $sc;
			        $arSM_insta[$sc]["MAIN_FOTO"] = CFile::GetPath($data_fields["PREVIEW_PICTURE"]);
			        $arSM_insta[$sc]["OWNER_ID"] = $data_props["OWNER_ID"]["VALUE"];
			        $arSM_insta[$sc]["USERNAME"] = $data_props["USERNAME"]["VALUE"];

					$t_fullname = $data_props["FULL_NAME"]["VALUE"];
					$arSM_insta[$sc]["FULL_NAME"] = $t_fullname;
					if (strlen($t_fullname) > 15) {
						$t_fullname = substr($t_fullname, 0, 15)." ...";//
						//$t_last_pos = strrpos($t_fullname, " ");
						//$t_fullname = substr($t_fullname, 0, $t_last_pos-1)."  ...";//
					}
			        $arSM_insta[$sc]["SHORT_NAME"] = $t_fullname;
			        $arSM_insta[$sc]["PIC_PROFILE"] = CFile::GetPath($data_props["PIC_PROFILE"]["VALUE"]);
			        
					$t_comment = $data_props["COMMENT"]["VALUE"]["TEXT"];
					if (strlen($t_comment) > 250) {
						$t_comment = substr($t_comment, 0, 250)." ...";//
						//$t_last_pos = strrpos($t_comment, " ");
						//$t_comment = substr($t_comment, 0, $t_last_pos-1)."  ...";//
					}
					$bad_symbols = array("\n", "\r");
					$t_comment = str_replace($bad_symbols,'',$t_comment);
			        $arSM_insta[$sc]["COMMENT"] = $t_comment;
			/* ?><pre><?print_r($t_comment);?></pre><?  */
			        $sc_count += 1;
			    }

		    /* создание верстки */
				/*  
				$html_insta = "";
			    foreach($arSM_insta as $key_sc => $elData) {

				    $url_p = "href='https://www.instagram.com/p/".$arSM_insta[$key_sc]["SHORT_CODE"]."/' target='_blanc'";
				    $url_a = "href='https://www.instagram.com/".$arSM_insta[$key_sc]["USERNAME"]."/' target='_blanc'";

			    	$html_insta .= " --><div class='avt_grid__insta_25'>";
			    	$html_insta .= "	<div class='avt_block_insta_in_grid'>";
			    	$html_insta .= "		<a ".$url_a ."><div class='avt_block_insta_header'>";
			    	$html_insta .= "			<div class='avt_block_insta_logo'><img src='".$arSM_insta[$key_sc]["PIC_PROFILE"]."' style='border-radius: 50%;'></div>";
			    	$html_insta .= "			<div class='avt_block_insta_account2'>".$arSM_insta[$key_sc]["SHORT_NAME"]."</div>";
			    	$html_insta .= "			<div class='avt_block_insta_btn_profil'>Профиль</div>";
			    	$html_insta .= "		</div></a>";
			    	$html_insta .= "		<a ".$url_p ."><div class='avt_block_insta_foto'><img src='".$arSM_insta[$key_sc]["MAIN_FOTO"]."'></div></a>";
			    	$html_insta .= "		<a ".$url_p ."><div class='avt_block_insta_btn'>";
			    	$html_insta .= "			<i class='fa fa-heart-o' aria-hidden='true'></i>";
			    	$html_insta .= "			<i class='fa fa-comment-o' aria-hidden='true'></i>";
			    	$html_insta .= "			<i class='fa fa-paper-plane-o' aria-hidden='true'></i>";
			    	$html_insta .= "		</div></a>";
			    	$html_insta .= "		<a ".$url_a ."><div class='avt_block_insta_account'>".$arSM_insta[$key_sc]["FULL_NAME"]."</div></a>";
			    	$html_insta .= "		<a ".$url_p ."><div class='avt_block_insta_text'>".$arSM_insta[$key_sc]["COMMENT"]."</div></a>";
			    	$html_insta .= "	</div>";
			    	$html_insta .= "</div><!-- ";
			    }
			    $html_insta = "<!-- ".$html_insta." -->";
				*/			
				$divider_after = "-->";
				$divider_before = "<!--";
	    ?>

	<div class="avt_sel_data_gr   avt_sel_data_gr7" hidden>

		<?/*<h3><b>В Инстаграм о Турнире</b></h3> <br>*/?>

		<?/*<pre><?print_r($sc_count);?></pre>*/?>
		<?/*<pre><?print_r($arSM_insta);?></pre>*/?>

		<div id="html_insta"><?/*=$html_insta;*/?></div>
		
	</div><br><br>
	
	<script>	
		$(document).ready(function(){
			var wh = document.documentElement.clientWidth;
			var div_html_insta  = document.getElementById('html_insta');
			if (div_html_insta){
				var ii = 0;
				var html_insta = '';
				var html_insta_row_before = '<div class="avt_grid__insta_25">';
				var html_insta_row_after = '</div><?=$divider_before;?>';
				if (wh>769){ 
					var html_insta1 = html_insta_row_before;
					var html_insta2 = '<?=$divider_after;?>'+html_insta_row_before;
					var html_insta3 = '<?=$divider_after;?>'+html_insta_row_before;
					var html_insta4 = '<?=$divider_after;?>'+html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						ii++;						
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						if (ii==1) {
							html_insta1 = html_insta1+html_insta;
						}
						if (ii==2) {
							html_insta2 = html_insta2+html_insta;
						}
						if (ii==3) {
							html_insta3 = html_insta3+html_insta;
						}
						if (ii==4) {
							html_insta4 = html_insta4+html_insta;
							ii = 0;
						}						
					<?}	?>	
					html_insta1 = html_insta1+html_insta_row_after;
					html_insta2 = html_insta2+html_insta_row_after;
					html_insta3 = html_insta3+html_insta_row_after;
					html_insta4 = html_insta4+html_insta_row_after;					
					div_html_insta.innerHTML = html_insta1+html_insta2+html_insta3+html_insta4;
				}
				if (wh<=769 && wh>=376){  
					var html_insta1 = html_insta_row_before;
					var html_insta2 = '<?=$divider_after;?>'+html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						ii++;						
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						if (ii==1) {
							html_insta1 = html_insta1+html_insta;
						}
						if (ii==2) {
							html_insta2 = html_insta2+html_insta;
							ii = 0;
						}											
					<?}?>	
					html_insta1 = html_insta1+html_insta_row_after;
					html_insta2 = html_insta2+html_insta_row_after;
					div_html_insta.innerHTML = html_insta1+html_insta2;
				}
				if (wh<376){  
					var html_insta1 = html_insta_row_before;
					<?foreach($arSM_insta as $key_sc => $elData) {?>	
						url_p = 'href="https://www.instagram.com/p/<?=$elData["SHORT_CODE"];?>/" target="_blank"';
						url_a = 'href="https://www.instagram.com/<?=$elData["USERNAME"];?>/" target="_blank"';
						html_insta = '<div class="avt_block_insta_in_grid"><a '+url_a+'><div class="avt_block_insta_header"><div class="avt_block_insta_logo"><img src="<?=$elData["PIC_PROFILE"];?>" style="border-radius: 50%;"></div>&nbsp;&nbsp;<div class="avt_block_insta_account2"><?=$elData["SHORT_NAME"];?></div><div class="avt_block_insta_btn_profil">Профиль</div></div></a><a '+url_p+'><div class="avt_block_insta_foto"><img src="<?=$elData["MAIN_FOTO"];?>"></div></a><a '+url_p+'><div class="avt_block_insta_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></div></a><a '+url_a+'><div class="avt_block_insta_account"><?=$elData["FULL_NAME"];?></div></a><a '+url_p+'><div class="avt_block_insta_text"><?=$elData["COMMENT"];?></div></a></div>';
						html_insta1 = html_insta1+html_insta;
					<?}?>	
					div_html_insta.innerHTML = html_insta1+html_insta_row_after;					
				}
			}			
		});	
	</script>
	
	<style>

		.mDeptCol {
			padding: 0 20px 20px 20px;
		}	
		.mFullImage {
			background-color: #f7f7f7;
			margin-bottom: 5px;
		}	
		.mDeptTitle {
			width: 100%;
			color: #000;
			padding: 0px 10px 12px 20px;
			font-size: 16px;
			font-weight: 400;
			position: relative;
			z-index: 2;
		}	
		.mDeptTitle1 {
			width: 100%;
			color: #000;
			padding: 0px 0px 0px 20px;
			font-size: 16px;
			font-weight: 400;
			position: relative;
			z-index: 2;
		}	


		/* MEDIA */	
		@media (max-width:769px) {

			.mDeptTitle {
				font-size: 14px;
				padding-left: 10px;
			}
			.mDeptCol {
				padding: 0 10px 10px 10px;
				font-size: 12px;
			}
		}
	</style>
	
	<?/*if ($USER->IsAdmin() AND $USER->GetID() == 3002) {?><pre><?print_r($all_CatSects);?></pre><?}*/ ?>

	<style>
		.cont_box {
			width: 100%;
			height: auto;
			text-align: left;
			vertical-align: top;
			/* margin: 20px; */
			padding: 10px;
			margin-top: 5px;
		}
		.active_but {
			font-weight: bold;
			border: solid 2px #393;
			padding: 4px;
		}
		.iopisanie_left {
			vertical-align: middle;
			display: inline-block;
			width: 27%;
		}
		.iopisanie_right{
			vertical-align: middle;
			display: inline-block;
			width: 70%;
			font-size: 16px;
			font-weight: bold;
		}
		.iknopka2 {
			display: inline-block;
			height: 124px;
			border: solid 1px #d8d8d8;
			background-color: #ffffff;
			background-position: 100% 6%;
			background-origin: content-box;
			text-align: left;
			border-radius: 10px;
			margin-bottom: 10px;
			cursor: pointer;
			margin: 4px;
			height: auto;
			padding: 5px;   
		}
		.iopisanie_left2 {
			vertical-align: middle;
			display: inline-block;
			padding: 0px 14px;
		}
		.bbtt_gr {
			padding: 0px 0px;
			font-size: 14px;
			border: solid 1px #9a9a9a;
			display: inline-block;
			color: #9a9a9a;
			border-radius: 5px;
			background-color: #ffffff;
			background-position: 100% 6%;
			background-origin: content-box;
			text-align: left;
			margin-bottom: 10px;
			cursor: pointer;
			margin-bottom: 30px;
			margin-top: 10px;
			margin-right: 10px;
		}
		.bbtt_gr:hover {
			background: #9a9a9a;
			color: #fff;
			border: solid 1px #9a9a9a;
		}
		.bbtt_gr_active {
			padding: 0px 0px;
			font-size: 14px;
			border: solid 1px #9a9a9a;
			display: inline-block;
			color: #fff;
			border-radius: 5px;
			background-color: #9a9a9a;
			background-position: 100% 6%;
			background-origin: content-box;
			text-align: left;
			margin-bottom: 10px;
			cursor: pointer;
			margin-bottom: 30px;
			margin-top: 10px;
			margin-right: 10px;
		}
		.bbttt {
		 
			font-size: 15px;
			border-radius: 10px;
			color: #222;
			display: inline-block;
			height: 124px;
			border: solid 1px #d8d8d8;
			background-color: #ffffff;
			background-position: 100% 6%;
			background-origin: content-box;
			text-align: left;
			margin-bottom: 10px;
			cursor: pointer;
			margin: 4px;
			height: auto;
			padding: 5px;
		}
		.bbttt:hover {
			background: #9a9a9a;
			color: #fff;
			border: solid 1px #9a9a9a;
		}
		/* MEDIA */	
		@media (max-width: 1023px) and (min-width: 768px) {
			.mColumn_4 {
				float:right;
			}
			.mColumn {	
				margin-left: 25px;
			}
		}	
	</style>
	<? /* БЛОК. Гостям */?>
	<div class="avt_sel_data_gr   avt_sel_data_gr8" hidden>

	</div>

	<? /* Спонсоры */?>
	<h3>Официальные спонсоры Турнира</h3>
		<div class="avt_mainline_p1"></div><!-- --><div class="avt_mainline_p2"></div><br><br>

	    <div>
			
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m3'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/main_delta.jpg">
				</a>
			</div>  
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m4'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="/upload/raznoe/saab.jpg">
				</a>
			</div>			
			<?/*
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" class="avt_foto_line5">
				<a href="#" data-modal="#modal3" class="modal__trigger">
					<img src="/upload/raznoe/velux-1.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" class="avt_foto_line5">
				<a href="#" data-modal="#modal4" class="modal__trigger">
					<img src="/upload/raznoe/katepal.jpg">
				</a>
			</div>*/?>
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m10'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="/upload/raznoe/braas.jpg">
				</a>
			</div>
			
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m5'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/main_paroc.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m6'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/main_severstal.jpg">
				</a>
			</div>
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m7'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/fakro.jpg">
				</a>
			</div>
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m8'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/m.jpg">
				</a>
			</div> 
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m9'}); return false;" class="avt_foto_line5">
				<a href="#">
					<img src="img/sponsor/tegola.jpg">
				</a>
			</div>
				
			
			<!-- Modal -->
			<div id="m3" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>Dörken (ООО «ДЁРКЕН»)</h2>
						<p>ООО «ДЁРКЕН» является дочерним предприятием немецкой фирмы Dörken GmbH & Co. KG, основанной в 1896 году и занимающей лидирующие позиции в Европе по разработке и производству инновационных изоляционных систем для скатных крыш. ООО «ДЁРКЕН» начало свою работу в конце 2006 года и занимается дистрибуцией и продвижением на российском рынке основных продуктов Dörken GmbH & Co. KG, которые производятся в Германии: подкровельные водо- и пароизоляционные плёнки DELTA®, диффузионные мембраны, клеи и соединительные ленты, кровельные аксессуары; профилированные мембраны DELTA® для защиты гидроизоляции и дренажа подземных и заглубленных сооружений; гидроизоляционные самоклеящиеся мембраны и отсечная гидроизоляция для стен; дренажные мембраны DELTA® для устройства зелёных и эксплуатируемых крыш, для мощения площадей брусчаткой. Подкровельные плёнки DELTA® производятся по различным технологиям только из первичного сырья, что обеспечивает максимальную долговечность и надёжность крыш. Специальные решения разработаны для пологих крыш, металлических кровель, регионов с экстремально суровыми климатическими условиями. Система клеящих материалов (лент, клеев и паст) позволяет профессионально выполнить самые сложные детали и гарантировать надёжность всей крыши.</p>
						
					
					
						
					</div>
				</div>
			</div>
			<div id="m4" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>SSAB (ООО «ССАБ Шведская Сталь СНГ»)</h2>
						<p>Сталелитейная компания SSAB с производственными площадками в странах Северной Европы и США поставляет на рынок высококачественную продукцию и оказывает услуги, разработанные в тесном сотрудничестве с потребителями, стремясь сделать наш мир более прочным, легким и устойчивым. Компания SSAB, свыше 50 лет выпускающая сталь для строительной отрасли, является первопроходцем и новатором в разработке и производстве широкого спектра экологически чистой стали с полимерными покрытиями под маркой GreenCoat® для кровли, фасадов и водосточных систем. Значительная часть традиционных нефтепродуктов в покрытии заменена шведским рапсовым маслом. Эта технология обеспечивает экологичность и долговечность в сочетании с повышенной производительностью. Таким образом, не существует более экологически чистой стали с полимерным покрытием для строительства, чем GreenCoat®.</p>
						
						<!-- modal close button -->
					
						
					</div>
				</div>
			</div>			
			<div id="m10" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>BRAAS (ООО «БРААС-ДСК1»)</h2>
						<b>BMI BRAAS – МИРОВОЙ ЛИДЕР </b><br>
						BRAAS – признанный международный лидер в области качества и инноваций (<noindex><a href="https://www.bmigroup.com/our-company">https://www.bmigroup.com/our-company</a></noindex>), является самым крупным производителем натуральной черепицы в России и в мире (согласно «Отчету исследовательского агентства ABARUS Market Research» от 2019 г.). Компания входит в группу BMI с оборотом более 2 млрд. евро, которая объединяет 150 производственных предприятий и 11 000 высококвалифицированных специалистов. Компания BMI в России представлена 3-мя высокотехнологичными заводами: производство битумных кровельных и гидроизоляционных материалов в г. Петушки Владимирской области и два завода по производству минеральной черепицы в Москве и Краснодаре. 
						Широкий ассортимент продукции, самые современные кровельные и гидроизоляционные решения открывают огромные перспективы для развития бизнеса наших партнеров, архитекторов, дизайнеров, проектировщиков. 
						Мы стремимся  предоставлять высокий уровень сервиса, разрабатывать и продвигать новые высококачественные, уникальные решения для кровель и подземной гидроизоляции.<br><br>
						 
						<b>ЧЕРЕПИЦА BRAAS – ТРАДИЦИИ ЕВРОПЕЙСКОЙ АРХИТЕКТУРЫ </b><br>
						Минеральная и керамическая черепица BRAAS – самая  популярная черепица на кровельном рынке России и стран СНГ (согласно «Отчету исследовательского агентства ABARUS Market Research» от 2019 г.). Мы производим натуральную черепицу в России с 1996 года на современных предприятиях в Москве и Краснодаре. <br><br>
						<b>СЛУЖИТ СТОЛЕТИЯМИ</b><br>
						В нашем музее BRAAS продемонстрированы образцы черепицы, которые прослужили на кровле более ста лет, при этом полностью сохранили свои эксплуатационные характеристики и привлекательный внешний вид.<br><br>
						<b>ПОДЛИННАЯ АРХИТЕКТУРА </b><br>
						Благородно подчеркивает красоту и самобытность дома, создает комфортный микроклимат и домашний уют внутри. <br><br>
						<b>СОВРЕМЕННЫЙ ТРЕНД</b><br>
						Отражает современный тренд, направленный на использование только безопасных, природных и экологически чистых материалов и технологий в строительстве.<br><br>
						<b>ВЫГОДНАЯ ИНВЕСТИЦИЯ </b><br>
						Является долгосрочной и выгодной инвестицией в строительство собственного дома, а ее применение существенно повышает рыночную стоимость самого здания.<br><br>
						<b>ПОЧЕМУ ВЫБИРАЮТ МИНЕРАЛЬНУЮ ЧЕРЕПИЦУ BRAAS:</b><br>
						 • ПРОЧНОСТЬ И МОРОЗОСТОЙКОСТЬ: во много раз превосходит все существующие требования по морозостойкости и прочности. Согласно европейским нормативам EN 490, 491 по прочности и морозостойкости черепица BRAAS превосходит по морозостойкости в 40 раз, а по прочности – 1,5 раза, поэтому рекомендуется для эксплуатации во всех климатических зонах Российской Федерации (<noindex><a href="https://www.braas.ru/shop/czementno-peschannaya-cherepicza/frankfurtskaya/#frankfurtskaya-ryadovaya-cherepica-krasnyj">https://www.braas.ru/shop/czementno-peschannaya-cherepicza/frankfurtskaya/#frankfurtskaya-ryadovaya-cherepica-krasnyj</a>);</noindex><br>
						•	РАЗНООБРАЗИЕ ЦВЕТОВ И МОДЕЛЕЙ: представляется самый широкий ассортимент натуральной черепицы в мире.<br>
						•	сохраняет свой оригинальный цвет в течение всего срока службы, благодаря объемному внутреннему прокрашиванию и двойному поверхностному окрашиванию;<br>
						•	ДЕТАЛЬНО ПРОДУМАННАЯ КРОВЕЛЬНАЯ СИСТЕМА: тщательно проработанные узлы и решения, оригинальные компоненты и комплектующие позволяют гарантировать   долговечность и надежность всей кровельной системы.<br>
						•	30-ЛЕТНЯЯ ГАРАНТИЯ: производитель добровольно возлагает на себя дополнительные долгосрочные обязательства, подтверждающие высокое качество черепицы. 

					
						
					</div>
				</div>
			</div>	
					
			<div id="m5" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>Paroc (ООО «ПАРОК»)</h2>
						<p>PAROC® предлагает энергоэффективные и пожаробезопасные теплоизоляционные решения из каменной ваты для строительства и ремонта зданий, судов и морских сооружений, акустической изоляции и других промышленных применений. За продукцией стоят 80-летний опыт и знания в сфере производства каменной ваты, подкрепленные компетенцией и инновациями в области технической изоляции.<br>

						Направление «Строительная изоляция» предлагает широкий ассортимент продукции и решений для любого вида теплоизоляции  зданий. Строительная изоляция используется для огнезащиты, тепло- и звукоизоляции наружных стен, кровли, пола и фундамента, а также для межэтажных перекрытий и внутренних перегородок. Ассортимент включает акустические потолочные и стеновые панели для контроля звукоизоляции в помещении, а также решения для контроля уровня шума в промышленных условиях.<br>

						Направление «Техническая изоляция» предлагает огнезащиту, тепло- и звукоизоляцию для систем отопления, вентиляции и кондиционирования воздуха, решения по изоляции для технологических процессов и трубопроводов, промышленного оборудования, судостроения и морских сооружений.</p>
						
						<!-- modal close button -->
				
						
					</div>
				</div>
			</div>
			
			<div id="m6" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><div class="api_modal_close demo-close"></div>
						<h2>ПАО «Северсталь»</h2>
						<p>«Северсталь» — одна из крупнейших в мире вертикально интегрированных сталелитейных и горнодобывающих компаний полного металлургического цикла: от добычи сырья до производства готового продукта. Компания поставляет свою продукцию во все основные сектора промышленности: строительную отрасль, автомобилестроение, топливно-энергетический комплекс, машиностроение, судостроение.
						«Северсталь» первой среди российских металлургических компаний представила рынку металлопрокат с полимерным покрытием, разработанный специально для кровли: «Стальной шёлк», «Стальной бархат» и «Стальной кашемир». При разработке данной линейки продукции были проведены многочисленные исследования, консультации с проектировщиками и строителями. Металлопрокат успешно прошел испытания в различных климатических условиях. Показатели качества покрытия значительно превосходят требования ГОСТ. На продукцию предоставляется гарантия долговечности до 50 лет.</p>
						
						
						
					</div>
				</div>
			</div>
			<div id="m7" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>Fakro</h2>
						<p>Компания FAKRO – один из ведущих мировых производителей мансардных окон и чердачных лестниц, а также единственный на рынке, предоставляющий уникальный сервис: бессрочную гарантию на стеклопакет и запчасти к мансардным окнам FAKRO независимо от причины повреждения и даты покупки (<noindex><a href="https://www.fakro.ru/servis/lyubye-zapchasti-k-oknam-besplatno/">https://www.fakro.ru/servis/lyubye-zapchasti-k-oknam-besplatno/</a></noindex>) <br><br>

						FAKRO – европейская семейная компания, основанная в 1991 году. За 29 лет компания стала автором многих инновационных решений и патентов. 12 фабрик и 16 представительств по всему миру. Широкая дилерская сеть по всей России позволяет стремительно развиваться, укрепляя свои позиции на рынке и предлагая новую продукцию и сервис еще более высокого качества.<br>

						Мансардные окна FAKRO – это уникальные технологии производства, высокое качество, безопасность и долговечность. Новые решения, применяемые в производстве окон FAKRO, такие как отвод конденсата и капиллярной влаги, улучшенная теплоизоляция и герметичность, а также более простая и легкая система монтажа, выводят уровень качества и надежности мансардных окон FAKRO на более высокий уровень.

						</p>
					
						
					</div>
				</div>
			</div>
			
			<div id="m8" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>Metrotile</h2>
						<p>
						Бельгийские традиции качества и производство кровельных материалов для регионов с любым климатом и ветровыми нагрузками. Постоянное внедрение инноваций и стремление соответствовать вызовам меняющегося рынка. Стабильность и репутация одного из лучших производителей кровельных материалов.<br><br>
						Metrotile целеустремленно вкладывает деньги в исследовательские работы, разработку и усовершенствование продукции, и, как результат этого, продукция фирмы обладает высокими эксплуатационными свойствами.
						Многолетний опыт работы, уникальные инженерные разработки и жёсткий контроль качества делают продукцию Metrotile оптимальным выбором для строительства и реконструкции зданий со скатной кровлей. Дома, покрытые композитной черепицей Metrotile, вы увидите по всему миру.</p>

												<!-- modal close button -->
					
						
					</div>
				</div>
			</div>
			
			<div id="m9" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
							<div class="bord api-formdesigner modal__content"><!-- <div class="afd-title alb-ps-title">Рекомендуемые комплекты</div> --><div class="api_modal_close demo-close"></div>
						<h2>Tegola</h2>
						<p>Продукция TEGOLA Group -  это комплексные, профессиональные решения для скатных кровель с использованием гибкой черепицы на основе АПП-модифицированного битума.<br><br>

						Первое производство было открыто в 1976 году, и уже более 43 лет TEGOLA диктует стандарты качества для гибкой черепицы. Постоянное совершенствование технологии производства, увеличивающее сопротивляемость материалов внешним негативным воздействиям, позволяет давать расширенную гарантию на все коллекции. Гибкая черепица на основе АПП-битума сохраняет сопротивляемость ультрафиолету и практически не меняет своих свойств на протяжении всего периода гарантийного срока.<br><br>

						В настоящее время  в группу компаний входят 14 промышленных предприятий и представительства в 73 странах по всему миру; общее число сотрудников в структурах компании превышает 5 000 человек. Фабрики TEGOLA ежегодно обеспечивают выпуск 29 000 000 кв. м. гибкой черепицы. Модельный ряд гибкой черепицы на сегодняшний день включает 47 моделей и более 100 цветовых решений.</p>

						<!-- modal close button -->
						
						
					</div>
				</div>
			</div>
			

			
		</div>
		<br><br>




	    <h3>Спонсоры Турнира</h3>
		<div class="avt_mainline_p1"></div><!-- --><div class="avt_mainline_p2"></div><br><br>

	    <div> 
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m1'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="img/sponsor/sec_vilpe.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m2'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="img/sponsor/sec_aqua.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m11'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="img/sponsor/logo-orima.jpg">
				</a>
			</div>
				<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m12'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="img/sponsor/cedral.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m13'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="/upload/raznoe/neva.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m14'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="/upload/raznoe/bora2.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m15'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="/upload/raznoe/turnir-2018/metallmaster.jpg">
				</a>
			</div>
			<div style="box-shadow: 0 1px 2px 0 rgba(0,0,0,.22), 0 0 10px 0 rgba(0,0,0,.10);" onclick="jQuery.fn.apiModal('show',{id:'#m16'}); return false;" class="avt_foto_line5s">
				<a href="#">
					<img src="/upload/raznoe/shubai.jpg">
				</a>
			</div>



			<div style="display:none;" class="avt_foto_line5">
				<a href="#" data-modal="#modal2500" class="modal__trigger">
					<?/* последний пустой - нужен для работоспособности */?>
				</a>
			</div>
			<!-- Modal -->
				<div id="m1" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>ООО ВИЛПЕ Рус (подразделение международного концерна VILPE OY, производителя товаров под торговой маркой VILPE).</h2>
								<p>VILPE® –торговая марка изделий для комплексной вентиляции зданий, выпускаемых финской фирмой VILPE Oy. История торговой марки VILPE® началась 45 лет назад, в эпоху появления новых строительных материалов и технологий. С появлением герметичных энергосберегающих конструкций и отказом от старых традиций в строительстве потребовалась комплексная вентиляция зданий, от цоколя до кровли. Фирма VILPE Oy посвятила себя разработке серии изделий, решающих вопросы воздухообмена всего здания. В настоящее время торговая марка VILPE® широко известна. Являясь активистом в решении вопроса кровельных проходок, VILPE® предлагает готовые комплекты вентиляционных выходов и вентиляторов, монтируемых по принципу «сделай сам». Все выходы сантехнического и вентиляционного оборудования выводятся на кровлю, что минимизирует дискомфорт от звуков, запахов и влажности. VILPE Oy продолжает изучать вопросы вентиляции, активно внедряя в жизнь идею здорового дома. Ежегодно запускаются в производство новые разработки серии VILPE® для вентиляции жилых домов и общественных зданий. В серию VILPE® входят вентиляторы, выходы вентиляционных каналов и стояков канализации, элементы вентиляции кровли, элементы приточной вентиляции, проходные элементы, цокольные дефлекторы, выходы антенн, кабелей и дымовых труб, кровельные люки и многое другое. При помощи проходных элементов VILPE® по типу кровельного материала достигается герметичное примыкание на любых кровлях. Единый дизайн и широкая цветовая гамма изделий придадут кровле законченный вид. Задача VILPE® - обеспечивать свежий воздух в помещениях и поддерживать здание в здоровом состоянии.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m2" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>AQUASYSTEM (ООО «СТИЛ ТЕХНОЛОДЖИ»)</h2>
								<p>AQUASYSTEM (Аквасистем) – эксклюзивная серия кровельных, фасадных, водосточных систем, систем софита и аксессуаров для кровли из высококачественной стали с долговечным полимерным покрытием, меди, цинк-титана, алюминия.<br>
								Разработчик и производитель AQUASYSTEM – компания ООО «СТИЛ ТЕХНОЛОДЖИ» уже 17 лет производит и поставляет продукцию по всей России и в страны СНГ.<br>
								ООО «СТИЛ ТЕХНОЛОДЖИ» - единственное в России производство, работающее по немецкому стандарту DIN 18 461. Продукция AQUASYSTEM выгодно отличается четкой геометрией элементов, прочностью, долговечностью и удобством монтажа. Признанием качества и эстетики решений AQUASYSTEM являются тысячи знаковых архитектурных объектов в России и за рубежом.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m11" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>Orima-Tuote Oy</h2>
								<p>ORIMA – один из ведущих финских производителей элементов безопасности кровли и водосточных систем с опытом более 55 лет. Мы решаем задачи любой сложности благодаря широкой ассортиментной линейке, высокому качеству продукции и инновационным технологиям производства. Мы несем полную ответственность за производимую продукцию и даем длительную гарантию качества. Бренду ORIMA доверяют архитекторы и профессионалы строительной индустрии.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m12" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>Cedral ( ООО «Этекс)</h2>
								<p>Сedral — фасадный материал из фиброцемента с фактурой натурального дерева и прочностью бетона.  Бренд Cedral принадлежит международному холдингу Etex, который производит строительные материалы более 100 лет. Фиброцементная фасадная доска Cedral состоит из современного композитного материала, в его состав входят экологичные компоненты: кварцевый песок, вода, цемент и целлюлозные волокна. Фасадный материал абсолютно экологичный и не содержит асбеста. Фасадная доска Cedral долговечный, пожароустойчивый и прочный материал. Две фактуры, широкая цветовая гамма позволяют создавать из материала экологичный и долговечный фасад дома с неповторимым стилем.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m13" class="api_modal api_modal_open">
				<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>«Невалайн» (ООО «Сатурн»)</h2>
								
								<p>Компания «Невалайн» более 20 лет поставляет в Россию профессиональный кровельный инструмент и станки, изготавливаемые в соответствии с вековыми традициями известных европейских производителей.<br>
								Практически весь ассортимент инструментов можно посмотреть и купить в наших офисах в Москве и Санкт-Петербурге. Мы осуществляем доставку по всем регионам России и ближнего зарубежья, в том числе наложенным платежом (на объект).</p></p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m14" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>Бора</h2>
								<p>ТД  «БОРА» – крупный российский производитель современного автоматизированного оборудования  для обработки тонколистового металла, кровельного оборудования и инструмента.<br><br>
								Завод компании оснащён современными станками, обрабатывающими центрами с ЧПУ, печами для закалки металла и т.д. Здесь же происходит подготовка и покраска линий. В перечень выпускаемой продукции входят оборудование для производства различных типов металлочерепицы,  всего размерного ряда профнастила. Большой выбор видов и типоразмеров станков металлосайдинга и штакетника. Линии резки рулонного металла во всех возможных сочетаниях типа реза - продольный роспуск, поперечный раскрой или продольно-поперечная резка. Освоен выпуск автоматизированных линий для производства профилей строительного и промышленного назначения, фасадных кассет различных конфигураций.<br><br>
								Сегодня продукция Компании БОРА  работает во многих регионах РФ и странах ближнего зарубежья. Более трети выпускаемой продукции – инновационные разработки.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m15" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>ООО «МеталМастер»</h2>
								<p>Компания Metal Master занимает ведущие позиции на рынке металлообрабатывающего оборудования России. 
								Начав свою историю в 2000 году с поставки на российский рынок ручных листогибов под собственным брендом, компания постоянно наращивала свой потенциал, добавляя в ассортиментный портфель новые позиции.   
								На текущий момент ассортиментный портфель Metal Master включает более 4 500 товарных позиций. Компания Metal Master предлагает рынку РФ металлообрабатывающие станки, начиная от моделей для небольшой мастерской, заканчивая крупными промышленными центрами с ЧПУ. Листогибочное оборудование Metal Master стабильно занимает значительную долю в ассортиментном портфеле компании.   
								Надежность и технологичность станков Metal Master обеспечивается высокой культурой производства, сертифицированного по передовым европейским стандартам. <br>
								Качество оборудования Metal Master поддерживается высоким уровнем послепродажного обслуживания и качественной работой собственного сервисного центра.</p><br>
							</div>
						</div>
					</div>			
				</div>
				<div id="m16" class="api_modal api_modal_open">
					<div class="api_modal_dialog" style="top: 121.5px;">			
						
						<div class="bord api-formdesigner modal__content">
							<div class="api_modal_close demo-close"></div>
							<div>
								<h2>STUBAI</h2>
								<p>Фирма «Штубаи Рус» была создана в 2003 году как представительство крупнейшего в Австрии производителя ручного кровельного инструмента STUBAI Werzeugindustrie r.Gen.m.b.H.(ныне STUBAI ZMV GmbH). На сегодняшний день кровельный инструмент и оборудование для изготовления и монтажа кровель известного бренда STUBAI относится к классу «премиум». Легированная высокоуглеродистая сталь в качестве материала для изготовления инструмента, ручная заточка, ковка и сборка, позволили ему занять ведущие позиции в своем классе. Более 8000 наименований слесарного и кровельного инструмента выпускается под этим торговым знаком. Трудно найти кровельщика по металлу не знакомого с продукцией STUBAI. Основные группы инструментов для металлических кровель: -клещи гибочные прямые и изогнутые(угол от 0 до 90 градусов) с разной шириной губок (от 18 до 200мм); -ручные ножницы по металлу для прямого и фигурного реза; -Киянки деревянные и из инновационных полимеров; -оправки(подкладки) разных форм из металла и полимеров; -инструмент для шифера (сланца); -мерительный и чертильный инструмент; -инструмент для закрытия/открытия фальца (клещи, рамки и пр.); -наборы кровельного инструмента.</p><br>
							</div>
						</div>
					</div>			
				</div>
			<div id="modal2500" class="modal modal__bg" role="dialog" aria-hidden="true">
				<div class="modal__dialog">
					<div class="modal__content">
					</div>
				</div>	
			</div>
		
		</div>
	    <br><br>

		




	<? /* БЛОК. Фотогалерея */?>
	<?/*div class="avt_sel_data_gr   avt_sel_data_gr01">
		<h3>Фотогалерея</h3>
		<div class="avt_mainline_p1"></div><!-- --><div class="avt_mainline_p2"></div><br><br>
		
				<?
					$GLOBALS["XML_ID_GALLERY"]=3902444;//   3883653
					$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_TEMPLATE_PATH."/gallery/gallery.php"), false);
					$show_gallery = true;
				?>
				<br><br>
	</div*/?>

<script>
    $(document).ready(function(){
	    

	    $( ".avt_btn_fil" ).on( "click", function() {

			var t_fil = $(this).attr("data-group");

			$(".avt_sel_data_gr").hide();
			$(".avt_sel_data_gr"+t_fil).show();

	     	//$( ".avt_btn_fil_" + t_fil).css("background", "#fff");
	     	//idDataBlock



			/*var t_id="#idDataBlock";   

			if ($(window).width() <= '991')
			{
			   window.location.hash="idDataBlock";
			   history.pushState('', '', window.location.pathname);
			}
			else   
			{
			   $('html, body').animate({
			               scrollTop: $(t_id).offset().top
			   }, 1000);
			}*/                 
	    });

	    $( ".avt_btn_fil2" ).on( "click", function() {

			var t_fil = $(this).attr("data-group");

			//$(".avt_videozone").hide();
			//$(".avt_videozone_"+t_fil).show();

			$(".avt_btn_fil2").removeClass("active");
			$(".avt_btn_videozone_"+t_fil).addClass("active");

	     	//$( ".avt_btn_fil_" + t_fil).css("background", "#fff");
	     	//idDataBlock
	     	//avt_btn_fil2   avt_btn_fil__deact2   avt_btn_videozone_2
	    });

	    $( ".avt_lect_day" ).on( "click", function() {

			var t_day = $(this).attr("data-day");

			$(".avt_lect_day_data").hide();
			$(".avt_lect_day_"+t_day+"_data").show();

			$(".avt_lect_day").removeClass("avt_lect_day_avtive");
			$(".avt_lect_day_"+t_day).addClass("avt_lect_day_avtive");
	    });
		
		$( ".avt_btn_fil3" ).on( "click", function() {

			$(".avt_sel_data_gr").hide();
			$(".avt_sel_data_gr7").show();
			$(".avt_btn_fil_gr7").addClass("active");

			var t_id="#idDataBlock";   

			if ($(window).width() <= '991')
			{
			   window.location.hash="idDataBlock";
			   history.pushState('', '', window.location.pathname);
			}
			else   
			{
			   $('html, body').animate({
						   scrollTop: $(t_id).offset().top
			   }, 1000);
			}                 
		});

		$( ".avt_m_data" ).on( "click", function() {

			var t_day = $(this).attr("data-day");

			$(".avt_ms_data").hide();
			$(".avt_ms_data_" + t_day).show();

			$(".avt_m_data").removeClass("avt_m_data_active");
			$(".avt_m_data_" + t_day).addClass("avt_m_data_active");

		});

		$( ".avt_main__banner_row3btn_block_rez_day" ).on( "click", function() {

			var t_day = $(this).attr("data-day");

			avt_rez_day_click(t_day);
		});

		$( ".avt_rez_from_member" ).on( "click", function() {

			var t_day = $(this).attr("data-day");

			avt_rez_day_click(t_day);
		});

	    $(".avt_lect_day_5").click();

	    function avt_rez_day_click(argDay) {

			//$(".avt_m_data").hide();
			$(".avt_btn_fil_gr01").click();
			$(".avt_m_data_" + argDay).click();

			var t_id="#avt_id_rez_day";   

			if ($(window).width() <= '991')
			{
			   window.location.hash="avt_id_rez_day";
			   history.pushState('', '', window.location.pathname);
			}
			else   
			{
			   $('html, body').animate({
			               scrollTop: $(t_id).offset().top
			   }, 1000);
			}                 
	    }

		$( ".avt_all_builders" ).on( "click", function() {


			$(".avt_btn_fil_gr5").click();

			if ($(window).width() <= '991')
			{
			   window.location.hash="avt_id_main_menu";
			   history.pushState('', '', window.location.pathname);
			}
			else   
			{
			   $('html, body').animate({
			               scrollTop: $("#avt_id_main_menu").offset().top
			   }, 1000);
			}                 
		});
	});

	
	
	

</script>
						
						
<div style="display:block;">
	<?$APPLICATION->IncludeComponent(
		"api:formdesigner", 
        "modalform", 
            array(
                "CACHE_TIME" => "",
                "CACHE_TYPE" => "N",
				"COMPATIBLE_ON" => "N",
                "COMPONENT_TEMPLATE" => "modalform",
                "DATE" => date("d-m-Y"),
                "DATE_TIME" => date("d-m-Y H:i:s"),
                "DIR_URL" => $APPLICATION->GetCurDir(),
                "DIVIDER_FIELDS" => array(),
                "ENABLED_FIELDS" => array(),
				"FORM_HORIZONTAL" => "N",
                "FORM_TITLE" => "Участник турнира 2020",
                "FORM_WIDTH" => "",
                "GA_ON" => "N",
				"HIDE_FIELDS" => array(),
				"IBLOCK_ELEMENT_ACTIVE" => "N",
				"IBLOCK_ELEMENT_CODE" => "",
				"IBLOCK_ELEMENT_NAME" => "Запись на турнир #FIO#",
				"IBLOCK_ID" => 176,
				"IBLOCK_ON" => "Y",
				"IBLOCK_TICKET_CODE" => "#TICKET_ID#",
				"IBLOCK_TYPE" => "forms_api",
				"IP" => $_SERVER["REMOTE_ADDR"],
				"JQUERY_ON" => "Y",
				"JQUERY_VERSION" => "jquery",
				"MESS_CHECK_EMAIL" => "Указанный email некорректен",
				"MESS_CHOOSE" => "(выбрать)",
				"MESS_PRIVACY" => "",
				"MESS_PRIVACY_CONFIRM" => "",
				"MESS_PRIVACY_LINK" => "",
				"MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
                "MESS_SUCCESS" => "Ваша заявка отправлена",
				"MESS_SUCCESS_DESC" => "Для уточнения деталей мы свяжемся с вами в течение одного рабочего дня!",
				"MODAL_BTN_CLASS" => "",
				"MODAL_BTN_ID" => "",
				"MODAL_BTN_SPAN_CLASS" => "",
				"MODAL_BTN_TEXT" => "",
				"MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Оформить заявку», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\">Условиями</a>",
				"MODAL_HEADER_TEXT" => "",
				"MODAL_ID" => "#send_participant_2021",
				"PAGE_TITLE" => $APPLICATION->GetTitle(),
				"PAGE_URL" => $APPLICATION->GetCurPage(),
				"PAGE_VARS" => array(),
				"POST_ADMIN_MESSAGE_ID" => array(
					0 => "125",
					1 => "",
				),
				"POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы Заявка на участие в турнире 2020",
				"POST_EMAIL_CODE" => "EMAIL",
				"POST_EMAIL_FROM" => "",
				"POST_EMAIL_TO" => "fedorov@unikma.ru, botkin@unikma.ru, gorkevich@unikma.ru, bahmat@unikma.ru, hadzhinazarova@unikma.ru, tebin@unikma.ru",
				"POST_MESS_STYLE_VALUE" => "",
				"POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
				"POST_MESS_STYLE_NAME" => "font-weight:bold;",
				"POST_ON" => "Y",
				"POST_REPLACE_FROM" => "N",
				"POST_USER_MESSAGE_ID" => array(
					0 => "157",
					1 => "",
				),
				"POST_USER_SUBJECT" => "#SITE_NAME#: Сообщение из формы Заявка на участие в турнире 2020",
				"REDIRECT_URL" => "",
				"SERVER_VARS" => array(),
				"SHOW_ERRORS" => "Y",
				"SHOW_TITLE" => "Y",
				"SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
				"SUBMIT_BUTTON_CLASS" => "button rounding",
				"SUBMIT_BUTTON_TEXT" => "Оформить заявку",
				"TEMPLATE_BG_COLOR" => "",
				"TEMPLATE_COLOR" => "green1",
				"TEMPLATE_THEME" => "simple",
				"UNIQUE_FORM_ID" => "",
				"UPLOAD_FILE_LIMIT" => "5",
	 			"UPLOAD_FILE_SIZE" => "10M",
				"UPLOAD_FOLDER" => "/upload/api_formdesigner",
				"USER_CONSENT" => "N",
				"USE_BX_CAPTCHA" => "N",
				"USE_EULA" => "N",
				"USE_MODAL" => "Y",
				"USE_PRIVACY" => "N",
				"UTM_VARS" => array(
					0 => "",
					1 => "",
				),
				"WYSIWYG_ON" => "N",
				"YAMETRIKA_COUNTER_ID" => "",
				"YAMETRIKA_ON" => "N",
				"YAMETRIKA_TARGET_NAME" => "",
				"YM2_ON" => "N",
				"INPUTMASK_FIELD_EMAIL" => "'alias':'email'",
				"INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
				"INPUTMASK_JS" => "Y",
				"INPUTMASK_ON" => "Y",
				"VALIDATE_RULE_EMAIL" => "data-fv-emailaddress='true'",
				"VALIDATE_MESS_EMAIL" => "data-fv-emailaddress-message='Указанный e-mail некорректен'",
				"VALIDATE_RULE_PHONE" => "pattern='^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$'",
				"VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
				"VALIDATE_ON" => "N",
				"VALIDATE_RULE_FIO" => "data-fv-notempty='true'",
				"VALIDATE_MESS_FIO" => "data-fv-notempty-message='Поле обязательно'",
            ),
        false
    );?>
	<?$APPLICATION->IncludeComponent(
		"api:formdesigner", 
        "modalform", 
            array(
                "CACHE_TIME" => "",
                "CACHE_TYPE" => "N",
                "COMPATIBLE_ON" => "N",
                "COMPONENT_TEMPLATE" => "modalform",
                "DATE" => date("d-m-Y"),
                "DATE_TIME" => date("d-m-Y H:i:s"),
                "DIR_URL" => $APPLICATION->GetCurDir(),
                "DIVIDER_FIELDS" => array(),
                              "ENABLED_FIELDS" => array(),
                              "FORM_HORIZONTAL" => "N",
                              "FORM_TITLE" => "Посетитель турнира 2020",
                              "FORM_WIDTH" => "",
                              "GA_ON" => "N",
                              "HIDE_FIELDS" => array(),
                              "IBLOCK_ELEMENT_ACTIVE" => "N",
                              "IBLOCK_ELEMENT_CODE" => "",
                              "IBLOCK_ELEMENT_NAME" => "Регистрация посетителя на турнир #FIO#",
                              "IBLOCK_ID" => 177,
                              "IBLOCK_ON" => "Y",
                              "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
                              "IBLOCK_TYPE" => "forms_api",
                              "IP" => $_SERVER["REMOTE_ADDR"],
                              "JQUERY_ON" => "Y",
                              "JQUERY_VERSION" => "jquery",
                              "MESS_CHECK_EMAIL" => "Указанный email некорректен",
                              "MESS_CHOOSE" => "(выбрать)",
                              "MESS_PRIVACY" => "",
                              "MESS_PRIVACY_CONFIRM" => "",
                              "MESS_PRIVACY_LINK" => "",
                              "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
                              "MESS_SUCCESS" => "Ваша заявка отправлена",
                              "MESS_SUCCESS_DESC" => "",
                              "MODAL_BTN_CLASS" => "",
                              "MODAL_BTN_ID" => "",
                              "MODAL_BTN_SPAN_CLASS" => "",
                              "MODAL_BTN_TEXT" => "",
                              "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Оформить заявку», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\">Условиями</a>",
                              "MODAL_HEADER_TEXT" => "",
                              "MODAL_ID" => "#send_visitors_2021-1",
                              "PAGE_TITLE" => $APPLICATION->GetTitle(),
                              "PAGE_URL" => $APPLICATION->GetCurPage(),
                              "PAGE_VARS" => array(),
                              "POST_ADMIN_MESSAGE_ID" => array(
                                    0 => "125",
                                    1 => "",
                                 ),
                              "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы Регистрация посетителя на турнир 2020",
                              "POST_EMAIL_CODE" => "EMAIL",
                              "POST_EMAIL_FROM" => "",
                              "POST_EMAIL_TO" => "fedorov@unikma.ru, botkin@unikma.ru, gorkevich@unikma.ru, bahmat@unikma.ru, hadzhinazarova@unikma.ru, tebin@unikma.ru",
                              "POST_MESS_STYLE_VALUE" => "",
                              "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
                              "POST_MESS_STYLE_NAME" => "font-weight:bold;",
                              "POST_ON" => "Y",
                              "POST_REPLACE_FROM" => "N",
                              "POST_USER_MESSAGE_ID" => array(
									0 => "163",
									1 => "",
							  ),
                              "POST_USER_SUBJECT" => "#SITE_NAME#: Сообщение из формы Регистрация посетителя на турнир 2020",
                              "REDIRECT_URL" => "",
                              "SERVER_VARS" => array(),
                              "SHOW_ERRORS" => "Y",
                              "SHOW_TITLE" => "Y",
                              "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
                              "SUBMIT_BUTTON_CLASS" => "button rounding",
                              "SUBMIT_BUTTON_TEXT" => "Оформить заявку",
                              "TEMPLATE_BG_COLOR" => "",
                              "TEMPLATE_COLOR" => "green1",
                              "TEMPLATE_THEME" => "simple",
                              "UNIQUE_FORM_ID" => "",
                              "UPLOAD_FILE_LIMIT" => "5",
                              "UPLOAD_FILE_SIZE" => "10M",
                              "UPLOAD_FOLDER" => "/upload/api_formdesigner",
                              "USER_CONSENT" => "N",
                              "USE_BX_CAPTCHA" => "N",
                              "USE_EULA" => "N",
                              "USE_MODAL" => "Y",
                              "USE_PRIVACY" => "N",
                              "UTM_VARS" => array(
                                 0 => "",
                                 1 => "",
                              ),
                              "WYSIWYG_ON" => "N",
                              "YAMETRIKA_COUNTER_ID" => "",
                              "YAMETRIKA_ON" => "N",
                              "YAMETRIKA_TARGET_NAME" => "",
                              "YM2_ON" => "N",
                              "INPUTMASK_FIELD_EMAIL" => "'alias':'email'",
                              "INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
                              "INPUTMASK_JS" => "Y",
                              "INPUTMASK_ON" => "Y",
                              "VALIDATE_RULE_EMAIL" => "data-fv-emailaddress='true'",
                              "VALIDATE_MESS_EMAIL" => "data-fv-emailaddress-message='Указанный e-mail некорректен'",
                              "VALIDATE_RULE_PHONE" => "pattern='^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$'",
                              "VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
                              "VALIDATE_ON" => "N",
                              "VALIDATE_RULE_FIO" => "data-fv-notempty='true'",
                              "VALIDATE_MESS_FIO" => "data-fv-notempty-message='Поле обязательно'",
                              
                                 ),
                                 false
                              );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>