<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">
	<head>			
		<title>長谷工 コミュニティ九州 RECRUITING SITE</title>
		
		<meta charset="UTF-8">
		<meta name="description" content="description">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="index, follow">
		<meta name="author" content="長谷工 コミュニティ九州">
		<meta name="format-detection" content="telephone=no">
		<meta name="Copyright" content="Copyright (C) HASEKO COMMUNITY KYUSHU ALL RIGHTS RESERVED.">
		
		<meta property="og:type" content="website">
		
		<meta property="og:title" content="長谷工 コミュニティ九州 RECRUITING SITE">
		<meta property="og:description" content="description">
		<meta property="og:url" content="url">
		<meta property="og:image" content="./assets/images/ogp.png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:site_name" content="長谷工 コミュニティ九州 RECRUITING SITE">
		
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="長谷工 コミュニティ九州 RECRUITING SITE">
		<meta name="twitter:description" content="description">
		<meta name="twitter:url" content="url">
		<meta name="twitter:image" content="./assets/images/ogp.png">

		<link data-n-head="ssr" rel="icon" type="image/x-icon" href="//www.haseko.co.jp/cmq/favicon-16.png">
		<link href="url" rel="canonical">
		
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css?<?= time() ?>">
	</head>
	<body id="top">
		
		<header class="header" id="header">
			<div class="inner">
				<div class="logo">
					<a href="./" aria-label="ホームへ移動">
						<picture>
							<source srcset="./assets/images/nav_logo.webp" media="(min-width:769px)">
							<img src="./assets/images/logo_sp.webp" alt="長谷工">
						</picture>
					</a>
				</div>
				<div class="box">
					<div class="btn">
						<ul>
							<li><button aria-label="マイページへのポップアップを開く" data-id="mypage">マイページ</button></li>
							<li><button aria-label="エントリーへのポップアップを開く" data-id="entry">エントリー</button></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
		<div class="menubar">
			<button class="menubar__trigger">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
		
		<div class="popup" id="popup__entry">
			<div class="popup__inner">
				<div class="box">
					<div class="box__head">
						<h2>エントリー</h2>
						<div class="popup__close"><button aria-label="ポップアップを閉じる"><img src="./assets/images/close.webp" alt="close" width="50" height="50"></button></div>
					</div>
					<div class="box__body">
						<ul>
							<li>
								<a href="https://job.mynavi.jp/26/pc/search/corp248206/outline.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2026へ移動">
									<picture>
										<source srcset="./assets/images/popup_mynavi_2026.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_mynavi_2026_sp.webp" alt="マイナビ2026">
									</picture>
								</a>
							</li>
							<li>
								<a href="https://job.rikunabi.com/2026/company/r556672054/" target="_blank" rel="noopener noreferrer" aria-label="リクナビ2026へ移動">
									<picture>
										<source srcset="./assets/images/popup_recnavi_2026.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_recnavi_2026_sp.webp" alt="リクナビ2026">
									</picture>
								</a>
							</li>
							<li>
								<a href="https://job.axol.jp/qd/s/haseko_26/entry/agreement" target="_blank" rel="noopener noreferrer" aria-label="いずれのIDもお持ちでない場合へ移動">
									<picture>
										<source srcset="./assets/images/popup_noid_2026.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_noid_2026_sp.webp" alt="いずれのIDもお持ちでない場合">
									</picture>
								</a>
							</li>
							<li>
								<a href="https://job.mynavi.jp/27/pc/search/corp248206/is.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2027へ移動">
									<picture>
										<source srcset="./assets/images/popup_mynavi_2027.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_mynavi_2027_sp.webp" alt="マイナビ2027">
									</picture>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" rel="noopener noreferrer" aria-label="リクナビIDをお持ちの方へ移動" class="disabled">
									<picture>
										<source srcset="./assets/images/popup_recnavi_preparation.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_recnavi_preparation_sp.webp" alt="準備中 リクナビIDをお持ちの方">
									</picture>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" rel="noopener noreferrer" aria-label="準備中" class="disabled">
									<picture>
										<source srcset="./assets/images/popup_preparation.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_preparation_sp.webp" alt="準備中（2027年卒）">
									</picture>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="popup__bg"></div>
			</div>
		</div>
		
		<div class="popup" id="popup__mypage">
			<div class="popup__inner">
				<div class="box">
					<div class="box__head">
						<h2>マイページ</h2>
						<div class="popup__close"><button aria-label="ポップアップを閉じる"><img src="./assets/images/close.webp" alt="close" width="50" height="50"></button></div>
					</div>
					<div class="box__body">
						<ul>
							<li>
								<a href="https://job.axol.jp/qd/s/haseko_26/mypage/login" target="_blank" rel="noopener noreferrer" aria-label="2026年卒マイページにログインする">
									<picture>
										<source srcset="./assets/images/popup_mypage_2026.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_mypage_2026_sp.webp" alt="2026年卒向けマイページ">
									</picture>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" rel="noopener noreferrer" aria-label="2027年卒マイページにログインする" class="disabled">
									<picture>
										<source srcset="./assets/images/popup_mypage_2027.webp" media="(min-width:769px)">
										<img src="./assets/images/popup_mypage_2027_sp.webp" alt="2027年卒向けマイページ">
									</picture>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="popup__bg"></div>
			</div>
		</div>
		
		<div class="popup__sp" id="popup__sp">
			<div class="popup__sp__inner">
				<div class="entry">
					<h2><img src="./assets/images/popup_sp_entry.webp" alt="エントリーはこちらから" width="336" height="35"></h2>
					<ul>
						<li><a href="https://job.mynavi.jp/26/pc/search/corp248206/outline.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2026へ移動"><img src="./assets/images/mynavi_2026_sp.webp" alt="マイナビ2026"></a></li>
						<li><a href="https://job.rikunabi.com/2026/company/r556672054/" target="_blank" rel="noopener noreferrer" aria-label="リクナビ2026へ移動"><img src="./assets/images/recnavi_2026_sp.webp" alt="リクナビ2026"></a></li>
						<li><a href="https://job.axol.jp/qd/s/haseko_26/entry/agreement" target="_blank" rel="noopener noreferrer" aria-label="いずれのIDもお持ちでない場合へ移動"><img src="./assets/images/noid_2026_sp.webp" alt="いずれのIDもお持ちでない方"></a></li>
					</ul>
					<ul>
						<li><a href="https://job.mynavi.jp/27/pc/search/corp248206/is.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2027へ移動"><img src="./assets/images/mynavi_2027_sp.webp" alt="マイナビ2027"></a></li>
						<li><img src="./assets/images/recnavi_2027_sp.webp" alt="リクナビ2027"></li>
						<li><img src="./assets/images/preparation_sp.webp" alt="準備中（2027年卒）"></li>
					</ul>
				</div>
				<div class="mypage">
					<h2><img src="./assets/images/popup_sp_mypage.webp" alt="マイページはこちらから" width="336" height="35"></h2>
					<p>
						会社説明会の予約は、<br>
						マイページから受け付けています。
					</p>
					<ul>
						<li><a href="https://job.axol.jp/qd/s/haseko_26/mypage/login" target="_blank" rel="noopener noreferrer" aria-label="2026年卒マイページにログインする"><img src="./assets/images/mypage_sp_2026.webp" alt="マイページにログイン（2026年卒）"></a></li>
						<li><img src="./assets/images/mypage_sp_2027.webp" alt="マイページ準備中（2027年卒）"></li>
					</ul>
				</div>
			</div>
			<div class="closebtn" id="closebtn">
				<button class="closebtn__trigger">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</div>

		<nav class="nav" id="nav">
			<div class="nav__inner">
				<div class="logo">
					<a href="./" aria-label="トップへ移動">
						<picture>
							<source srcset="./assets/images/nav_logo.webp" media="(min-width:769px)">
							<img src="./assets/images/logo_sp.webp" alt="長谷工コミュニティ九州 RECRUITING SITE">
						</picture>
					</a>
				</div>
				<div class="box">
					<div class="list" id="nav__list">
						<ul>
							<li>
								<a href="./company.php" aria-label="会社を知るページへ移動">
									<dl>
										<dt><img src="./assets/images/nav_company.svg" alt="会社を知る" width="80" height="80"></dt>
										<dd>会社を知る</dd>
									</dl>
								</a>
								<ul>
									<li><a href="./company.php#lead" aria-label="会社を知るページの長谷工コミュニティ九州とはへ移動">長谷工コミュニティ九州とは</a></li>
									<li><a href="./company.php#aboutgroup" aria-label="会社を知るページの長谷工グループとはへ移動">長谷工グループとは</a></li>
									<li><a href="./company.php#outline" aria-label="会社を知るページの会社概要へ移動">会社概要</a></li>
								</ul>
							</li>
							<li>
								<a href="./works.php" aria-label="仕事を知るページへ移動">
									<dl>
										<dt><img src="./assets/images/nav_works.svg" alt="仕事を知る" width="80" height="80"></dt>
										<dd>仕事を知る</dd>
									</dl>
								</a>
								<ul>
									<li><a href="./works.php#lead" aria-label="仕事を知るページのマンション管理業務とはへ移動">マンション管理業務とは</a></li>
									<li><a href="./works.php#front" aria-label="仕事を知るページのフロント営業へ移動">フロント営業</a></li>
									<li><a href="./works.php#facility" aria-label="仕事を知るページの施設管理へ移動">施設管理</a></li>
									<li><a href="./works.php#accounting" aria-label="仕事を知るページの管理組合会計へ移動">管理組合会計</a></li>
								</ul>
							</li>
							<li>
								<a href="./person.php" aria-label="人を知るページへ移動">
									<dl>
										<dt><img src="./assets/images/nav_person.svg" alt="人を知る" width="80" height="80"></dt>
										<dd>人を知る</dd>
									</dl>
								</a>
								<ul>
									<li><a href="./person.php#kh" aria-label="人を知るページのK.H（フロント営業）へ移動">K.H（フロント営業）</a></li>
									<li><a href="./person.php#ha" aria-label="人を知るページのH.A（フロント営業）へ移動">H.A（フロント営業）</a></li>
									<li><a href="./person.php#ka" aria-label="人を知るページのK.A（執行役員）へ移動">K.A（執行役員）</a></li>
								</ul>
							</li>
							<li>
								<a href="./system.php" aria-label="制度を知るページへ移動">
									<dl>
										<dt><img src="./assets/images/nav_system.svg" alt="制度を知る" width="80" height="80"></dt>
										<dd>制度を知る</dd>
									</dl>
								</a>
								<ul>
									<li><a href="./system.php#number" aria-label="制度を知るページの数字で見るへ移動">数字で見る</a></li>
									<li><a href="./system.php#education" aria-label="制度を知るページの教育制度へ移動">教育制度</a></li>
									<li><a href="./system.php#career" aria-label="制度を知るページのキャリア制度へ移動">キャリア制度</a></li>
									<li><a href="./system.php#benefits" aria-label="制度を知るページの福利厚生へ移動">福利厚生</a></li>
								</ul>
							</li>
							<li>
								<a href="./recruit.php" aria-label="採用を知るページへ移動">
									<dl>
										<dt><img src="./assets/images/nav_recruit.svg" alt="採用を知る" width="80" height="80"></dt>
										<dd>採用を知る</dd>
									</dl>
								</a>
								<ul>
									<li><a href="./recruit.php#lead" aria-label="採用を知るページの人事担当者よりへ移動">人事担当者より</a></li>
									<li><a href="./recruit.php#flow" aria-label="採用を知るページの選考フローへ移動">選考フロー</a></li>
									<li><a href="./recruit.php#application" aria-label="採用を知るページの募集要項へ移動">募集要項</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="btn" id="nav__btn">
						<ul>
							<li><button data-id="mypage">マイページ</button></li>
							<li><button data-id="entry">エントリー</button></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		
		<main class="main">
			
			<div class="open" id="open">
				<div class="open__inner">
					<div class="box"><img src="./assets/images/catch.webp" alt="明日ニツナグカタチ" width="230" height="230"></div>
				</div>
			</div>
			
			<div class="home" id="home">
				
				<section class="visual" id="visual">
					<div class="pc">
						<div class="wrap">
							<div class="l" id="visual__l"><img src="./assets/images/visual_l_area.svg" alt="" width="960" height="960"></div>
							<div class="r">
								<div class="r__1" id="visual__r1"><img src="./assets/images/visual_r_area.svg" alt="" width="960" height="480"></div>
								<div class="r__2" id="visual__r2"><img src="./assets/images/visual_r_area.svg" alt="" width="960" height="480"></div>
							</div>
						</div>
					</div>
					<div class="sp">
						<div class="wrap">
							<div class="l" id="visual__l__sp"><img src="./assets/images/visual_l_area_sp.svg" alt="" width="375" height="307"></div>
							<div class="r">
								<div class="r__1" id="visual__r1__sp"><img src="./assets/images/visual_r_area_sp.svg" alt="" width="187" height="307"></div>
								<div class="r__2" id="visual__r2__sp"><img src="./assets/images/visual_r_area_sp.svg" alt="" width="187" height="307"></div>
							</div>
						</div>
					</div>
					<div class="catch"><img src="./assets/images/catch.webp" alt="明日ニツナグカタチ" width="230" height="230"></div>
				</section>
				
				<section class="concept fade" id="concept">
					<div class="inner">
						<div class="box">
							<h2>
								｢このマンションに住んでよかった｣<br>
								その一言が一番の褒め言葉になる。
							</h2>
							<p>
								街の風景はそこに建ち並ぶ様々な建物と<br>
								そこに暮らす人々の営みによって<br class="sp">カタチづくられます。
							</p>
							<p>
								私たち長谷工コミュニティ九州の使命は<br class="sp">マンション管理業務を通じ、<br>
								快適な都市空間、心地よい生活環境の<br class="sp">創造に貢献することです。<br>
								日々のお困りごと、<br class="sp">こうなったらいいなと願うこと、<br>
								一人一人のお客様の声に耳をすませ、<br class="sp">一つ一つ誠実に向き合い、<br>
								よりよい暮らしづくりのお手伝いをする。<br>
								長谷工グループの管理会社として<br>
								私たちだからこそできること、<br class="sp">私たちにしかできないことを大切に<br>
								より豊かで、安全安心な明日を描いていきます。
							</p>
							<p>
								「ここに住んでよかった」<br class="sp">「あなたに出会えてよかった」<br>
								そう言っていただけるミライを目指して。
							</p>
							<div class="obj" id="obj__1">
								<svg id="mysvg1" viewBox="0 0 300 320">
									<defs>
										<linearGradient id="grad1" x1="0" y1="1" x2="0" y2="0">
											<stop offset="0%" stop-color="#76c5ab"/>
											<stop offset="100%" stop-color="#27b9ed"/>
										</linearGradient>
									</defs>
									<path id="morph1" fill="url(#grad1)" opacity="0.5"
										d="M285.360,142.680 L285.078,151.639 L284.235,160.563 L282.833,169.416 L280.877,178.163 L278.377,186.771 L275.341,195.204 L271.781,203.430 L267.711,211.417 L263.149,219.132 L258.111,226.545 L252.617,233.628 L246.689,240.351 L240.351,246.689 L233.628,252.617 L226.545,258.111 L219.132,263.149 L211.417,267.711 L203.430,271.781 L195.204,275.341 L186.771,278.377 L178.163,280.877 L169.416,282.833 L160.563,284.235 L151.639,285.078 L142.680,285.360 L133.721,285.078 L124.797,284.235 L115.944,282.833 L107.137,280.877 L98.394,278.377 L89.786,275.341 L81.353,271.781 L73.127,267.711 L65.140,263.149 L57.425,258.111 L50.012,252.617 L43.929,246.689 L38.191,240.351 L32.863,233.628 L27.935,226.545 L23.441,219.132 L19.403,211.417 L15.841,203.430 L12.771,195.204 L10.211,186.771 L8.155,178.163 L6.753,169.416 L5.910,160.563 L5.628,151.639 L5.910,142.680 L5.628,133.721 L5.910,124.797 L6.753,115.944 L8.155,107.137 L10.211,98.394 L12.771,89.786 L15.841,81.353 L19.403,73.127 L23.441,65.140 L27.935,57.425 L32.863,50.012 L38.191,43.929 L43.929,38.191 L50.012,32.863 L57.425,27.935 L65.140,23.441 L73.127,19.403 L81.353,15.841 L89.786,12.771 L98.394,10.211 L107.137,8.155 L115.944,6.753 L124.797,5.910 L133.721,5.628 L142.680,5.910 L151.639,5.628 L160.563,5.910 L169.416,6.753 L178.163,8.155 L186.771,10.211 L195.204,12.771 L203.430,15.841 L211.417,19.403 L219.132,23.441 L226.545,27.935 L233.628,32.863 L240.351,38.191 L246.689,43.929 L252.617,50.012 L258.111,57.425 L263.149,65.140 L267.711,73.127 L271.781,81.353 L275.341,89.786 L278.377,98.394 L280.877,107.137 L282.833,115.944 L284.235,124.797 L285.078,133.721 L285.360,142.680 Z" />
								</svg>
							</div>
							<div class="obj" id="obj__2">
								<svg id="mysvg2" viewBox="0 0 300 320">
									<defs>
										<linearGradient id="grad2" x1="0" y1="1" x2="0" y2="0">
											<stop offset="0%" stop-color="#76c5ab"/>
											<stop offset="100%" stop-color="#27b9ed"/>
										</linearGradient>
									</defs>
									<path id="morph2" fill="url(#grad2)" opacity="0.5"
										d="M150.461,259.527 L144.192,251.424 L137.922,243.322 L131.653,235.219 L125.384,227.116 L119.115,219.013 L112.846,210.910 L106.576,202.808 L100.307,194.705 L94.038,186.602 L87.769,178.499 L81.500,170.396 L75.230,162.294 L68.961,154.191 L62.692,146.088 L56.423,137.985 L50.154,129.882 L43.884,121.780 L37.615,113.677 L31.346,105.574 L25.077,97.471 L18.808,89.368 L12.538,81.266 L6.269,73.163 L0.000,65.060 L3.364,62.458 L6.727,59.855 L10.091,57.253 L13.454,54.650 L16.818,52.048 L20.182,49.446 L23.545,46.843 L26.909,44.241 L30.272,41.638 L33.636,39.036 L37.000,36.434 L40.363,33.831 L43.727,31.229 L47.090,28.626 L50.454,26.024 L53.818,23.422 L57.181,20.819 L60.545,18.217 L63.908,15.614 L67.272,13.012 L70.636,10.410 L73.999,7.807 L77.363,5.205 L80.726,2.602 L84.090,0.000 L90.359,8.103 L96.628,16.206 L102.898,24.308 L109.167,32.411 L115.436,40.514 L121.705,48.617 L127.974,56.720 L134.244,64.822 L140.513,72.925 L146.782,81.028 L153.051,89.131 L159.320,97.234 L165.590,105.336 L171.859,113.439 L178.128,121.542 L184.397,129.645 L190.666,137.748 L196.936,145.850 L203.205,153.953 L209.474,162.056 L215.743,170.159 L222.012,178.262 L228.282,186.364 L234.551,194.467 L240.820,202.570 L237.456,205.172 L234.093,207.775 L230.729,210.377 L227.366,212.980 L224.002,215.582 L220.638,218.184 L217.275,220.787 L213.911,223.389 L210.548,225.992 L207.184,228.594 L203.820,231.196 L200.457,233.799 L197.093,236.401 L193.730,239.004 L190.366,241.606 L187.002,244.208 L183.639,246.811 L180.275,249.413 L176.912,252.016 L173.548,254.618 L170.184,257.220 L166.821,259.823 L163.457,262.425 L160.094,265.028 L156.730,267.630 Z" />
								</svg>
							</div>
						</div>
					</div>
				</section>
				
				<section class="index fade" id="index">
					<div class="inner">
						<div class="first">
							<div class="box box__1">
								<a href="./company.php" aria-label="会社を知るページへ移動">
									<h2><span>会社を知る</span></h2>
									<div class="lead">私たちについて</div>
									<div class="img img__1 sp"><img src="./assets/images/home_company.webp" alt="" width="" height=""></div>
									<p>私たち長谷工コミュニティ九州は、長谷工グループの一員として地域に密着したマンション管理サービスを提供し、九州各地の暮らしを支えています。そんな当社の役割や当社ならではの強み、特長などをご紹介。</p>
									<div class="img img__1 pc"><img src="./assets/images/home_company.webp" alt="" width="" height=""></div>
									<div class="more"><span>READ MORE</span></div>
								</a>
							</div>
							<div class="box box__2">
								<a href="./works.php" aria-label="仕事を知るページへ移動">
									<h2><span>仕事を知る</span></h2>
									<div class="lead">
										マンションの課題を<br>
										解決サポート
									</div>
									<div class="img sp"><img src="./assets/images/home_works.webp" alt="" width="" height=""></div>
									<p>当社の事業であるマンション管理業務の流れや、事業についてご紹介します。</p>
									<div class="img pc"><img src="./assets/images/home_works.webp" alt="" width="" height=""></div>
									<div class="more"><span>READ MORE</span></div>
								</a>
							</div>
						</div>
						<div class="second">
							<div class="box">
								<a href="./person.php" aria-label="人を知るページへ移動">
									<h2><span>人を知る</span></h2>
									<div class="lead">ミライニ　ツナグ　ヒトビト</div>
									<div class="more"><span>READ MORE</span></div>
								</a>
								<div class="list">
									<ul>
										<li>
											<a href="./person.php#" aria-label="">
												<div class="img">
													<picture>
														<source srcset="./assets/images/home_person_1.webp?1" media="(min-width:769px)">
														<img src="./assets/images/home_person_1_sp.webp">
													</picture>
												</div>
												<div class="txt">
													<span>
														知識と経験を積んで<br>
														頼られるフロントヘ｡
													</span>
												</div>
												<div class="name">
													<dl>
														<dt>K.H</dt>
														<dd>
															フロント営業<br>
															2022年入社
														</dd>
													</dl>
												</div>
											</a>
										</li>
										<li>
											<a href="./person.php#" aria-label="">
												<div class="img">
													<picture>
														<source srcset="./assets/images/home_person_2.webp" media="(min-width:769px)">
														<img src="./assets/images/home_person_2.webp">
													</picture>
												</div>
												<div class="txt">
													<span>
														居住者様の気持ちに寄り添い<br>
														安全安心なマンションライフを<br>
														提案する。
													</span>
												</div>
												<div class="name">
													<dl>
														<dt>H.A</dt>
														<dd>
															フロント営業<br>
															2023年入社
														</dd>
													</dl>
												</div>
											</a>
										</li>
										<li>
											<a href="./person.php#" aria-label="">
												<div class="img">
													<picture>
														<source srcset="./assets/images/home_person_3.webp" media="(min-width:769px)">
														<img src="./assets/images/home_person_3_sp.webp">
													</picture>
												</div>
												<div class="txt">
													<span>
														お客様からの感謝と信頼が<br>
														大きなやりがいにつながる｡
													</span>
												</div>
												<div class="name">
													<dl>
														<dt>K.A</dt>
														<dd>
															執行役員<br>
															2008年入社
														</dd>
													</dl>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="obj" id="obj__3">
							<svg id="mysvg3" viewBox="0 0 300 320">
								<defs>
									<linearGradient id="grad3" x1="0" y1="1" x2="0" y2="0">
										<stop offset="0%" stop-color="#76c5ab"/>
										<stop offset="100%" stop-color="#27b9ed"/>
									</linearGradient>
								</defs>
								<path id="morph3" fill="url(#grad3)" opacity="0.5"
									d="M150.461,259.527 L144.192,251.424 L137.922,243.322 L131.653,235.219 L125.384,227.116 L119.115,219.013 L112.846,210.910 L106.576,202.808 L100.307,194.705 L94.038,186.602 L87.769,178.499 L81.500,170.396 L75.230,162.294 L68.961,154.191 L62.692,146.088 L56.423,137.985 L50.154,129.882 L43.884,121.780 L37.615,113.677 L31.346,105.574 L25.077,97.471 L18.808,89.368 L12.538,81.266 L6.269,73.163 L0.000,65.060 L3.364,62.458 L6.727,59.855 L10.091,57.253 L13.454,54.650 L16.818,52.048 L20.182,49.446 L23.545,46.843 L26.909,44.241 L30.272,41.638 L33.636,39.036 L37.000,36.434 L40.363,33.831 L43.727,31.229 L47.090,28.626 L50.454,26.024 L53.818,23.422 L57.181,20.819 L60.545,18.217 L63.908,15.614 L67.272,13.012 L70.636,10.410 L73.999,7.807 L77.363,5.205 L80.726,2.602 L84.090,0.000 L90.359,8.103 L96.628,16.206 L102.898,24.308 L109.167,32.411 L115.436,40.514 L121.705,48.617 L127.974,56.720 L134.244,64.822 L140.513,72.925 L146.782,81.028 L153.051,89.131 L159.320,97.234 L165.590,105.336 L171.859,113.439 L178.128,121.542 L184.397,129.645 L190.666,137.748 L196.936,145.850 L203.205,153.953 L209.474,162.056 L215.743,170.159 L222.012,178.262 L228.282,186.364 L234.551,194.467 L240.820,202.570 L237.456,205.172 L234.093,207.775 L230.729,210.377 L227.366,212.980 L224.002,215.582 L220.638,218.184 L217.275,220.787 L213.911,223.389 L210.548,225.992 L207.184,228.594 L203.820,231.196 L200.457,233.799 L197.093,236.401 L193.730,239.004 L190.366,241.606 L187.002,244.208 L183.639,246.811 L180.275,249.413 L176.912,252.016 L173.548,254.618 L170.184,257.220 L166.821,259.823 L163.457,262.425 L160.094,265.028 L156.730,267.630 Z" />
							</svg>
						</div>
					</div>
				</section>
				
				<section class="system fade" id="system">
					<a href="./system.php" aria-label="制度を知るページへ移動">
					<div class="inner">
						<h2><span>制度を知る</span></h2>
						<div class="lead">
							数字や図でみる<br>
							長谷工コミュニティ九州
						</div>
						<div class="more"><span>READ MORE</span></div>
					</div>
					</a>
				</section>
				
				<section class="recruit fade" id="recruit">
					<div class="inner">
						<a href="./recruit.php" aria-label="採用を知るページへ移動">
							<h2><span>採用を知る</span></h2>
							<div class="lead">人事担当者より/<br class="sp">選考フロー/募集要項</div>
							<div class="more"><span>READ MORE</span></div>
						</a>
						<div class="btns">
							<ul>
								<li><button id="open__entry" data-id="entry" aria-label="ENTRYへ移動"><img src="./assets/images/btn_entry.webp" alt="ENTRY" width="659" height="136"></button></li>
								<li><button id="open__mypage" data-id="mypage" aria-label="MYPAGEへ移動"><img src="./assets/images/btn_mypage.webp" alt="MYPAGE" width="659" height="136"></button></li>
							</ul>
						</div>
					</div>
				</section>
				
			</div>

		</main>
		
		<footer class="footer">
			<div class="inner">
				
				<div class="head">
					<a href="./" aria-label="ホームへ移動">
						<picture>
							<source srcset="./assets/images/logo.svg" media="(min-width:769px)">
							<img src="./assets/images/logo_f_sp.webp" alt="長谷工コミュニティ九州">
						</picture>
					</a>
				</div>
				<nav class="fnav">
					<div class="box">
						<h3><a href="./company.php" aria-label="会社を知るページへ移動">会社を知る</a></h3>
						<ul>
							<li><a href="./company.php#lead" aria-label="会社を知るページの長谷工コミュニティ九州とはへ移動">長谷工コミュニティ九州とは</a></li>
							<li><a href="./company.php#aboutgroup" aria-label="会社を知るページの長谷工グループとはへ移動">長谷工グループとは</a></li>
							<li><a href="./company.php#outline" aria-label="会社を知るページの会社概要へ移動">会社概要</a></li>
						</ul>
					</div>
					<div class="box">
						<h3><a href="./works.php" aria-label="仕事を知るページへ移動">仕事を知る</a></h3>
						<ul>
							<li><a href="./works.php#lead" aria-label="仕事を知るページのマンション管理業務とはへ移動">マンション管理業務とは</a></li>
							<li><a href="./works.php#front" aria-label="仕事を知るページのフロント営業へ移動">フロント営業</a></li>
							<li><a href="./works.php#facility" aria-label="仕事を知るページの施設管理へ移動">施設管理</a></li>
							<li><a href="./works.php#accounting" aria-label="仕事を知るページの管理組合会計へ移動">管理組合会計</a></li>
						</ul>
					</div>
					<div class="box">
						<h3><a href="./person.php" aria-label="人を知るページへ移動">人を知る</a></h3>
						<ul>
							<li><a href="./person.php#kh" aria-label="人を知るページのK.H（フロント営業）へ移動">K.H（フロント営業）</a></li>
							<li><a href="./person.php#ha" aria-label="人を知るページのH.A（フロント営業）へ移動">H.A（フロント営業）</a></li>
							<li><a href="./person.php#ka" aria-label="人を知るページのK.A（執行役員）へ移動">K.A（執行役員）</a></li>
						</ul>
					</div>
					<div class="box">
						<h3><a href="./system.php" aria-label="制度を知るページへ移動">制度を知る</a></h3>
						<ul>
							<li><a href="./system.php#number" aria-label="制度を知るページの数字で見るへ移動">数字で見る</a></li>
							<li><a href="./system.php#education" aria-label="制度を知るページの教育制度へ移動">教育制度</a></li>
							<li><a href="./system.php#career" aria-label="制度を知るページのキャリア制度へ移動">キャリア制度</a></li>
							<li><a href="./system.php#benefits" aria-label="制度を知るページの福利厚生へ移動">福利厚生</a></li>
						</ul>
					</div>
					<div class="box">
						<h3><a href="./recruit.php" aria-label="採用を知るページへ移動">採用を知る</a></h3>
						<ul>
							<li><a href="./recruit.php#lead" aria-label="採用を知るページの人事担当者よりへ移動">人事担当者より</a></li>
							<li><a href="./recruit.php#flow" aria-label="採用を知るページの選考フローへ移動">選考フロー</a></li>
							<li><a href="./recruit.php#application" aria-label="採用を知るページの募集要項へ移動">募集要項</a></li>
						</ul>
					</div>
				</nav>
				<div class="entries">
					<h3>エントリーはこちらから</h3>
					<ul>
						<li><a href="https://job.mynavi.jp/26/pc/search/corp248206/outline.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2026へ移動"><img src="./assets/images/banner_mynavi_2026.webp" alt="マイナビ2026" width="293" height="92"></a></li>
						<li><a href="https://job.rikunabi.com/2026/company/r556672054/" target="_blank" rel="noopener noreferrer" aria-label="リクナビ2026へ移動"><img src="./assets/images/banner_recnavi_2026.webp" alt="リクナビ2026" width="293" height="92"></a></li>
						<li><a href="https://job.axol.jp/qd/s/haseko_26/entry/agreement" target="_blank" rel="noopener noreferrer" aria-label="いずれのIDもお持ちでない場合へ移動"><img src="./assets/images/banner_noid_2026.webp" alt="いずれのIDもお持ちでない方" width="293" height="92"></a></li>
						<li><a href="https://job.mynavi.jp/27/pc/search/corp248206/is.html" target="_blank" rel="noopener noreferrer" aria-label="マイナビ2027へ移動"><img src="./assets/images/banner_mynavi_2027.webp" alt="マイナビ2027" width="293" height="92"></a></li>
						<li><img src="./assets/images/banner_recnavi_preparation.webp" alt="準備中 リクナビIDをお持ちの方" width="293" height="92"></li>
						<li><img src="./assets/images/banner_preparation.webp" alt="準備中（2027年卒）" width="293" height="92"></li>
					</ul>
				</div>
				<div class="mypage">
					<h3>マイページはこちらから</h3>
					<p>会社説明会の予約は、マイページから受け付けています。</p>
					<ul>
						<li><a href="https://job.axol.jp/qd/s/haseko_26/mypage/login" target="_blank" rel="noopener noreferrer" aria-label="2026年卒マイページにログインする"><span>マイページにログイン（2026年卒）</span></a></li>
						<li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="2027年卒マイページにログインする" class="disabled"><span>マイページ準備中（2027年卒）</span></a></li>
					</ul>
				</div>
				<div class="btns">
					<ul>
						<li><a href="https://www.haseko.co.jp/cmq/" target="_blank" rel="noopener noreferrer" aria-label="コーポレートサイトへ移動">コーポレートサイト</a></li>
						<li><a href="https://www.haseko.co.jp/cmq/company/privacy" target="_blank" rel="noopener noreferrer" aria-label="個人情報保護方針へ移動">個人情報保護方針</a></li>
						<li><a href="https://www.haseko.co.jp/cmq/contact" target="_blank" rel="noopener noreferrer" aria-label="お問い合わせ窓口へ移動">お問い合わせ窓口</a></li>
					</ul>
				</div>
				<div class="copy">Copyright&copy; <a href="//www.haseko.co.jp/cmq/" target="_blank" rel="noopener noreferrer" aria-label="長谷工コミュニティ九州のウェブサイトへ移動">HASEKO COMMUNITY KYUSHU</a>. All rights reserved.</div>
				
			</div>
		</footer>
		
		<div class="fbtn">
			<button><img src="./assets/images/f_btn.webp" alt="ENTRY&MYPAGE"></button>
		</div>
		
		<div class="fbtn">
			<button><img src="./assets/images/f_btn.webp" alt="ENTRY&MYPAGE"></button>
		</div>
		
		<script defer src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script defer src="//cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
		<script defer src="./assets/js/script.js?<?= time() ?>"></script>
		
		<style>
		svg {
			width: 100%;
			display: block;
		}
		</style>
		<script>
		//1
		const mysvg1 = Snap("#mysvg1");
		const morph1 = mysvg1.select("#morph1");
		const fromPath1 = morph1.attr("d");
		const toPath1 = "M195.660,305.490 L189.731,303.448 L183.802,301.405 L177.873,299.363 L171.944,297.320 L166.015,295.278 L160.085,293.235 L154.156,291.193 L148.227,289.151 L142.298,287.108 L136.369,285.066 L130.440,283.023 L124.511,280.981 L118.582,278.938 L112.653,276.896 L106.724,274.854 L100.795,272.811 L94.865,270.769 L88.936,268.726 L83.007,266.684 L77.078,264.642 L71.149,262.599 L65.220,260.557 L59.291,258.514 L53.362,256.472 L47.433,254.429 L41.504,252.387 L35.575,250.345 L29.645,248.302 L23.716,246.260 L17.787,244.217 L11.858,242.175 L5.929,240.132 L0.000,238.090 L5.929,230.875 L11.858,223.660 L17.787,216.445 L23.716,209.231 L29.645,202.016 L35.575,194.801 L41.504,187.586 L47.433,180.371 L53.362,173.156 L59.291,165.942 L65.220,158.727 L71.149,151.512 L77.078,144.297 L83.007,137.082 L88.936,129.867 L94.865,122.652 L100.795,115.438 L106.724,108.223 L112.653,101.008 L118.582,93.793 L124.511,86.578 L130.440,79.363 L136.369,72.148 L142.298,64.934 L148.227,57.719 L154.156,50.504 L160.085,43.289 L166.015,36.074 L171.944,28.859 L177.873,21.645 L183.802,14.430 L189.731,7.215 L195.660,0.000 L195.660,9.257 L195.660,18.515 L195.660,27.772 L195.660,37.029 L195.660,46.286 L195.660,55.544 L195.660,64.801 L195.660,74.058 L195.660,83.315 L195.660,92.573 L195.660,101.830 L195.660,111.087 L195.660,120.345 L195.660,129.602 L195.660,138.859 L195.660,148.116 L195.660,157.374 L195.660,166.631 L195.660,175.888 L195.660,185.145 L195.660,194.403 L195.660,203.660 L195.660,212.917 L195.660,222.175 L195.660,231.432 L195.660,240.689 L195.660,249.946 L195.660,259.204 L195.660,268.461 L195.660,277.718 L195.660,286.975 L195.660,296.233 L195.660,305.490 Z";
		let current1 = "circle";
		
		//2
		const mysvg2 = Snap("#mysvg2");
		const morph2 = mysvg2.select("#morph2");
		const fromPath2 = morph2.attr("d");
		const toPath2 = "M285.360,142.680 L285.078,151.639 L284.235,160.563 L282.833,169.416 L280.877,178.163 L278.377,186.771 L275.341,195.204 L271.781,203.430 L267.711,211.417 L263.149,219.132 L258.111,226.545 L252.617,233.628 L246.689,240.351 L240.351,246.689 L233.628,252.617 L226.545,258.111 L219.132,263.149 L211.417,267.711 L203.430,271.781 L195.204,275.341 L186.771,278.377 L178.163,280.877 L169.416,282.833 L160.563,284.235 L151.639,285.078 L142.680,285.360 L133.721,285.078 L124.797,284.235 L115.944,282.833 L107.137,280.877 L98.394,278.377 L89.786,275.341 L81.353,271.781 L73.127,267.711 L65.140,263.149 L57.425,258.111 L50.012,252.617 L43.929,246.689 L38.191,240.351 L32.863,233.628 L27.935,226.545 L23.441,219.132 L19.403,211.417 L15.841,203.430 L12.771,195.204 L10.211,186.771 L8.155,178.163 L6.753,169.416 L5.910,160.563 L5.628,151.639 L5.910,142.680 L5.628,133.721 L5.910,124.797 L6.753,115.944 L8.155,107.137 L10.211,98.394 L12.771,89.786 L15.841,81.353 L19.403,73.127 L23.441,65.140 L27.935,57.425 L32.863,50.012 L38.191,43.929 L43.929,38.191 L50.012,32.863 L57.425,27.935 L65.140,23.441 L73.127,19.403 L81.353,15.841 L89.786,12.771 L98.394,10.211 L107.137,8.155 L115.944,6.753 L124.797,5.910 L133.721,5.628 L142.680,5.910 L151.639,5.628 L160.563,5.910 L169.416,6.753 L178.163,8.155 L186.771,10.211 L195.204,12.771 L203.430,15.841 L211.417,19.403 L219.132,23.441 L226.545,27.935 L233.628,32.863 L240.351,38.191 L246.689,43.929 L252.617,50.012 L258.111,57.425 L263.149,65.140 L267.711,73.127 L271.781,81.353 L275.341,89.786 L278.377,98.394 L280.877,107.137 L282.833,115.944 L284.235,124.797 L285.078,133.721 L285.360,142.680 Z";
		let current2 = "circle";
		
		//3
		const mysvg3 = Snap("#mysvg3");
		const morph3 = mysvg3.select("#morph3");
		const fromPath3 = morph3.attr("d");
		const toPath3 = "M195.660,305.490 L189.731,303.448 L183.802,301.405 L177.873,299.363 L171.944,297.320 L166.015,295.278 L160.085,293.235 L154.156,291.193 L148.227,289.151 L142.298,287.108 L136.369,285.066 L130.440,283.023 L124.511,280.981 L118.582,278.938 L112.653,276.896 L106.724,274.854 L100.795,272.811 L94.865,270.769 L88.936,268.726 L83.007,266.684 L77.078,264.642 L71.149,262.599 L65.220,260.557 L59.291,258.514 L53.362,256.472 L47.433,254.429 L41.504,252.387 L35.575,250.345 L29.645,248.302 L23.716,246.260 L17.787,244.217 L11.858,242.175 L5.929,240.132 L0.000,238.090 L5.929,230.875 L11.858,223.660 L17.787,216.445 L23.716,209.231 L29.645,202.016 L35.575,194.801 L41.504,187.586 L47.433,180.371 L53.362,173.156 L59.291,165.942 L65.220,158.727 L71.149,151.512 L77.078,144.297 L83.007,137.082 L88.936,129.867 L94.865,122.652 L100.795,115.438 L106.724,108.223 L112.653,101.008 L118.582,93.793 L124.511,86.578 L130.440,79.363 L136.369,72.148 L142.298,64.934 L148.227,57.719 L154.156,50.504 L160.085,43.289 L166.015,36.074 L171.944,28.859 L177.873,21.645 L183.802,14.430 L189.731,7.215 L195.660,0.000 L195.660,9.257 L195.660,18.515 L195.660,27.772 L195.660,37.029 L195.660,46.286 L195.660,55.544 L195.660,64.801 L195.660,74.058 L195.660,83.315 L195.660,92.573 L195.660,101.830 L195.660,111.087 L195.660,120.345 L195.660,129.602 L195.660,138.859 L195.660,148.116 L195.660,157.374 L195.660,166.631 L195.660,175.888 L195.660,185.145 L195.660,194.403 L195.660,203.660 L195.660,212.917 L195.660,222.175 L195.660,231.432 L195.660,240.689 L195.660,249.946 L195.660,259.204 L195.660,268.461 L195.660,277.718 L195.660,286.975 L195.660,296.233 L195.660,305.490 Z";
		let current3 = "circle";
		
		function loop1() {
			morph1.animate({ 
				d: current1 === "circle" ? toPath1 : fromPath1 }, 5000, mina.easeinout, () => {
				current1 = current1 === "circle" ? "triangle" : "circle";
				loop1();
			});
		}
		loop1();
		
		function loop2() {
			morph2.animate({ 
				d: current2 === "circle" ? toPath2 : fromPath2 }, 4500, mina.easeinout, () => {
				current2 = current2 === "circle" ? "triangle" : "circle";
				loop2();
			});
		}
		loop2();
		
		function loop3() {
			morph3.animate({ 
				d: current3 === "circle" ? toPath3 : fromPath3 }, 5500, mina.easeinout, () => {
				current3 = current3 === "circle" ? "triangle" : "circle";
				loop3();
			});
		}
		loop3();
		</script>
		
	</body>
</html>