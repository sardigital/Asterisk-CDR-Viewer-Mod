<!doctype html>
<html>
<head>
<title><?php echo $site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo $site_desc; ?>">
<meta name="robots" content="<?php echo $site_robots; ?>">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="theme-color" content="#FFFFFF">
<meta name="msapplication-TileColor" content="#BADA55">
<meta name="msapplication-TileImage" content="img/favicon.png">
<meta name="msapplication-config" content="img/browserconfig.xml">
<link rel="manifest" href="img/manifest.json">
<link rel="apple-touch-icon" sizes="192x192" href="img/favicon.png">
<link rel="icon" type="image/png" sizes="192x192" href="img/favicon.png">
<link rel="stylesheet" type="text/css" href="img/style.css?<?php echo filemtime('img/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo isset($site_cdn['addr']) ? $site_cdn['css_tooltip'] : 'img/simptip.min.css'; ?>">
<script src="<?php echo isset($site_cdn['addr']) ? $site_cdn['js_jquery'] : 'img/jquery.min.js'; ?>"></script>
<script src="<?php echo isset($site_cdn['addr']) ? $site_cdn['js_player'] : 'img/player.js'; ?>"></script>
<script src="<?php echo isset($site_cdn['addr']) ? $site_cdn['js_player_skin'] : 'img/player_skin.js'; ?>"></script>
<script>
	// ID элемента с фоном плеера
var playerOverlayId = '#playerOverlay',
	// ID элемента с плеером
	playerId = '#playerBox',
	// Автовоспроизведение
	playerAutoplay = <?php echo isset($site_js['player_autoplay']) && $site_js['player_autoplay'] == 1 ? 'true' : 'false'; ?>,
	// Показ даты записи
	playerTitle = <?php echo isset($site_js['player_title']) && $site_js['player_title'] == 1 ? 'true' : 'false'; ?>,
	// Символ, который будет добавлен в Title во время воспроизведения
	playerSymbol = '<?php echo isset($site_js['player_symbol']) ? $site_js['player_symbol'] : ''; ?>';
</script>
<script src="img/script.js?<?=filemtime('img/script.js');?>"></script>
</head>
<body>
<div id="container">
	<table id="header">
		<tr>
			<td id="header_title" colspan="2">
				<?php 
				if ( isset($site_gen_section) && $site_gen_section != '' ) {
					echo '<span><a title="Перейти в основной раздел" href="'.$site_gen_section.'">&#8592;</a></span>';
				}
				?>
				
				<a href="."><?php echo $site_head; ?></a>
			</td>
		</tr>
		<tr>
			<td class="sub" align='right'>
				<?php
				if ( strlen(getenv('REMOTE_USER')) ) {
					echo '<a href="index.php?action=logout">выйти: '.getenv('REMOTE_USER').'</a>';
				}
				?>
			</td>
		</tr>
		</table>
		<div onclick="hideRecord();" id="playerOverlay"></div>
		<div id="playerBox"></div>
