<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/global.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/angular.min.js" async></script>
</head>

<body bgcolor="#000">
	<div id="tm-wrap">
		<div id="tm-header">
			<div class="tm-menu">
				<ul>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_caseinfo.svg" width="45"></div>
							<div class="text">個案資訊</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_tutorinfo.svg" width="75"></div>
							<div class="text">導師資訊</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_compare.svg" width="65"></div>
							<div class="text">資訊比較</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_stupanel.svg" width="55"></div>
							<div class="text">學生專頁</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_tutorpanel.svg" width="70"></div>
							<div class="text">導師專頁</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_faq.svg" width="65"></div>
							<div class="text">常見問題</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="circle"><img src="img/menu_fee.svg" width="50"></div>
							<div class="text">學費建議</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="tm-content" class="caseinfo-p">
			<div class="case-container">
				<div id="tm-case-listing">
					<?php for($i=0;$i<9;$i++){?>
					<div class="tm-case">
						<div class="district">觀塘</div>
						<div class="casedetail">
							<div class="tmtitle">小三, 小五, 全科</div>
							<div>
								<div>學生人數： 男女各1名</div>
								<div>每次上課時數： 2hr</div>
								<div>補習地點： 近富昌邨</div>
								<div>學費： $110/1hr</div>
								<div>家長要求： 大學程度 </div>
								<div>一 三 19:00-21:00 日 10:00</div>
							</div>
						</div>
						<div class="btnc">
							<div class="flex">
								<a href="#" class="view-casedetail">詳細資料</a>
								<a href="#" class="leave-msg">留言</a>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<div id="tm-case-filter">
					<div class="filter-container">
						<form>
							<div class="row clearfix">
								<div class="icon district"><i>地點</i></div>
								<div class="field">
									<input type="checkbox" name="filter_district" id="filter_district">
									<label class="fakebox" for="filter_district">
										<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
										<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
										</svg>
									</label>
								</div>
							</div>
						</form>
					</div>
					<a href="#" class="trigger"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
