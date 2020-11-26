<!-- ПЕРЕД НАЧАЛОМ РАБОТЫ, вам необходимо зайти в файл конфига и прописать ТОКЕН и UID вашего потока, а так же - цены -->
<?php
require_once 'module/config.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Термобелье Columbia</title>
	<meta content="Термобелье Columbia" property="og:title">
	<meta content="" property="og:description">
	<meta content="website" property="og:type">
	<meta content="telephone=no" name="format-detection">
	<meta content="on" http-equiv="x-dns-prefetch-control">

	<link href="images/tildafavicon.ico" rel="shortcut icon" type="image/x-icon">
	<!-- Assets -->
	<style>
		<?php $cssFiles_2=array("css/tilda-grid-3.0.min.css",
			"css/tilda-blocks-2.12.css",
			"css/tilda-slds-1.4.min.css",
			"css/tilda-zoom-2.0.min.css",
			"css/tilda-popup-1.1.min.css",
			"css/tilda-animation-1.0.min.css",
			"css/tilda-slides-1.0.min.css"
		);

		$buffer_2="";

		foreach ($cssFiles_2 as $cssFile_2) {
			$buffer_2 .=file_get_contents($cssFile_2);
		}

		$buffer_2=preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer_2);
		$buffer_2=str_replace(': ', ':', $buffer_2);
		$buffer_2=str_replace(array("../", "\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer_2);
		echo($buffer_2);
		?>
	</style>

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/tilda-scripts-2.8.min.js"></script>
	<script src="js/tilda-blocks-2.7.js?t=1511427661"></script>
	<script src="js/tilda-slds-1.4.min.js"></script>
	<script src="js/hammer.min.js"></script>
	<script src="js/tilda-zoom-2.0.min.js"></script>
	
	<script src="js/tilda-animation-1.0.min.js"></script>
	<script src="js/tilda-slides-1.1.min.js"></script>
	<script src="js/lazyload-1.3.min.js"></script>

	<script type="text/javascript" src="../../module/jquery.form.js"></script>
	<script type="text/javascript" src="../../module/functions.js"></script>

</head>

<body class="t-body" style="margin:0;">
	<!--allrecords-->
	<div class="t-records" data-hook="blocks-collection-content-node"
		data-tilda-formskey="449987e0416521882d7cb135beeb2c7e" data-tilda-page-id="1945530"
		data-tilda-project-id="455203" id="allrecords">
		<div class="r t-rec" data-animationappear="off" data-record-type="257" id="rec38480501" style="">
			<!-- T228 -->
			<div id="nav38480501marker"></div>
			<div class="t228 t228__positionfixed" data-appearoffset="" data-bgcolor-hex="#000000"
				data-bgcolor-rgba="rgba(0,0,0,0.95)" data-bgcolor-rgba-afterscroll="rgba(0,0,0,0.80)"
				data-bgopacity="0.95" data-bgopacity-two="80" data-menu="yes" data-menu-items-align="center"
				data-menushadow="" data-navmarker="nav38480501marker" id="nav38480501"
				style="background-color: rgba(0,0,0,0.95);">
				<div class="t228__maincontainer" style="">
					<div class="t228__padding40px"></div>
					<div class="t228__leftside">
						<div class="t228__leftcontainer">
							<a href="#" style="color:#ffffff;"><img alt="" class="t228__imglogo t228__imglogomobile"
									src="images/tild6437-6432-4631-b164-343131303662__columbialogoblue02.png"
									style="max-width: 250px;width: 250px; height: auto; display: block;"></a>
						</div>
					</div>
					<div class="t228__centerside">
						<div class="t228__centercontainer">
							<ul class="t228__list t228__list_hidden">
								<!-- 								<li class="t228__list_item">
									<a class="t-menu__link-item" data-menu-item-number="1" href="#1" style="color:#ffffff;font-weight:400;text-transform:uppercase;">галерея</a>
								</li> -->
								<li class="t228__list_item">
									<a class="t-menu__link-item" data-menu-item-number="2" href="#2"
										style="color:#ffffff;font-weight:400;text-transform:uppercase;">О термобелье</a>
								</li>
								<li class="t228__list_item">
									<a class="t-menu__link-item" data-menu-item-number="3" href="#3"
										style="color:#ffffff;font-weight:400;text-transform:uppercase;">размеры</a>
								</li>
								<li class="t228__list_item">
									<a class="t-menu__link-item" data-menu-item-number="4" href="#4"
										style="color:#ffffff;font-weight:400;text-transform:uppercase;">как заказать</a>
								</li>
								<li class="t228__list_item">
									<a class="t-menu__link-item" data-menu-item-number="5" href="#5"
										style="color:#ffffff;font-weight:400;text-transform:uppercase;">отзывы</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="t228__rightside">
						<div class="t228__rightcontainer">
							<div class="t228__right_descr" style="">
								<div data-customstyle="yes" style="font-size:18px;color:#ffffff;">
								</div>
							</div>
							<div class="t228__right_buttons">
								<div class="t228__right_buttons_wrap">
									<div class="t228__right_buttons_but">
										<a class="t-btn" href="#popup:myform"
											style="color:#000000;background-color:#ffffff;border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px;"
											target="">
											<table style="width:100%; height:100%;">
												<tr>
													<td>КУПИТЬ СЕЙЧАС</td>
												</tr>
											</table>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="t228__padding40px"></div>
				</div>
			</div>
			<style>
				@media screen and (max-width: 980px) {
					#rec38480501 .t228__leftcontainer {
						padding: 20px;
					}
				}

				@media screen and (max-width: 980px) {
					#rec38480501 .t228__imglogo {
						padding: 20px 0;
					}
				}
			</style>
			<script type="text/javascript">
				$(document).ready(function () {
					t228_highlight();
					t228_checkAnchorLinks('38480501');
				});
				$(window).resize(function () {
					t228_setWidth('38480501');
				});
				$(window).load(function () {
					t228_setWidth('38480501');
				});
				$(document).ready(function () {
					t228_setWidth('38480501');
				});
				$(window).resize(function () {
					t228_setBg('38480501');
				});
				$(document).ready(function () {
					t228_setBg('38480501');
				});
				$(document).ready(function () {
					t228_changebgopacitymenu('38480501');
					$(window).bind('scroll', t_throttle(function () {
						t228_changebgopacitymenu('38480501')
					}, 200));
				});
			</script>
			<!--[if IE 8]><style>#rec38480501 .t228 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9000000', endColorstr='#D9000000');
}</style><![endif]-->
		</div>
		<div class="r t-rec" data-record-type="270" id="rec38472587" style="">
			<div class="t270"></div>
			<script type="text/javascript">
				$(document).ready(function () {
					setTimeout(function () {
						var $root = $('html, body');
						$('a[href*=#]:not([href=#],.carousel-control,.t-carousel__control,[href^=#price],[href^=#popup],[href^=#prodpopup],[href^=#order])')
							.click(function () {
								var target = $(this.hash);
								if (target.length == 0) {
									target = $('a[name="' + this.hash.substr(1) + '"]');
								}
								if (target.length == 0) {
									return true;
								}
								$root.animate({
									scrollTop: target.offset().top + 3
								}, 500);
								return false;
							});
					}, 500);
				});
			</script>
		</div>
		<div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec38450709" style="">
			<!-- T396 -->
			<style>
				#rec38450709 .t396__artboard {
					height: 650px;
					background-color: #ffffff;
				}

				#rec38450709 .t396__filter {
					height: 650px;
					background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.2)), to(rgba(255, 255, 255, 0.4)));
					background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.4));
					background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.4));
				}

				#rec38450709 .t396__carrier {
					height: 650px;
					background-position: center center;
					background-attachment: scroll;
					background-image: url('images/tild3236-3965-4265-b362-306430643536__-__resize__20x__WinterSnowHDwallpape.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				}

				@media screen and (max-width: 1199px) {
					#rec38450709 .t396__artboard {}

					#rec38450709 .t396__filter {}

					#rec38450709 .t396__carrier {
						background-attachment: scroll;
					}
				}

				@media screen and (max-width: 959px) {
					#rec38450709 .t396__artboard {
						height: 880px;
					}

					#rec38450709 .t396__filter {
						height: 880px;
					}

					#rec38450709 .t396__carrier {
						height: 880px;
					}
				}

				@media screen and (max-width: 639px) {
					#rec38450709 .t396__artboard {
						height: 860px;
					}

					#rec38450709 .t396__filter {
						height: 860px;
					}

					#rec38450709 .t396__carrier {
						height: 860px;
					}
				}

				@media screen and (max-width: 479px) {
					#rec38450709 .t396__artboard {
						height: 820px;
					}

					#rec38450709 .t396__filter {
						height: 820px;
					}

					#rec38450709 .t396__carrier {
						height: 820px;
					}
				}

				#rec38450709 .tn-elem[data-elem-id="1510924946831"] {
					color: #00092b;
					z-index: 8;
					top: 242px;
					left: calc(50% - 600px + 25px);
					width: 628px;
				}

				#rec38450709 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
					color: #00092b;
					font-size: 54px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {
					#rec38450709 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 42px;
					}
				}

				@media screen and (max-width: 959px) {
					#rec38450709 .tn-elem[data-elem-id="1510924946831"] {
						text-align: center;
					}

					#rec38450709 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 36px;
					}
				}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {
					#rec38450709 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 24px;
					}
				}

				#rec38450709 .tn-elem[data-elem-id="1510925132909"] {
					color: #2c2f3d;
					z-index: 9;
					top: 474px;
					left: calc(50% - 600px + 820px);
					width: 84px;
				}

				#rec38450709 .tn-elem[data-elem-id="1510925132909"] .tn-atom {
					color: #2c2f3d;
					font-size: 36px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					-webkit-transform: rotate(15deg);
					-moz-transform: rotate(15deg);
					transform: rotate(15deg);
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {
					#rec38450709 .tn-elem[data-elem-id="1510925132909"] {
						text-align: center;
					}

					#rec38450709 .tn-elem[data-elem-id="1510925132909"] .tn-atom {
						font-size: 28px;
					}
				}

				#rec38450709 .tn-elem[data-elem-id="1510925196197"] {
					color: #ff0000;
					z-index: 10;
					top: 542px;
					left: calc(50% - 600px + 765px);
					width: 124px;
				}

				#rec38450709 .tn-elem[data-elem-id="1510925196197"] .tn-atom {
					color: #ff0000;
					font-size: 78px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38450709 .tn-elem[data-elem-id="1510925269961"] {
					color: #ff0000;
					z-index: 11;
					top: 575px;
					left: calc(50% - 600px + 884px);
					width: 64px;
				}

				#rec38450709 .tn-elem[data-elem-id="1510925269961"] .tn-atom {
					color: #ff0000;
					font-size: 30px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					-webkit-transform: rotate(90deg);
					-moz-transform: rotate(90deg);
					transform: rotate(90deg);
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38450709 .tn-elem[data-elem-id="1510925343031"] {
					color: #ffffff;
					text-align: center;
					z-index: 12;
					top: 402px;
					left: calc(50% - 600px + 25px);
					width: 200px;
					height: 55px;
				}

				#rec38450709 .tn-elem[data-elem-id="1510925343031"] .tn-atom {
					color: #ffffff;
					font-size: 14px;
					font-family: 'Roboto';
					line-height: 1.55;
					font-weight: 500;
					border-width: 1px;
					border-radius: 30px;
					background-color: #1365c2;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
					transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
				}

				#rec38450709 .tn-elem[data-elem-id="1510925343031"] .tn-atom:hover {
					background-color: #205e91;
					color: #ffffff;
				}

				@media screen and (max-width: 1199px) {
					#rec38450709 .tn-elem[data-elem-id="1510925343031"] .tn-atom {
						font-size: 12px;
					}
				}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38450709 .tn-elem[data-elem-id="1511267859486"] {
					z-index: 7;
					top: 117px;
					left: calc(50% - 600px + 745px);
					width: 359px;
				}

				#rec38450709 .tn-elem[data-elem-id="1511267859486"] .tn-atom {
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38450709 .tn-elem[data-elem-id="1511268471381"] {
					z-index: 13;
					top: 439px;
					left: calc(50% - 600px + 807px);
					width: 110px;
				}

				#rec38450709 .tn-elem[data-elem-id="1511268471381"] .tn-atom {
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}
			</style>
			<div class='t396'>
				<div class="t396__artboard" data-artboard-height="650" data-artboard-height-res-320="820"
					data-artboard-height-res-480="860" data-artboard-height-res-640="880" data-artboard-height_vh=""
					data-artboard-recid="38450709" data-artboard-valign="center">
					<div class="t396__carrier t-bgimg" data-artboard-recid="38450709"
						data-original="images/tild3236-3965-4265-b362-306430643536__wintersnowhdwallpape.jpg"></div>
					<div class="t396__filter" data-artboard-recid="38450709"></div>
					<div class='t396__elem tn-elem tn-elem__384507091510924946831' data-elem-id='1510924946831'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="10" data-field-left-res-480-value="-5"
						data-field-left-res-640-value="75" data-field-left-res-960-value="10" data-field-left-value="25"
						data-field-leftunits-value="" data-field-top-res-320-value="62"
						data-field-top-res-480-value="62" data-field-top-res-640-value="52"
						data-field-top-res-960-value="242" data-field-top-value="242" data-field-topunits-value=""
						data-field-width-res-320-value="300" data-field-width-res-960-value="490"
						data-field-width-value="628" data-field-widthunits-value="">
						<div class='tn-atom'>
							Забудь о холоде с термобельем Columbia<br>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091510925132909' data-elem-id='1510925132909'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="27" data-field-left-res-480-value="47"
						data-field-left-res-640-value="139" data-field-left-res-960-value="660"
						data-field-left-value="820" data-field-leftunits-value="" data-field-top-res-320-value="310"
						data-field-top-res-480-value="308" data-field-top-res-640-value="362"
						data-field-top-res-960-value="462" data-field-top-value="474" data-field-topunits-value=""
						data-field-width-res-320-value="74" data-field-width-value="84" data-field-widthunits-value="">
						<div class='tn-atom'>
							<?=$oldprice?>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091510925196197' data-elem-id='1510925196197'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="81" data-field-left-res-480-value="156"
						data-field-left-res-640-value="247" data-field-left-res-960-value="580"
						data-field-left-value="765" data-field-leftunits-value="" data-field-top-res-320-value="128"
						data-field-top-res-480-value="148" data-field-top-res-640-value="208"
						data-field-top-res-960-value="548" data-field-top-value="542" data-field-topunits-value=""
						data-field-width-value="124" data-field-widthunits-value="">
						<div class='tn-atom'>
							<?=$price?>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091510925269961' data-elem-id='1510925269961'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="200" data-field-left-res-480-value="275"
						data-field-left-res-640-value="366" data-field-left-res-960-value="699"
						data-field-left-value="884" data-field-leftunits-value="" data-field-top-res-320-value="161"
						data-field-top-res-480-value="181" data-field-top-res-640-value="241"
						data-field-top-res-960-value="581" data-field-top-value="575" data-field-topunits-value=""
						data-field-width-value="64" data-field-widthunits-value="">
						<div class='tn-atom'>
							ГРН<br>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091510925343031' data-elem-id='1510925343031'
						data-elem-type='button' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-height-res-960-value="45"
						data-field-height-value="55" data-field-heightunits-value="" data-field-left-res-320-value="70"
						data-field-left-res-480-value="150" data-field-left-res-640-value="237"
						data-field-left-res-960-value="10" data-field-left-value="25" data-field-leftunits-value=""
						data-field-top-res-320-value="222" data-field-top-res-480-value="252"
						data-field-top-res-640-value="162" data-field-top-res-960-value="362" data-field-top-value="402"
						data-field-topunits-value="" data-field-width-res-960-value="180" data-field-width-value="200"
						data-field-widthunits-value="">
						<a class='tn-atom' href="#popup:myform">КУПИТЬ СЕЙЧАС</a>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091511267859486' data-elem-id='1511267859486'
						data-elem-type='image' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="-5" data-field-left-res-480-value="65"
						data-field-left-res-640-value="155" data-field-left-res-960-value="595"
						data-field-left-value="745" data-field-leftunits-value="" data-field-top-res-320-value="282"
						data-field-top-res-480-value="315" data-field-top-res-640-value="315"
						data-field-top-res-960-value="135" data-field-top-value="117" data-field-topunits-value=""
						data-field-width-res-320-value="350" data-field-width-value="359"
						data-field-widthunits-value="">
						<div class='tn-atom'><img class='tn-atom__img t-img'
								data-original='images/tild3439-3762-4134-a136-633164363334__img_3573.png'
								style="margin-left: 24px"></div>
					</div>
					<div class='t396__elem tn-elem tn-elem__384507091511268471381' data-elem-id='1511268471381'
						data-elem-type='image' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="21" data-field-left-res-480-value="34"
						data-field-left-res-640-value="127" data-field-left-res-960-value="647"
						data-field-left-value="807" data-field-leftunits-value="" data-field-top-res-320-value="283"
						data-field-top-res-480-value="276" data-field-top-res-640-value="329"
						data-field-top-res-960-value="429" data-field-top-value="439" data-field-topunits-value=""
						data-field-width-res-320-value="90" data-field-width-value="110" data-field-widthunits-value="">
						<div class='tn-atom'><img class='tn-atom__img t-img'
								data-original='images/tild6535-3433-4837-a439-643337366362__sign_stop_png25636.png'>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function () {
					t396_init('38450709');
				});
			</script><!-- /T396 -->
		</div>
		<div class="r t-rec" data-animationappear="off" data-record-type="702" id="rec38532437" style="">
			<!-- T702 -->
			<div class="t702">
				<div class="t-popup" data-tooltip-hook="#popup:myform">
					<div class="t-popup__close">
						<div class="t-popup__close-wrapper">
							<svg class="t-popup__close-icon" height="23px" version="1.1" viewbox="0 0 23 23"
								width="23px" xmlns="http://www.w3.org/2000/svg">
								<g fill="#fff" fill-rule="evenodd" stroke="none" stroke-width="1">
									<rect height="30"
										transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708)"
										width="2" x="10.3137085" y="-3.6862915"></rect>
									<rect height="30"
										transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708)"
										width="2" x="10.3137085" y="-3.6862915"></rect>
								</g>
							</svg>
						</div>
					</div>
					<div class="t-popup__container t-width t-width_6">
						<div class="t702__wrapper">
							<div class="t702__text-wrapper t-align_center">
								<div class="t702__title t-title t-title_xxs" style="">
									Заполните форму
								</div>
								<div class="t702__descr t-descr t-descr_xs" style="">
									Наш менеджер свяжется с Вами в ближайшее время
								</div>
							</div>
							<form action='order.php'
								class="t-form js-form-proccess t-form_inputs-total_2" data-formactiontype="0"
								data-inputbox=".t-input-group" data-success-callback="t702_onSuccess" id=""
								method='post' name='form38532437' role="form">
								<!-- NO ONE SERVICES CONNECTED -->
								<div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;">
								</div>
								<div class="t-form__inputsbox">
									<div class="t-input-group t-input-group_nm" data-input-lid="1495810359387">
										<div class="t-input-block">
											<input class="t-input js-tilda-rule" data-tilda-req="1"
												data-tilda-rule="name" name="name" placeholder="Имя"
												style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"
												type="text" value="">
											<div class="t-input-error"></div>
										</div>
									</div>
									<div class="t-input-group t-input-group_ph" data-input-lid="1495810410810">
										<div class="t-input-block">
											<input class="t-input js-tilda-rule" data-tilda-req="1"
												data-tilda-rule="phone" name="phone" placeholder="Телефон"
												style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"
												type="tel" value="">
											<div class="t-input-error"></div>
										</div>
									</div>
									<div class="t-form__errorbox-middle">
										<div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
											<div class="t-form__errorbox-text t-text t-text_md">
												<p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
												<p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
												<p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
												<p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
												<p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
												<p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
											</div>
										</div>
									</div>
									<div class="t-form__submit">
										<button class="t-submit"
											style="color:#ffffff;background-color:#1365c2;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;"
											type="submit">КУПИТЬ СЕЙЧАС</button>
									</div>
								</div>
								<div class="t-form__errorbox-bottom">
									<div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
										<div class="t-form__errorbox-text t-text t-text_md">
											<p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
											<p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
											<p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
											<p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
											<p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
											<p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
										</div>
									</div>
								</div>
								
							</form>
							<style>
								#rec38532437 input::-webkit-input-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 input::-moz-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 input:-moz-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 input:-ms-input-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 textarea::-webkit-input-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 textarea::-moz-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 textarea:-moz-placeholder {
									color: #000000;
									opacity: 0.5;
								}

								#rec38532437 textarea:-ms-input-placeholder {
									color: #000000;
									opacity: 0.5;
								}
							</style>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					setTimeout(function () {
						t702_initPopup('38532437');
					}, 500);
				});
			</script>
		</div>
		<div class="r t-rec t-rec_pt_30 t-rec_pb_0" data-record-type="490" id="rec38448793"
			style="padding-top:30px;padding-bottom:20px;">
			<!-- t490 -->
			<div class="t490">
				<div class="t-container">
					<div class="t490__col t-col t-col_4 t-align_center t-item">
						<img class="t490__img t-img"
							data-original="images/tild6133-6635-4561-b337-306338653431__happy50.png"
							src="images/tild6133-6635-4561-b337-306338653431__-__empty__happy50.png"
							style="width:64px;">
						<div class="t490__wrappercenter">
							<div class="t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="text-align:center;">
									<span style="font-weight: 400;">ОПЛАТА ТОЛЬКО ПОСЛЕ ПОЛУЧЕНИЯ
										ТЕРМОБЕЛЬЯ</span><strong></strong>
								</div>
							</div>
						</div>
					</div>
					<div class="t490__col t-col t-col_4 t-align_center t-item">
						<img class="t490__img t-img"
							data-original="images/tild6361-6230-4565-b564-313236346537__synchronization1.png"
							src="images/tild6361-6230-4565-b564-313236346537__-__empty__synchronization1.png"
							style="width:64px;">
						<div class="t490__wrappercenter">
							<div class="t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="font-size:16px;font-family:'Roboto';">
									<span style="font-weight: 400;">ГАРАНТИРУЕМ БЫСТРУЮ ДОСТАВКУ НА БЛИЖАЙШЕЕ ОТДЕЛЕНИЕ
										НОВОЙ ПОЧТЫ</span>
								</div>
							</div>
						</div>
					</div>
					<div class="t490__col t-col t-col_4 t-align_center t-item">
						<img class="t490__img t-img"
							data-original="images/tild3335-3461-4461-b030-633238616636__credit27.png"
							src="images/tild3335-3461-4461-b030-633238616636__-__empty__credit27.png"
							style="width:64px;">
						<div class="t490__wrappercenter">
							<div class="t-descr t-descr_xs" style="">
								<span style="font-weight: 400;">ДОСТАВКА В ЛЮБОЙ УГОЛОК УКРАИНЫ<br>
									ЗА 48 ЧАСОВ</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_15 t-rec_pb_15" data-record-type="363" id="rec38448960"
			style="padding-top:15px;padding-bottom:15px;">
			<!-- T029 -->
			<div class="t029">
				<div class="t029__container t-container">
					<div class="t029__col t-col t-col_8">
						<div class="t029__linewrapper" style="opacity:0.2;">
							<div class="t029__opacity t029__opacity_left"
								style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));">
							</div>
							<div class="t029__line" style="background: #000000;"></div>
							<div class="t029__opacity t029__opacity_right"
								style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec" data-record-type="215" id="rec38472478" style="">
			<a id="2" name="2" style="font-size:0;position: relative;top: -50px;"></a>
		</div>
		<div class="r t-rec t-rec_pt_90 t-rec_pb_30" data-bg-color="#ffffff" data-record-type="60" id="rec38446535"
			style="padding-top:50px;padding-bottom:30px;background-color:#ffffff;">
			<!-- T050 -->
			<div class="t050">
				<div class="t-container t-align_center">
					<div class="t-col t-col_10 t-prefix_1">
						<div class="t050__title t-title t-title_xxl" style="">
							<div data-customstyle="yes" style="font-size:42px;color:#161616;">
								О термобелье Columbia
							</div>
							<div data-customstyle="yes"
								style="font-size: 18px;color: #000000;margin: 30px 0 0 0;line-height: 29px;font-weight: 300;">
								Популярный бренд Columbia, знает толк в вещах, что предназначенных сохранять тепло
								человека в морозные зимние дни. Зима уже «радует» нас своим присутствием, нужно быть к
								ней подготовленными. Термобелье будет согревать даже в самую низкую минусовую
								температуру, не вредя при этом Вашему организму.
								Термобелье Columbia не парит, позволяет коже «дышать», даже если Вы активно занимаетесь
								спортом. Ткань с антибактериальной пропиткой не вызывает раздражения и аллергию.
							</div>
							<div data-customstyle="yes"
								style=" font-size: 18px;color: #000000;margin: 30px 0 0 0;line-height: 29px;font-weight: 300;">
								<p style="font-weight: 500;">Характеристики комплекта мужского термобелья Columbia:</p>
								В комплекте: брюки и кофта <br>
								Материал: 95% полиэстер, 5% эластан <br>
								Цвет: черный <br>
								Сезон: зима
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_30" data-record-type="147" id="rec38626730" style="padding-top:30px;">
			<!-- t214-->
			<div class="t214">
				<div class="t-container">
					<div class="t-row">
						<div class="t-col t-col_4" itemscope itemtype="http://schema.org/ImageObject"
							style="margin-bottom:20px;">
							<div class="t214__blockimg t-bgimg"
								data-original="images/tild3137-3339-4133-b532-626233326536__img_3570.jpg"
								data-zoom-target="0"
								style="background: url('images/tild3137-3339-4133-b532-626233326536__-__resize__20x__IMG_3570.jpg') center center no-repeat; background-size:cover;">
								<meta content="images/tild3137-3339-4133-b532-626233326536__img_3570.jpg"
									itemprop="image">
							</div>
						</div>
						<div class="t-col t-col_4" itemscope itemtype="http://schema.org/ImageObject"
							style="margin-bottom:20px;">
							<div class="t214__blockimg t-bgimg"
								data-original="images/tild6331-6661-4634-b534-616261316635__img_3571.jpg"
								data-zoom-target="1"
								style="background: url('images/tild6331-6661-4634-b534-616261316635__-__resize__20x__IMG_3571.jpg') center center no-repeat; background-size:cover;">
								<meta content="images/tild6331-6661-4634-b534-616261316635__img_3571.jpg"
									itemprop="image">
							</div>
						</div>
						<div class="t-col t-col_4" itemscope itemtype="http://schema.org/ImageObject"
							style="margin-bottom:20px;">
							<div class="t214__blockimg t-bgimg"
								data-original="images/tild3632-3063-4861-b836-656663616162__img_3577.jpg"
								data-zoom-target="2"
								style="background: url('images/tild3632-3063-4861-b836-656663616162__-__resize__20x__IMG_3577.jpg') center center no-repeat; background-size:cover;">
								<meta content="images/tild3632-3063-4861-b836-656663616162__img_3577.jpg"
									itemprop="image">
							</div>
						</div>
					</div>
					<div class="t-row"></div>
				</div>
			</div>
		</div>
		<div class="r t-rec" data-record-type="215" id="rec38472493" style="">
			<a id="2" name="2" style="font-size:0;"></a>
		</div>
		<div class="r t-rec" data-animationappear="off" data-record-type="160" id="rec38627515" style="">
			<!-- T148 -->
			<!-- cover -->
			<div class="t-cover" id="recorddiv38627515"
				style="height:30vh; background-image:url('images/tild3931-3534-4330-a539-346332303038__-__resize__20x__beg_3.jpg');">
				<div class="t-cover__carrier"
					data-content-cover-bg="images/tild3931-3534-4330-a539-346332303038__beg_3.jpg"
					data-content-cover-height="30vh" data-content-cover-id="38627515"
					data-content-cover-parallax="fixed" id="coverCarry38627515"
					style="background-image:url('');height:30vh;"></div>
				<div class="t-cover__filter"
					style="height:30vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#fe000000');">
				</div>
				<div class="t148">
					<div class="t-container_100">
						<div class="t-cover__wrapper t-valign_bottom" style="height:30vh;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_90 t-rec_pb_90" data-bg-color="#ffffff" data-record-type="503" id="rec38450121"
			style="padding-top:90px;padding-bottom:90px;background-color:#ffffff;">
			<!-- t503 -->
			<div class="t503">
				<div class="t-section__container t-container">
					<div class="t-col t-col_12">
						<div class="t-section__topwrapper t-align_center">
							<div class="t-section__title t-title t-title_xs">
								<div data-customstyle="yes" style="font-size:42px;color:#161616;">
									<span style="font-weight: 500;">Быстро, удобно, безопасно</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-container">
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3333-6166-4130-b266-643433316364__EditingExpandicon.png"
									src="images/tild3333-6166-4130-b266-643433316364__-__empty__EditingExpandicon.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="color:#161616;">
									<span style="font-weight: 400;">КАЧЕСТВЕННАЯ КОНСУЛЬТАЦИЯ<br>
										ПО ВЫБОРУ РАЗМЕРА</span>
								</div>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3266-6634-4235-b162-633432623334__shopping160.png"
									src="images/tild3266-6634-4235-b162-633432623334__-__empty__shopping160.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="color:#161616;">
									<span style="font-weight: 400;">ПЕРЕЗВОНИМ В ТЕЧЕНИИ 25 МИН., ЕСЛИ ВЫ ОТСТАВИЛИ
										ЗАЯВКУ С 9.00 ДО 22.00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild6261-3138-4264-b631-313432313132__christmas131.png"
									src="images/tild6261-3138-4264-b631-313432313132__-__empty__christmas131.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="color:#161616;">
									<span style="font-weight: 400;">РЕАЛИЗУЕМ ТОВАР ТОЛЬКО ИЗ 100%<br>
										КАЧЕСТВЕННЫХ МАТЕРИАЛОВ</span>
								</div>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3863-3462-4439-a537-613463636436__job6.png"
									src="images/tild3863-3462-4439-a537-613463636436__-__empty__job6.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<div data-customstyle="yes" style="color:#161616;">
									<span style="font-weight: 400;">ВЫ ОПЛАЧИВАЕТЕ ТОВАР ТОЛЬКО ПОСЛЕ ПОЛУЧЕНИЯ,
										ОСМОТРА</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec" data-animationappear="off" data-record-type="160" id="rec38627544" style="">
			<!-- T148 -->
			<!-- cover -->
			<div class="t-cover" id="recorddiv38627544"
				style="height:30vh; background-image:url('images/tild3839-6236-4036-b536-306232653136__-__resize__20x__ColumbiaMountain.jpg');">
				<div class="t-cover__carrier"
					data-content-cover-bg="images/tild3839-6236-4036-b536-306232653136__columbiamountain.jpg"
					data-content-cover-height="30vh" data-content-cover-id="38627544"
					data-content-cover-parallax="fixed" id="coverCarry38627544"
					style="background-image:url('');height:30vh;"></div>
				<div class="t-cover__filter"
					style="height:30vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#fe000000');">
				</div>
				<div class="t148">
					<div class="t-container_100">
						<div class="t-cover__wrapper t-valign_bottom" style="height:30vh;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec" data-record-type="215" id="rec38472507" style="">
			<a id="3" name="3" style="font-size:0;"></a>
		</div>
		<div class="r t-rec t-rec_pt_90 t-rec_pb_0" data-bg-color="#ffffff" data-record-type="60" id="rec38483011"
			style="padding-top:90px;padding-bottom:0px;background-color:#ffffff;">
			<!-- T050 -->
			<div class="t050">
				<div class="t-container t-align_center">
					<div class="t-col t-col_10 t-prefix_1">
						<div class="t050__title t-title t-title_xxl" style="">
							<div data-customstyle="yes" style="font-size:42px;color:#161616;">
								В наличии размеры
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_90 t-rec_pb_90" data-bg-color="#ffffff" data-record-type="412" id="rec38481942"
			style="padding-top:90px;padding-bottom:90px;background-color:#ffffff;">
			<!-- T412 -->
			<div class="t412">
				<div class="t-container">
					<div class="t412__col t-col t-col_3 t412__col">
						<div class="t412__content" style="border-color: #000000;border-width: 2px;">
							<div class="t412__wrapper">
								<img alt="" class="t412__img t-img"
									data-original="images/tild6535-3866-4864-b263-313462326334__12.png"
									data-tu-max-height="300" data-tu-max-width="300"
									src="images/tild6535-3866-4864-b263-313462326334__-__empty__12.png"
									style="width: 100px; height: 100px;">
								<div class="t412__title t-name t-name_xl"></div>
								<div class="t412__descr t-text">
									<div data-customstyle="yes" style="text-align:left;">
										Обхват груди 86<br>
										Обхват талии 90<br>
										Обхват бедер 96<br>
										Длина плеча 40-43 <br>
										Длина рукава 61 <br>
										Длина кофты 64 см <br>
										Длина штанов 100 см<br>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="t412__col t-col t-col_3 t412__col">
						<div class="t412__content" style="border-color: #000000;border-width: 2px;">
							<div class="t412__wrapper">
								<img alt="" class="t412__img t-img"
									data-original="images/tild6563-3436-4633-b531-396130353464__13.png"
									data-tu-max-height="300" data-tu-max-width="300"
									src="images/tild6563-3436-4633-b531-396130353464__-__empty__13.png"
									style="width: 100px; height: 100px;">
								<div class="t412__title t-name t-name_xl"></div>
								<div class="t412__descr t-text">
									<div data-customstyle="yes" style="text-align:left;">
										Обхват груди 90<br>
										Обхват талии 96<br>
										Обхват бедер 100<br>
										Длина плеча 43-46 <br>
										Длина рукава 62 <br>
										Длина кофты 66 см <br>
										Длина штанов 102 см<br>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="t412__floatbeaker_lr3"></div>
					<div class="t412__col t-col t-col_3 t412__col">
						<div class="t412__content" style="border-color: #000000;border-width: 2px;">
							<div class="t412__wrapper">
								<img alt="" class="t412__img t-img"
									data-original="images/tild3263-3239-4134-b762-646534633235__14.png"
									data-tu-max-height="300" data-tu-max-width="300"
									src="images/tild3263-3239-4134-b762-646534633235__-__empty__14.png"
									style="width: 100px; height: 100px;">
								<div class="t412__title t-name t-name_xl"></div>
								<div class="t412__descr t-text">
									<div data-customstyle="yes" style="text-align:left;">
										Обхват груди 94<br>
										Обхват талии 100<br>
										Обхват бедер 102<br>
										Длина плеча 46-48 <br>
										Длина рукава 63 <br>
										Длина кофты 68 см <br>
										Длина штанов 104 см<br>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="t412__col t-col t-col_3 t412__col">
						<div class="t412__content" style="border-color: #000000;border-width: 2px;">
							<div class="t412__wrapper">
								<img alt="" class="t412__img t-img"
									data-original="images/tild6630-3230-4532-a433-386265646236__15.png"
									data-tu-max-height="300" data-tu-max-width="300"
									src="images/tild6630-3230-4532-a433-386265646236__-__empty__15.png"
									style="width: 100px; height: 100px;">
								<div class="t412__title t-name t-name_xl"></div>
								<div class="t412__descr t-text">
									<div data-customstyle="yes" style="text-align:left;">
										Обхват груди 100<br>
										Обхват талии 106<br>
										Обхват бедер 104<br>
										Длина плеча 48-50 <br>
										Длина рукава 64 <br>
										Длина кофты 71 см <br>
										Длина штанов 106 см<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					t412_unifyHeights('38481942');
					setTimeout(function () {
						t412_unifyHeights('38481942');
					}, 500);
				});
				$('.t412').bind('displayChanged', function () {
					t412_unifyHeights('38481942');
				});
				$(window).resize(function () {
					t412_unifyHeights('38481942');
				});
				$(window).load(function () {
					t412_unifyHeights('38481942');
				});
			</script>
		</div>
		<div class="r t-rec" data-record-type="215" id="rec38472510" style="">
			<a id="4" name="4" style="font-size:0;"></a>
		</div>
		<div class="r t-rec t-rec_pt_90 t-rec_pb_90" data-bg-color="#f7f7f7" data-record-type="503" id="rec38474471"
			style="padding-top:90px;padding-bottom:90px;background-color:#f7f7f7;">
			<!-- t503 -->
			<div class="t503">
				<div class="t-section__container t-container">
					<div class="t-col t-col_12">
						<div class="t-section__topwrapper t-align_center">
							<div class="t-section__title t-title t-title_xs">
								<div data-customstyle="yes" style="font-size:42px;">
									Как мы работаем?
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-container">
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild6265-6536-4633-b961-636339633731__signingthecontract.png"
									src="images/tild6265-6536-4633-b961-636339633731__-__empty__signingthecontract.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<span style="font-weight: 400;">ВЫ ОСТАВЛЯЕТЕ БЕСПЛАТНУЮ ЗАЯВКУ НА САЙТЕ</span>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3836-6432-4866-a362-366365393831__callcenteroperator.png"
									src="images/tild3836-6432-4866-a362-366365393831__-__empty__callcenteroperator.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<span style="font-weight: 400;">НАШ МЕНЕДЖЕР СВЯЗЫВАЕТСЯ С ВАМИ ДЛЯ ПОДТВЕРЖДЕНИЯ
									ЗАКАЗА</span>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3537-6133-4330-b237-656433366637__deliverytruck.png"
									src="images/tild3537-6133-4330-b237-656433366637__-__empty__deliverytruck.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<span style="font-weight: 400;">МЫ ПРОВЕРЯЕМ, УПАКОВЫВАЕМ, ОТПРАВЛЯЕМ ТОВАР</span>
							</div>
						</div>
					</div>
					<div class="t503__col t-col t-col_3 t-item">
						<div class="t503__content t-align_center">
							<div class="t503__wrapper"><img class="t503__img t-img"
									data-original="images/tild3264-3238-4561-a163-303538656532__icon.png"
									src="images/tild3264-3238-4561-a163-303538656532__-__empty__icon.png"
									style="width:84px;"></div>
							<div class="t503__descr t-descr t-descr_xs" style="">
								<span style="font-weight: 400;">ВЫ ОСМАТРИВАЕТЕ И ПРОВЕРЯЕТЕ ТОВАР, ПОСЛЕ ЧЕГО
									ОПЛАЧИВАЕТЕ ЕГО</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec" data-record-type="215" id="rec38472519" style="">
			<a id="5" name="5" style="font-size:0;"></a>
		</div>
		<div class="r t-rec" data-record-type="534" id="rec38472689" style="">
			<!-- T534-->
			<!-- cover -->
			<div class="t534">
				<div class="t-cover" id="recorddiv38472689"
					style="height:60vh; background-image:url('images/tild6233-3736-4531-a437-316438366437__-__resize__20x__beg_2.jpg');">
					<div class="t-cover__carrier"
						data-content-cover-bg="images/tild6233-3736-4531-a437-316438366437__beg_2.jpg"
						data-content-cover-height="60vh" data-content-cover-id="38472689"
						data-content-cover-parallax="dynamic" id="coverCarry38472689"
						style="background-image:url('');height:60vh;background-attachment:scroll;"></div>
					<div class="t-cover__filter"
						style="height:60vh;background-image: -moz-linear-gradient(top, rgba(255,255,255,0.80), rgba(255,255,255,1));background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.80), rgba(255,255,255,1));background-image: -o-linear-gradient(top, rgba(255,255,255,0.80), rgba(255,255,255,1));background-image: -ms-linear-gradient(top, rgba(255,255,255,0.80), rgba(255,255,255,1));background-image: linear-gradient(top, rgba(255,255,255,0.80), rgba(255,255,255,1));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#33ffffff', endColorstr='#00ffffff');">
					</div>
					<div class="t-slides">
						<div class="t-container">
							<div class="t-slides__container t-width t-width_8 t-margin_auto">
								<div class="t-cover__wrapper t-valign_middle" data-auto-correct-mobile-width="false"
									style="height:60vh;">
									<div class="t534__container" data-auto-correct-mobile-width="false"
										data-hook-content="covercontent">
										<div class="t534__topsection">
											<div class="t-col_12">
												<div class="t-section__topwrapper t-align_center">
													<div class="t-section__title t-title t-title_xs">
														<div data-customstyle="yes" style="color:#070707;">
															Что думают наши клиенты?
														</div>
													</div>
												</div>
											</div>
											<div class="t-clear"></div>
										</div>
										<div class="t-slides__items-wrapper t-slides_animated-none t-slides__witharrows"
											data-auto-correct-mobile-width="false" data-slider-transition="300">
											<div class="t-slides__item t-slides__item_active" data-slide-index="1">
												<div class="">
													<div class="t-slides__wrapper t-align_center">
														<div class="t534__text t-text t-text-impact_xs"
															style="color:#1c1c1c;font-size:16px;">
															Наконец нашел официальный магазин в Украине! Спасибо
															консультантам, помогли подобрать нужный размер. У бренда
															Коламбия есть много моделей термобелья, но этот комплект
															довольно качественный, еще и за такие смешные деньги. Очень
															доволен покупкой, спасибо!<br>
														</div>
														<div class="t534__bgimg t534__img_circle t-bgimg"
															data-original="images/tild6132-3733-4434-b761-613932616239__10m.jpg"
															style=" background-image: url('images/tild6132-3733-4434-b761-613932616239__-__resize__20x__10m.jpg');">
														</div>
														<div class="t534__title t-name t-name_xs"
															style="color:#006f9e;">
															Максим К.
														</div>
													</div>
												</div>
											</div>
											<div class="t-slides__item" data-slide-index="2">
												<div class="">
													<div class="t-slides__wrapper t-align_center">
														<div class="t534__text t-text t-text-impact_xs"
															style="color:#1c1c1c;font-size:16px;">
															Заказывала мужу для поездки в Буковель, мы семьей собираемся
															поехать отдохнуть. Комплект пришел отличный: внешне выглядит
															будто спортивный костюм, и ткань приятная к телу. И штаны, и
															кофта отлично сидят по фигуре, муж доволен, говорит, что
															носит на работу и не мерзнет.
														</div>
														<div class="t534__bgimg t534__img_circle t-bgimg"
															data-original="images/tild3363-6435-4939-b565-363261313066__09w.jpg"
															style=" background-image: url('images/tild3363-6435-4939-b565-363261313066__-__resize__20x__09w.jpg');">
														</div>
														<div class="t534__title t-name t-name_xs"
															style="color:#006f9e;">
															Ольга М.
														</div>
													</div>
												</div>
											</div>
											<div class="t-slides__item" data-slide-index="3">
												<div class="">
													<div class="t-slides__wrapper t-align_center">
														<div class="t534__text t-text t-text-impact_xs"
															style="color:#1c1c1c;font-size:16px;">
															Перед зимой решил утеплится и нашел в интернете ваш сайт.
															Заказал комплект термобелья Columbia сразу же как увидел по
															акции. Бренд известный – значит оно будет качественным.
															Короче говоря, я не прогадал! Фирма Коламбия как всегда на
															высоте – термобелье пришло качественное, удобное при носке,
															дискомфорта никакого не чувствую. Никаких недостатков не
															заметил. Пользуюсь уже пару месяцев и очень доволен, что
															успел купить.
														</div>
														<div class="t534__bgimg t534__img_circle t-bgimg"
															data-original="images/tild3665-6332-4962-b239-333036643563__14m.jpg"
															style=" background-image: url('images/tild3665-6332-4962-b239-333036643563__-__resize__20x__14m.jpg');">
														</div>
														<div class="t534__title t-name t-name_xs"
															style="color:#006f9e;">
															Андрей Д.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="t-slides__bullet_wrapper t-slides__bullet_wrapper-light">
									<div class="t-slides__bullet t-slides__bullet_active" data-slide-bullet-for="1"
										style="background-color:#0093d0;"></div>
									<div class="t-slides__bullet" data-slide-bullet-for="2"
										style="background-color:#0093d0;"></div>
									<div class="t-slides__bullet" data-slide-bullet-for="3"
										style="background-color:#0093d0;"></div>
								</div>
							</div>
						</div>
						<div class="t-slides__arrow_container">
							<div class="t-slides__arrow_wrapper t-slides__arrow_wrapper-left">
								<div class="t-slides__arrow t-slides__arrow-left">
									<div class="t-slides__arrow_body-small t-slides__arrow_body-light t-slides__arrow_body t-slides__arrow_body-left"
										style="border-color:#0093d0;"></div>
								</div>
							</div>
							<div class="t-slides__arrow_wrapper t-slides__arrow_wrapper-right">
								<div class="t-slides__arrow t-slides__arrow-right">
									<div class="t-slides__arrow_body-small t-slides__arrow_body-light t-slides__arrow_body t-slides__arrow_body-right"
										style="border-color:#0093d0;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					t_slidesInit('38472689');
					t534_setWidth('38472689');
				});
				$(window).resize(function () {
					t534_setWidth('38472689');
				});
			</script>
		</div>
		<div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec38629218" style="">
			<!-- T396 -->
			<style>
				#rec38629218 .t396__artboard {
					height: 650px;
					background-color: #ffffff;
				}

				#rec38629218 .t396__filter {
					height: 650px;
					background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 1)), to(rgba(255, 255, 255, 0.4)));
					background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4));
					background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4));
				}

				#rec38629218 .t396__carrier {
					height: 650px;
					background-position: center center;
					background-attachment: scroll;
					background-image: url('images/tild3236-3965-4265-b362-306430643536__-__resize__20x__WinterSnowHDwallpape.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				}

				@media screen and (max-width: 1199px) {
					#rec38629218 .t396__artboard {}

					#rec38629218 .t396__filter {}

					#rec38629218 .t396__carrier {
						background-attachment: scroll;
					}
				}

				@media screen and (max-width: 959px) {
					#rec38629218 .t396__artboard {
						height: 880px;
					}

					#rec38629218 .t396__filter {
						height: 880px;
					}

					#rec38629218 .t396__carrier {
						height: 880px;
					}
				}

				@media screen and (max-width: 639px) {
					#rec38629218 .t396__artboard {
						height: 860px;
					}

					#rec38629218 .t396__filter {
						height: 860px;
					}

					#rec38629218 .t396__carrier {
						height: 860px;
					}
				}

				@media screen and (max-width: 479px) {
					#rec38629218 .t396__artboard {
						height: 820px;
					}

					#rec38629218 .t396__filter {
						height: 820px;
					}

					#rec38629218 .t396__carrier {
						height: 820px;
					}
				}

				#rec38629218 .tn-elem[data-elem-id="1510924946831"] {
					color: #00092b;
					z-index: 8;
					top: 242px;
					left: calc(50% - 600px + 25px);
					width: 628px;
				}

				#rec38629218 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
					color: #00092b;
					font-size: 54px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {
					#rec38629218 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 42px;
					}
				}

				@media screen and (max-width: 959px) {
					#rec38629218 .tn-elem[data-elem-id="1510924946831"] {
						text-align: center;
					}

					#rec38629218 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 36px;
					}
				}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {
					#rec38629218 .tn-elem[data-elem-id="1510924946831"] .tn-atom {
						font-size: 24px;
					}
				}

				#rec38629218 .tn-elem[data-elem-id="1510925132909"] {
					color: #2c2f3d;
					z-index: 9;
					top: 474px;
					left: calc(50% - 600px + 820px);
					width: 84px;
				}

				#rec38629218 .tn-elem[data-elem-id="1510925132909"] .tn-atom {
					color: #2c2f3d;
					font-size: 36px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					-webkit-transform: rotate(15deg);
					-moz-transform: rotate(15deg);
					transform: rotate(15deg);
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {
					#rec38629218 .tn-elem[data-elem-id="1510925132909"] {
						text-align: center;
					}

					#rec38629218 .tn-elem[data-elem-id="1510925132909"] .tn-atom {
						font-size: 28px;
					}
				}

				#rec38629218 .tn-elem[data-elem-id="1510925196197"] {
					color: #ff0000;
					z-index: 10;
					top: 542px;
					left: calc(50% - 600px + 765px);
					width: 124px;
				}

				#rec38629218 .tn-elem[data-elem-id="1510925196197"] .tn-atom {
					color: #ff0000;
					font-size: 78px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38629218 .tn-elem[data-elem-id="1510925269961"] {
					color: #ff0000;
					z-index: 11;
					top: 575px;
					left: calc(50% - 600px + 884px);
					width: 64px;
				}

				#rec38629218 .tn-elem[data-elem-id="1510925269961"] .tn-atom {
					color: #ff0000;
					font-size: 30px;
					font-family: 'Roboto';
					line-height: 1.25;
					font-weight: 700;
					-webkit-transform: rotate(90deg);
					-moz-transform: rotate(90deg);
					transform: rotate(90deg);
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38629218 .tn-elem[data-elem-id="1510925343031"] {
					color: #ffffff;
					text-align: center;
					z-index: 12;
					top: 402px;
					left: calc(50% - 600px + 25px);
					width: 200px;
					height: 55px;
				}

				#rec38629218 .tn-elem[data-elem-id="1510925343031"] .tn-atom {
					color: #ffffff;
					font-size: 14px;
					font-family: 'Roboto';
					line-height: 1.55;
					font-weight: 500;
					border-width: 1px;
					border-radius: 30px;
					background-color: #1365c2;
					background-position: center center;
					border-color: transparent;
					border-style: solid;
					transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
				}

				#rec38629218 .tn-elem[data-elem-id="1510925343031"] .tn-atom:hover {
					background-color: #205e91;
					color: #ffffff;
				}

				@media screen and (max-width: 1199px) {
					#rec38629218 .tn-elem[data-elem-id="1510925343031"] .tn-atom {
						font-size: 12px;
					}
				}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38629218 .tn-elem[data-elem-id="1511267859486"] {
					z-index: 7;
					top: 117px;
					left: calc(50% - 600px + 745px);
					width: 359px;
				}

				#rec38629218 .tn-elem[data-elem-id="1511267859486"] .tn-atom {
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}

				#rec38629218 .tn-elem[data-elem-id="1511268471381"] {
					z-index: 13;
					top: 439px;
					left: calc(50% - 600px + 807px);
					width: 110px;
				}

				#rec38629218 .tn-elem[data-elem-id="1511268471381"] .tn-atom {
					background-position: center center;
					border-color: transparent;
					border-style: solid;
				}

				@media screen and (max-width: 1199px) {}

				@media screen and (max-width: 959px) {}

				@media screen and (max-width: 639px) {}

				@media screen and (max-width: 479px) {}
			</style>
			<div class='t396'>
				<div class="t396__artboard" data-artboard-height="650" data-artboard-height-res-320="820"
					data-artboard-height-res-480="860" data-artboard-height-res-640="880" data-artboard-height_vh=""
					data-artboard-recid="38629218" data-artboard-valign="center">
					<div class="t396__carrier t-bgimg" data-artboard-recid="38629218"
						data-original="images/tild3236-3965-4265-b362-306430643536__wintersnowhdwallpape.jpg"></div>
					<div class="t396__filter" data-artboard-recid="38629218"></div>
					<div class='t396__elem tn-elem tn-elem__386292181510924946831' data-elem-id='1510924946831'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="10" data-field-left-res-480-value="-5"
						data-field-left-res-640-value="75" data-field-left-res-960-value="10" data-field-left-value="25"
						data-field-leftunits-value="" data-field-top-res-320-value="62"
						data-field-top-res-480-value="62" data-field-top-res-640-value="52"
						data-field-top-res-960-value="242" data-field-top-value="242" data-field-topunits-value=""
						data-field-width-res-320-value="300" data-field-width-res-960-value="490"
						data-field-width-value="628" data-field-widthunits-value="">
						<div class='tn-atom'>
							Забудь о холоде с термобельем Columbia<br>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181510925132909' data-elem-id='1510925132909'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="27" data-field-left-res-480-value="47"
						data-field-left-res-640-value="139" data-field-left-res-960-value="660"
						data-field-left-value="820" data-field-leftunits-value="" data-field-top-res-320-value="310"
						data-field-top-res-480-value="308" data-field-top-res-640-value="362"
						data-field-top-res-960-value="462" data-field-top-value="474" data-field-topunits-value=""
						data-field-width-res-320-value="74" data-field-width-value="84" data-field-widthunits-value="">
						<div class='tn-atom'>
							<?=$oldprice?>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181510925196197' data-elem-id='1510925196197'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="81" data-field-left-res-480-value="156"
						data-field-left-res-640-value="247" data-field-left-res-960-value="580"
						data-field-left-value="765" data-field-leftunits-value="" data-field-top-res-320-value="128"
						data-field-top-res-480-value="148" data-field-top-res-640-value="208"
						data-field-top-res-960-value="548" data-field-top-value="542" data-field-topunits-value=""
						data-field-width-value="124" data-field-widthunits-value="">
						<div class='tn-atom'>
							<?=$price?>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181510925269961' data-elem-id='1510925269961'
						data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="200" data-field-left-res-480-value="275"
						data-field-left-res-640-value="366" data-field-left-res-960-value="699"
						data-field-left-value="884" data-field-leftunits-value="" data-field-top-res-320-value="161"
						data-field-top-res-480-value="181" data-field-top-res-640-value="241"
						data-field-top-res-960-value="581" data-field-top-value="575" data-field-topunits-value=""
						data-field-width-value="64" data-field-widthunits-value="">
						<div class='tn-atom'>
							ГРН<br>
						</div>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181510925343031' data-elem-id='1510925343031'
						data-elem-type='button' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-height-res-960-value="45"
						data-field-height-value="55" data-field-heightunits-value="" data-field-left-res-320-value="70"
						data-field-left-res-480-value="150" data-field-left-res-640-value="237"
						data-field-left-res-960-value="10" data-field-left-value="25" data-field-leftunits-value=""
						data-field-top-res-320-value="222" data-field-top-res-480-value="252"
						data-field-top-res-640-value="162" data-field-top-res-960-value="362" data-field-top-value="402"
						data-field-topunits-value="" data-field-width-res-960-value="180" data-field-width-value="200"
						data-field-widthunits-value="">
						<a class='tn-atom' href="#popup:myform">КУПИТЬ СЕЙЧАС</a>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181511267859486' data-elem-id='1511267859486'
						data-elem-type='image' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="-5" data-field-left-res-480-value="65"
						data-field-left-res-640-value="155" data-field-left-res-960-value="595"
						data-field-left-value="745" data-field-leftunits-value="" data-field-top-res-320-value="282"
						data-field-top-res-480-value="315" data-field-top-res-640-value="315"
						data-field-top-res-960-value="135" data-field-top-value="117" data-field-topunits-value=""
						data-field-width-res-320-value="350" data-field-width-value="359"
						data-field-widthunits-value="">
						<div class='tn-atom'><img class='tn-atom__img t-img'
								data-original='images/tild3439-3762-4134-a136-633164363334__img_3573.png'
								style="margin-left: 34px"></div>
					</div>
					<div class='t396__elem tn-elem tn-elem__386292181511268471381' data-elem-id='1511268471381'
						data-elem-type='image' data-field-axisx-value="left" data-field-axisy-value="top"
						data-field-container-value="grid" data-field-heightunits-value=""
						data-field-left-res-320-value="21" data-field-left-res-480-value="34"
						data-field-left-res-640-value="127" data-field-left-res-960-value="647"
						data-field-left-value="807" data-field-leftunits-value="" data-field-top-res-320-value="283"
						data-field-top-res-480-value="276" data-field-top-res-640-value="329"
						data-field-top-res-960-value="429" data-field-top-value="439" data-field-topunits-value=""
						data-field-width-res-320-value="90" data-field-width-value="110" data-field-widthunits-value="">
						<div class='tn-atom'><img class='tn-atom__img t-img'
								data-original='images/tild6535-3433-4837-a439-643337366362__sign_stop_png25636.png'>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function () {
					t396_init('38629218');
				});
			</script><!-- /T396 -->
		</div>
		<!--footer-->
		<div class="t-records" data-hook="blocks-collection-content-node"
			data-tilda-formskey="449987e0416521882d7cb135beeb2c7e" data-tilda-page-alias="footer"
			data-tilda-page-id="1931090" data-tilda-project-id="455203" id="t-footer">
			<div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec38193489" style="">
				<!-- T396 -->
				<style>
					#rec38193489 .t396__artboard {
						height: 90px;
						background-color: #e3e3e3;
					}

					#rec38193489 .t396__filter {
						height: 90px;
					}

					#rec38193489 .t396__carrier {
						height: 90px;
						background-position: center center;
						background-attachment: scroll;
						background-size: cover;
						background-repeat: no-repeat;
					}

					@media screen and (max-width: 1199px) {
						#rec38193489 .t396__artboard {}

						#rec38193489 .t396__filter {}

						#rec38193489 .t396__carrier {
							background-attachment: scroll;
						}
					}

					@media screen and (max-width: 959px) {}

					@media screen and (max-width: 639px) {
						#rec38193489 .t396__artboard {
							height: 70px;
						}

						#rec38193489 .t396__filter {
							height: 70px;
						}

						#rec38193489 .t396__carrier {
							height: 70px;
						}
					}

					@media screen and (max-width: 479px) {
						#rec38193489 .t396__artboard {
							height: 110px;
						}

						#rec38193489 .t396__filter {
							height: 110px;
						}

						#rec38193489 .t396__carrier {
							height: 110px;
						}
					}

					#rec38193489 .tn-elem[data-elem-id="1510931820312"] {
						color: #000000;
						text-align: center;
						z-index: 1;
						top: 20px;
						left: calc(50% - 600px + 170px);
						width: 860px;
					}

					#rec38193489 .tn-elem[data-elem-id="1510931820312"] .tn-atom {
						color: #000000;
						font-size: 16px;
						font-family: 'Roboto';
						line-height: 1.55;
						font-weight: 400;
						background-position: center center;
						border-color: transparent;
						border-style: solid;
					}

					@media screen and (max-width: 1199px) {}

					@media screen and (max-width: 959px) {
						#rec38193489 .tn-elem[data-elem-id="1510931820312"] .tn-atom {
							font-size: 14px;
						}
					}

					@media screen and (max-width: 639px) {
						#rec38193489 .tn-elem[data-elem-id="1510931820312"] .tn-atom {
							font-size: 12px;
						}
					}

					@media screen and (max-width: 479px) {}
				</style>
				<div class='t396'>
					<div class="t396__artboard" data-artboard-height="90" data-artboard-height-res-320="110"
						data-artboard-height-res-480="70" data-artboard-height_vh="" data-artboard-recid="38193489"
						data-artboard-valign="center">
						<div class="t396__carrier" data-artboard-recid="38193489"></div>
						<div class="t396__filter" data-artboard-recid="38193489"></div>
						<div class='t396__elem tn-elem tn-elem__381934891510931820312' data-elem-id='1510931820312'
							data-elem-type='text' data-field-axisx-value="left" data-field-axisy-value="top"
							data-field-container-value="grid" data-field-heightunits-value=""
							data-field-left-res-320-value="15" data-field-left-res-480-value="0"
							data-field-left-res-640-value="40" data-field-left-res-960-value="50"
							data-field-left-value="170" data-field-leftunits-value="" data-field-top-res-320-value="17"
							data-field-top-res-480-value="17" data-field-top-res-640-value="24"
							data-field-top-res-960-value="20" data-field-top-value="20" data-field-topunits-value=""
							data-field-width-res-320-value="290" data-field-width-res-480-value="480"
							data-field-width-res-640-value="560" data-field-width-value="860"
							data-field-widthunits-value="">
							<div class='tn-atom'>
								<a href="/politics.html">Политика
									конфиденциальности</a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						t396_init('38193489');
					});
				</script><!-- /T396 -->
			</div>
		</div>
		<!--/footer-->
	</div>

	<script type="text/javascript" src="js/maskedinput.js"></script>

</body>

</html>