<!DOCTYPE html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index,follow" />
<meta content="IE=Edge,chrome=1' http-equiv='X-UA-Compatible"/>

<link rel="icon" type="image/png" href="<?=$config['favicon']?>" />
<link rel="shortcut icon" href="<?=$config['favicon']?>" />
<meta name="msapplication-TileColor" content="<?=$config['favicon-color']?>"/>
<meta name="msapplication-TileImage" content="<?=$config['favicon']?>"/>

<meta name="google-site-verification" content="<?=$config['google-site-verification']?>" />

<meta name="author" content="<?=$txt['author']?>"/>
<meta name="copyright" content="<?=$txt['copyright']?>"/>

<meta name="description" content="<?=$txt['description']?>"/>
<meta name="keywords" content="<?=$txt['keywords']?>"/>

<link href="<?=$wwwroot?>" rel="index" title="<?=$txt['index']?>" />
<link href="<?=$wwwroot?>/register" rel="register" title="<?=$txt['register']?>" />
<link href="<?=$wwwroot?>/login" rel="login" title="<?=$txt['login']?>" />

<title><?=$setting[title]?></title>

<?php require_once (dirname(__FILE__)."/css.php");?>
<?php require_once (dirname(__FILE__)."/js.php");?>
</head>
<body><body bgcolor="#000">
	<div id="tm-wrap">
		<div id="tm-header">
			<div class="tm-menu">
				<ul>
					<li>
						<a href="<?=$wwwroot?>/cases">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_caseinfo.svg" width="45"></div>
							<div class="text">個案資訊</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_tutorinfo.svg" width="75"></div>
							<div class="text">導師資訊</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_compare.svg" width="65"></div>
							<div class="text">資訊比較</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_stupanel.svg" width="55"></div>
							<div class="text">學生專頁</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_tutorpanel.svg" width="70"></div>
							<div class="text">導師專頁</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_faq.svg" width="65"></div>
							<div class="text">常見問題</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="<?=$wwwroot?>/img/menu_fee.svg" width="50"></div>
							<div class="text">學費建議</div>
						</a>
					</li>
				</ul>
			</div>
		</div>