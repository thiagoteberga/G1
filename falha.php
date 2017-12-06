<!doctype html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Falha na Conexão</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="images/favicon.png">

	<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;	lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
	<link rel="stylesheet" href="css/styles_fail.css">

<style>
	.botao{
		float:right
	}

	#logar{
		width: 100%;
	}

	.texto{
		width: 100%;
	}

	#show-dialog{
		color: #696969;
	}

	.mdl-dialog {
		border: none;
		box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
		width: 480px;
	}

	a {
    	color: #696969;
    	font-weight: 500;
    	text-decoration:none; 
	}
</style>
</head>

<body>
	<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
		<main class="mdl-layout__content">
			<div class="demo-blog__posts mdl-grid">

				<div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col mdl-shadow--2dp">
					<!-- <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div> -->

					<div class="mdl-card__media mdl-color-text--grey-50">
						<h3><a href="entry.html">Falha na Conexão</a></h3>
					</div>
					<div class="mdl-color-text--grey-600 mdl-card__supporting-text">
						<img src="images/db.png" style="display: block; margin-left: auto; margin-right: auto;">
					</div>
					<br>
					<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
						<i class="material-icons">info_outline</i>
						<nav class="demo-nav mdl-cell mdl-cell--12-col">

							<a href="index.html" type="button" class="demo-nav__button" style="text-align: justify;">
								Falha na conexão com o banco de dados, <b>clique aqui</b> para tentar novamente.
							</a>
						</nav>
					</div>
				</div>


				<nav class="demo-nav mdl-cell mdl-cell--12-col">
					<div class="section-spacer"></div>
					<a href="#" type="button" class="demo-nav__button" title="Recuperar Senha" id="show-dialog">
						O problema persiste?
						<button id="show-dialog" type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
							<i class="material-icons" role="presentation">help</i>
						</button>
					</a>

					<dialog class="mdl-dialog">
						<h4 class="mdl-dialog__title">Ainda tem problemas?</h4>
						<div class="mdl-dialog__content">
							<p>
								Parece que estamos com algum problema de conexão com o banco de dados... Você poderia tentar mais tarde? Em breve nosso serviço será normalizado.
							</p>
						</div>
							<div style="text-align: center;">					
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect close">Ok</button>
							</div>
					</dialog>

					<script>
						var dialog = document.querySelector('dialog');
						var showDialogButton = document.querySelector('#show-dialog');
						if (! dialog.showModal) {
							dialogPolyfill.registerDialog(dialog);
						}
						showDialogButton.addEventListener('click', function() {
							dialog.showModal();
						});
						dialog.querySelector('.close').addEventListener('click', function() {
							dialog.close();
						});
					</script>
					
				</nav>

			</div>
		</main>
		<div class="mdl-layout__obfuscator"></div>
	</div>

	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
<script>
	Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
		var link = el.querySelector('a');
		if(!link) {
			return;
		}
		var target = link.getAttribute('href');
		if(!target) {
			return;
		}
		el.addEventListener('click', function() {
			location.href = target;
		});
	});
</script>


</html>
