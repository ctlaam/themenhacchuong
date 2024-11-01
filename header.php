<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhacchuong
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="container">
			<div class="header-top-left fleft">
				<h1 class="logo fleft">
					<span style="display: none;">Tải nhạc chuông miễn phí</span>
					<a href="https://nhacchuongviet.com" title="Tải nhạc chuông miễn phí">
						<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/logo-nhac.webp" alt="Tải nhạc chuông miễn phí" title="Tải nhạc chuông miễn phí">
					</a>
				</h1>
			</div>
			<div class="header-top-right fright">
				<div class="main-nav fleft ">
					<!-- main-nav-active -->
					<div class="close-nav">
						<i class="fal fa-times"></i>Đóng menu
					</div>
					<div class="main-nav-inner">
						<ul id="menu-header-main-menu" class="menu">
							<li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="https://nhacchuongviet.com/nhac-chuong-moi/">Nhạc chuông mới</a></li>
							<li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="https://nhacchuongviet.com/nhac-chuong-tai-nhieu/">Nhạc chuông tải nhiều</a></li>
							<li id="menu-item-618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-618"><a href="https://nhacchuongviet.com/nhac-chuong-nghe-nhieu/">Nhạc chuông nghe nhiều</a></li>
							<li id="menu-item-4311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4311"><a href="https://nhacchuongviet.com/news/">Tin tức</a></li>
							<li id="menu-item-9679" class="nav-col menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9679"><a
									style="display: flex;
									align-items: center;
									"
									href="#">Chuyên mục
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
										<path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
									</svg></a>
								<ul class="sub-menu">
									<li id="menu-item-12006" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12006"><a href="https://nhacchuongviet.com/nhac-chuong-bao-thuc-cuc-hay/">Nhạc Chuông Báo Thức</a></li>
									<li id="menu-item-12005" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12005"><a href="https://nhacchuongviet.com/nhac-chuong-remix-doc-nhat/">Nhạc Chuông Remix</a></li>
									<li id="menu-item-12021" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12021"><a href="https://nhacchuongviet.com/nhac-chuong-tiktok-doc-nhat/">Nhạc Chuông TikTok</a></li>
									<li id="menu-item-12004" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12004"><a href="https://nhacchuongviet.com/nhac-chuong-khong-loi-chat-nhat-2024/">Nhạc Chuông Không Lời</a></li>
									<li id="menu-item-12007" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12007"><a href="https://nhacchuongviet.com/nhac-chuong-che-hai-huoc-hay/">Nhạc Chuông Chế Hài Hước</a></li>
									<li id="menu-item-12008" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12008"><a href="https://nhacchuongviet.com/nhac-chuong-game/">Nhạc Chuông Game</a></li>
									<li id="menu-item-12010" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12010"><a href="https://nhacchuongviet.com/nhac-chuong-nhac-hoa-hay-nhat/">Nhạc Chuông Nhạc Hoa</a></li>
									<li id="menu-item-12011" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12011"><a href="https://nhacchuongviet.com/nhac-chuong-dj-nonstop-2024/">Nhạc Chuông DJ – Nonstop</a></li>
									<li id="menu-item-12012" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12012"><a href="https://nhacchuongviet.com/nhac-chuong-rap-hay-2024/">Nhạc Chuông Rap</a></li>
									<li id="menu-item-12013" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12013"><a href="https://nhacchuongviet.com/nhac-chuong-nhac-phim-hay/">Nhạc Chuông Nhạc Phim</a></li>
									<li id="menu-item-12014" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12014"><a href="https://nhacchuongviet.com/nhac-chuong-kpop-hay-nhat/">Nhạc Chuông K-Pop</a></li>
									<li id="menu-item-12015" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12015"><a href="https://nhacchuongviet.com/nhac-chuong-the-thao/">Nhạc Chuông Thể Thao</a></li>
									<li id="menu-item-12016" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12016"><a href="https://nhacchuongviet.com/nhac-chuong-quoc-te-moi-nhat-2024/">Nhạc Chuông Quốc Tế</a></li>
									<li id="menu-item-12017" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12017"><a href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-chat-nhat-2024/">Nhạc Chuông Nhạc Trẻ</a></li>
									<li id="menu-item-12018" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12018"><a href="https://nhacchuongviet.com/nhac-chuong-tru-tinh-moi-nhat/">Nhạc Chuông Trữ Tình</a></li>
									<li id="menu-item-12019" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12019"><a href="https://nhacchuongviet.com/nhac-chuong-thieu-nhi/">Nhạc Chuông Thiếu Nhi</a></li>
									<li id="menu-item-32863" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-32863"><a href="https://nhacchuongviet.com/nhac-chuong-tieng-dong-vat/">Nhạc Chuông Tiếng Động Vật</a></li>
									<li id="menu-item-12020" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12020"><a href="https://nhacchuongviet.com/nhac-chuong-tin-nhan-hay-nhat/">Nhạc Chuông Tin nhắn</a></li>
									<li id="menu-item-12022" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12022"><a href="https://nhacchuongviet.com/nhac-chuong-xuan/">Nhạc Chuông Xuân</a></li>
									<li id="menu-item-12001" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12001"><a href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/">Nhạc Chuông iPhone</a></li>
									<li id="menu-item-12002" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12002"><a href="https://nhacchuongviet.com/nhac-chuong-xiaomi/">Nhạc Chuông Xiaomi</a></li>
									<li id="menu-item-12003" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12003"><a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/">Nhạc Chuông Samsung</a></li>
									<li id="menu-item-23674" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23674"><a href="https://nhacchuongviet.com/nhac-chuong-vivo/">Nhạc Chuông Vivo</a></li>
									<li id="menu-item-23675" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23675"><a href="https://nhacchuongviet.com/nhac-chuong-realme/">Nhạc Chuông Realme</a></li>
									<li id="menu-item-23676" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23676"><a href="https://nhacchuongviet.com/nhac-chuong-oppo-hay/">Nhạc Chuông Oppo</a></li>
									<li id="menu-item-24665" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24665"><a href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/">Nhạc Chuông Nokia</a></li>
									<li id="menu-item-24827" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24827"><a href="https://nhacchuongviet.com/nhac-chuong-sony/">Nhạc Chuông Sony</a></li>
									<li id="menu-item-24826" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24826"><a href="https://nhacchuongviet.com/nhac-chuong-google-pixel/">Nhạc Chuông Google Pixel</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<form class="search-form fleft" action="https://nhacchuongviet.com/tim-kiem/" method="get">
					<input class="search-input bsize fleft" type="text" name="sn" value="" placeholder="Tìm kiếm nhạc chuông..." autocomplete="off">
					<input type="hidden" name="type" value="all">
					<button class="search-submit fright bsize"><i class="far fa-search"></i></button>
					<div class="cboth"></div>
					<div class="quick-search bsize" style="display: none;">
						<div class="quick-search-btn">
							<span class="active" data-type="all">Tất cả</span>
							<span data-type="post">Nhạc chuông</span>
							<span data-type="news">Tin tức</span>

						</div>
						<div class="quick-search-result">
							<p class="ajax-search-loadding"><i class="fas fa-spinner fa-pulse"></i>Đang tìm kiếm...</p>
						</div>
					</div>
				</form>
			</div>
			<div class="icon-show-nav">

				<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
					<path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
				</svg>
			</div>
			<div class="icon-search">
				<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
					<path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
				</svg>

				<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
					<path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
				</svg>
			</div>
			<div class="cboth"></div>
		</div><!-- end .container -->
	</header>