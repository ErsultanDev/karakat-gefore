<?php
error_reporting(0);
ini_set("display_errors", 0);
include_once "class.crm.php";
$settings = CRM::getLandingSettings();
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<base href="/w/" />
	<meta charset="utf-8">
	<base href="">
	<title>Форма</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=640, user-scalable=no">
	<script>
		var ww = window.innerWidth;
	</script>
    <link rel="icon" href="img/favicon/favicon.png" type="image/png">
	<!-- Load CSS & WebFonts Main Function-->
	<!-- Load CSS Start-->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script> var site_title = ""</script>
	<?php echo isset($settings["header_code"]) && !empty($settings["header_code"]) ? $settings["header_code"] : ""; ?>
</head>
	
<body>

	<div class="global_wrapper">
		<!--div class="intro"><img class="preloader" src="img/preloader.png"></div-->
		<div class="sec1">
			<header></header>
			<div class="sec1_body">
				<div class="form-block">
					<div class="form-heading">
					</div>
					<div class="price">
						<div class="left">
							<p>
								Цена:
							</p>
						</div>
						<div class="price-block">
							<span class="oldPrice"></span>
							<span class="newPrice"></span>
						</div>
					</div>
					<div class="form">
						<div class="form-head">
							Заполните поля ниже <br>
							и получите продукт<br>
    						<span class="upper">со скидкой -47%</span>
						</div>
						<span class="cpa-form-wrapper"></span>
						
					</div>
				</div>
			</div>
			
		</div>
		<footer>
			<span id="crm-requisites"></span>
			<a href="privacypolicy.html">Пoлитика кoнфидeнциальнoсти</a>
		</footer>
		
	</div>

	<script src="js/scripts.min.js"></script>
	
	
	<script language="javascript">!function(t,e){var a=t.getElementsByTagName("head")[0],c=t.createElement("script"),n=function(){a.appendChild(c,a)},r="http://cpa.trafa.red/j2/virgin_star/ghmUNx0r";c.type="text/javascript",c.async=!0,c.src=r+location.search,n()}(document,window);</script>
	<?php echo isset($settings["footer_code"]) && !empty($settings["footer_code"]) ? $settings["footer_code"] : ""; ?>
</body>

</html>