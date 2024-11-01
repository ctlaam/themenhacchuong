<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nhacchuong
 */

get_header();
?>
<?php
$type = 1;
$type_download = 'file';
$list_files = get_field('list_file');
$url_array = array();
?>

<div class="block-breadcrumb">
	<div class="container">
		<nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
			<p><a href="https://nhacchuongviet.com">Trang chủ</a><span class="separator"> » </span><a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/">Nhạc Chuông Samsung</a><span class="separator"> » </span><span class="last">Shape Of You Samsung</span></p>
		</nav>
	</div>
</div>
<div class="home-wrap">
	<div class="container">
		<div class="single-wrap bsize">
			<div class="primary bsize fleft">
				<div class="single-top">
					<div class="single-top-head">
						<h1 class="single-title">
							Nhạc chuông Shape Of You Samsung </h1>
					</div>
					<div class="single-top-content">
						<marquee onmouseover="this.stop()" onmouseout="this.start()" style="color: #f44336;font-size:16px;"><strong>♥♥♥ Ú Òa Nhạc Chuông Hot Này ♥♥♥ Chúc Bạn Nghe và Tải Nhạc Vui Vẻ ♥♥♥</strong></marquee>
						<?php

						if ($list_files && count($list_files) >= 2) {
							foreach ($list_files as $file) {
								// Kiểm tra nếu trường file trong từng mục của list_file có dữ liệu
								if (!empty($file['file_music'])) {
									// Lưu URL vào mảng
									$url_array[] = wp_get_attachment_url($file['file_music']);
									// Assuming $file['file_music'] contains the attachment ID
									$attachment_id = $file['file_music'];

									// Get the full file path
									$file_path = get_attached_file($attachment_id);

									// Get the file size
									$file_size = filesize($file_path);

									// Get the file name
									$file_name = basename($file_path);

									// Get the file upload date
									$upload_date = get_the_date('Y-m-d', $attachment_id);

									// Output the details
									echo str_replace("-", " ", substr($file_name, 0, -4)) . ' - ' . size_format($file_size) . ' - ' . get_the_date('d/m/Y', $attachment_id);
						?>
									<div>
										<div class="box-player">
											<div tabindex="0" class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--stopped">
												<audio id="<?php echo 'music-' . ($file['file_music']);  ?>">
													<source src="<?php echo esc_html(wp_get_attachment_url($file['file_music'])); ?>">
												</audio>
											</div>
										</div>
										<div class="mb-4" style="text-align:right">
											<a class="buton-download download-button file button-download-music" href="javascript:void()" data-toggle="modal" url-music-mp3="<?php echo get_page_link($downloadPage) . '?id=' . $file['file_music'] . '&post=' . get_the_ID() ?>" url-music-mp4="<?php echo get_page_link($downloadPage) . '?id=' . $file['file_music'] . '&post=' . get_the_ID() . '&type=m4r' ?>" data-target="#download-popup">
												<i class="fas fa-download"></i>Pobierz
											</a>
										</div>
									</div>


							<?php
								}
							}
						} else {
							$type = 2;
							$file = $list_files[0];
							?>
							<div class="box-player">
								<div tabindex="0" class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--stopped">
									<audio id="<?php echo 'music-' . ($file['file_music']);   ?>">
										<source src="<?php echo esc_html(wp_get_attachment_url($file['file_music'])); ?>">
									</audio>
								</div>
							</div>
						<?php
						}
						?>
						<div class="single-top-meta">
							<div class="single-top-left fleft">
								<div class="single-meta-box">
									<div class="single-meta-box-top">
										<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff5722">
											<path d="M280-600v-80h560v80H280Zm0 160v-80h560v80H280Zm0 160v-80h560v80H280ZM160-600q-17 0-28.5-11.5T120-640q0-17 11.5-28.5T160-680q17 0 28.5 11.5T200-640q0 17-11.5 28.5T160-600Zm0 160q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520q17 0 28.5 11.5T200-480q0 17-11.5 28.5T160-440Zm0 160q-17 0-28.5-11.5T120-320q0-17 11.5-28.5T160-360q17 0 28.5 11.5T200-320q0 17-11.5 28.5T160-280Z" />
										</svg> Thể loại: <a style="margin-left: 5px;" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/"> Nhạc Chuông Samsung</a>
									</div>
									<div class="single-meta-box-content">
										<div class="single-top-content-left fleft">
											<span><i class="fas fa-headphones"></i>8 Lượt nghe</span>
											<span><i class="fas fa-cloud-download-alt"></i>0 lượt tải</span>
										</div>
										<div class="single-top-content-right fright download-button">
											<a class="btn-dl-item" style="display:flex;align-items:center;justify-content:space-between" rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
													<path d="M480-332 232-580l89-89 96 97v-262h126v262l96-97 89 89-248 248ZM252-126q-53 0-89.5-36.5T126-252v-120h126v120h456v-120h126v120q0 53-36.5 89.5T708-126H252Z" />
												</svg><strong>Download</strong></a>
										</div>
										<div class="cboth"></div>
										<!-- <div class="time-count hidden">
Bạn sẽ được chuyển sang trang download sau <span id="time">10</span> giây nữa.
</div> -->
									</div>
								</div>
							</div>
							<div class="single-qrcode fright">
								<img src="https://qrcode.tec-it.com/API/QRCode?data=https://nhacchuongviet.com/tai-nhac/shape-of-you-samsung" title="QR Code Link" alt="Scan QR Code to Download">
							</div>
							<div class="cboth"></div>
						</div>
						<div class="single-ringtone-content single-page-content">
						</div>

						<div class="single-share bsize">
							<p class="single-share-title">
								<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ff5722">
									<path d="M680-80q-50 0-85-35t-35-85q0-6 3-28L282-392q-16 15-37 23.5t-45 8.5q-50 0-85-35t-35-85q0-50 35-85t85-35q24 0 45 8.5t37 23.5l281-164q-2-7-2.5-13.5T560-760q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35q-24 0-45-8.5T598-672L317-508q2 7 2.5 13.5t.5 14.5q0 8-.5 14.5T317-452l281 164q16-15 37-23.5t45-8.5q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T720-200q0-17-11.5-28.5T680-240q-17 0-28.5 11.5T640-200q0 17 11.5 28.5T680-160ZM200-440q17 0 28.5-11.5T240-480q0-17-11.5-28.5T200-520q-17 0-28.5 11.5T160-480q0 17 11.5 28.5T200-440Zm480-280q17 0 28.5-11.5T720-760q0-17-11.5-28.5T680-800q-17 0-28.5 11.5T640-760q0 17 11.5 28.5T680-720Zm0 520ZM200-480Zm480-280Z" />
								</svg>Chia sẻ:
							</p>
							<div class="a2a_kit a2a_kit_size_26 addtoany_list" data-a2a-url="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/shape-of-you-samsung/" data-a2a-title="Shape Of You Samsung" style="line-height: 26px;"><a class="a2a_button_facebook" href="/#facebook" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent; width: 26px; line-height: 26px; height: 26px; background-size: 26px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
											<path fill="#ff5722" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path>
										</svg></span><span class="a2a_label"></span></a><a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: transparent; width: 26px; line-height: 26px; height: 26px; background-size: 26px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
											<path fill="#ff5722" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path>
										</svg></span><span class="a2a_label"></span></a><a class="a2a_button_pinterest" href="/#pinterest" title="Pinterest" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_pinterest" style="background-color: transparent; width: 26px; line-height: 26px; height: 26px; background-size: 26px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
											<path fill="#ff5722" d="M15.995 4C9.361 4 4 9.37 4 15.995c0 5.084 3.16 9.428 7.622 11.176-.109-.948-.198-2.41.039-3.446.217-.938 1.402-5.963 1.402-5.963s-.356-.72-.356-1.777c0-1.668.968-2.912 2.172-2.912 1.027 0 1.52.77 1.52 1.688 0 1.027-.65 2.567-.996 3.998-.287 1.195.602 2.172 1.777 2.172 2.132 0 3.771-2.25 3.771-5.489 0-2.873-2.063-4.877-5.015-4.877-3.416 0-5.42 2.557-5.42 5.203 0 1.027.395 2.132.888 2.735a.36.36 0 0 1 .08.345c-.09.375-.297 1.195-.336 1.363-.05.217-.178.266-.405.158-1.481-.711-2.409-2.903-2.409-4.66 0-3.781 2.745-7.257 7.928-7.257 4.156 0 7.394 2.962 7.394 6.931 0 4.137-2.606 7.464-6.22 7.464-1.214 0-2.36-.632-2.744-1.383l-.75 2.854c-.267 1.046-.998 2.35-1.491 3.149a12 12 0 0 0 3.554.533C22.629 28 28 22.63 28 16.005 27.99 9.37 22.62 4 15.995 4"></path>
										</svg></span><span class="a2a_label"></span></a><a class="a2a_button_vk" href="/#vk" title="VK" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_vk" style="background-color: transparent; width: 26px; line-height: 26px; height: 26px; background-size: 26px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
											<path fill="#ff5722" fill-rule="evenodd" d="M15.764 22.223h1.315s.394-.044.6-.262c.184-.2.18-.574.18-.574s-.03-1.764.79-2.023c.81-.255 1.844 1.705 2.942 2.46.832.57 1.464.445 1.464.445l2.936-.04s1.538-.097.81-1.304c-.06-.1-.426-.894-2.186-2.526-1.843-1.71-1.594-1.434.624-4.39 1.353-1.804 1.893-2.902 1.724-3.374-.16-.45-1.153-.33-1.153-.33l-3.306.02s-.247-.034-.428.074c-.178.108-.293.356-.293.356s-.522 1.394-1.223 2.58c-1.47 2.5-2.06 2.633-2.3 2.476-.563-.36-.42-1.454-.42-2.23 0-2.423.365-3.435-.72-3.696-.357-.085-.623-.143-1.544-.15-1.182-.014-2.18.003-2.743.28-.378.185-.667.595-.49.62.218.027.713.13.975.49.34.46.33 1.496.33 1.496s.193 2.852-.46 3.206c-.442.245-1.056-.252-2.37-2.52-.67-1.163-1.18-2.446-1.18-2.446s-.1-.24-.273-.37c-.212-.155-.506-.204-.506-.204l-3.145.02s-.473.015-.647.22c-.154.183-.01.56-.01.56s2.46 5.757 5.245 8.657c2.553 2.66 5.454 2.485 5.454 2.485z" clip-rule="evenodd"></path>
										</svg></span><span class="a2a_label"></span></a><a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share#url=https%3A%2F%2Fnhacchuongviet.com%2Fnhac-chuong-samsung-chat-nhat%2Fshape-of-you-samsung%2F&amp;title=Shape%20Of%20You%20Samsung"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: transparent; width: 26px; line-height: 26px; height: 26px; background-size: 26px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
											<g fill="#ff5722">
												<path d="M14 7h4v18h-4z"></path>
												<path d="M7 14h18v4H7z"></path>
											</g>
										</svg></a></div>
						</div>
					</div>
				</div>
				<div class="single-related">
					<h2 class="main-item-head">
						<span>Nhạc chuông cùng chủ đề</span>
					</h2>
					<div class="main-item-content">
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-discovered/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-discovered/">Galaxy S24 Discovered</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>122 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-discovered/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-dusk/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-dusk/">Galaxy S24 Dusk</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>125 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s24-dusk/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-transition/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-transition/">Samsung Transition</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>162 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-transition/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s8-plus/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s8-plus/">Samsung Galaxy S8 Plus</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>176 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s8-plus/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a03s-new/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a03s-new/">Samsung Galaxy A03s New</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>116 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a03s-new/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-note-5-pro/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-note-5-pro/">Samsung Galaxy Note 5 Pro</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>105 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-note-5-pro/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s9-rainbow/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s9-rainbow/">Galaxy S9 Rainbow</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>125 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s9-rainbow/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-hypnotize/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-hypnotize/">Samsung Hypnotize</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>103 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-hypnotize/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/cool-samsung-note/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/cool-samsung-note/">Cool Samsung Note</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>90 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/cool-samsung-note/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s7-sms/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s7-sms/">Samsung Galaxy S7 Sms</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>87 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s7-sms/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-mantra/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-mantra/">Galaxy Mantra</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>65 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-mantra/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-original-mix/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-original-mix/">Galaxy Original Mix</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>100 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-original-mix/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-a800/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-a800/">Samsung A800</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>107 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-a800/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-tune-ringing/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-tune-ringing/">Samsung Tune Ringing</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>171 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-tune-ringing/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s21-bugs-story/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s21-bugs-story/">Galaxy S21 Bugs Story</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>60 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/galaxy-s21-bugs-story/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-m10/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-m10/">Samsung Galaxy M10</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>123 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-m10/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s24-ultra/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s24-ultra/">Samsung S24 Ultra</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>143 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s24-ultra/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-j2-basic-bell/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-j2-basic-bell/">Samsung J2 Basic Bell</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>127 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-j2-basic-bell/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s24-smooth-wave/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s24-smooth-wave/">Samsung Galaxy S24 – Smooth Wave</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>162 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-s24-smooth-wave/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a34/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a34/">Samsung Galaxy A34</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>158 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a34/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a25-2/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a25-2/">Samsung Galaxy A25</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>200 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a25-2/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a05s/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a05s/">Samsung Galaxy A05S</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>272 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a05s/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a24/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a24/">Samsung Galaxy A24</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>123 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-galaxy-a24/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="post-file-item bsize fleft block-item-flex">
							<a class="post-file-item-right fleft" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s23-ultra-cassiopeia-2/">
							</a>
							<div class="post-file-item-left fright bsize">
								<p class="post-file-item-title">
									<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s23-ultra-cassiopeia-2/">Samsung S23 Ultra Cassiopeia</a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-headphones"></i>291 lượt nghe</span>
										<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/samsung-s23-ultra-cassiopeia-2/">Tải nhạc</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="cboth"></div>
					</div>
				</div>
				<div class="box-comment single-top-content">
					<div class="box-comment-head top10-wrap-head">
						Bình luận
					</div>
					<div class="box-comment-content">
						<div class="fb-comments" data-href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/shape-of-you-samsung/" data-width="100%" data-numposts="5" data-order-by="reverse_time"></div>
					</div>
				</div>
				<div class="top-100-related">
					<div class="top-100-related-head">
						Có thể bạn quan tâm?
					</div>
					<div class="top-100-related-content block-content-flex">
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-bao-thuc-hot-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2023/03/bao-thuc.webp" alt="Top 100 nhạc chuông báo thức hot nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-bao-thuc-hot-nhat/">Top 100 nhạc chuông báo thức hot nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-tre-mp3/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2023/03/nhac-tre.webp" alt="Top 100 nhạc chuông nhạc trẻ mp3 hay nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-tre-mp3/">Top 100 nhạc chuông nhạc trẻ mp3 hay nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-remix/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2023/03/nhac-remix.webp" alt="Top 100 nhạc chuông Remix hot nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-remix/">Top 100 nhạc chuông Remix hot nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-tik-tok-hay-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2023/03/tiktok.webp" alt="Top 100 nhạc Tik Tok hay nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-tik-tok-hay-nhat/">Top 100 nhạc Tik Tok hay nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-iphone-hay-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/100-nhac-chuong-iPhone.webp" alt="Top 100 nhạc chuông iPhone hay nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-iphone-hay-nhat/">Top 100 nhạc chuông iPhone hay nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-khong-loi/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-khong-loi.webp" alt="Top 100 nhạc chuông không lời hot nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-khong-loi/">Top 100 nhạc chuông không lời hot nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-nokia-hot-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/TOP-100-nhac-chuong-Nokia.webp" alt="Top 100 nhạc chuông Nokia hot nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-nokia-hot-nhat/">Top 100 nhạc chuông Nokia hot nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-tin-nhan-thu-vi-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-tin-nhan.webp" alt="Top 100 nhạc chuông tin nhắn thú vị nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-tin-nhan-thu-vi-nhat/">Top 100 nhạc chuông tin nhắn thú vị nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-samsung-hay-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-Samsung.webp" alt="Top 100 nhạc chuông Samsung hay nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-samsung-hay-nhat/">Top 100 nhạc chuông Samsung hay nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-rap-doc-dao-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-Rap-doc-dao-nhat.webp" alt="Top 100 nhạc chuông Rap độc đáo nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-rap-doc-dao-nhat/">Top 100 nhạc chuông Rap độc đáo nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-oppo/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-Oppo-doc-dao-nhat.webp" alt="Top 100 nhạc chuông Oppo độc đáo nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-oppo/">Top 100 nhạc chuông Oppo độc đáo nhất</a>
							</p>
						</div>
						<div class="top-100-related-item fleft thumb-zoom">
							<a href="https://nhacchuongviet.com/top-100-nhac-chuong-quoc-te-hay-nhat/" class="top-100-related-item-thumb thumb-cover">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/04/Top-100-nhac-chuong-quoc-te-hay-nhat.webp" alt="Top 100 nhạc chuông Quốc Tế hay nhất">
							</a>
							<p class="top-100-related-item-title">
								<a href="https://nhacchuongviet.com/top-100-nhac-chuong-quoc-te-hay-nhat/">Top 100 nhạc chuông Quốc Tế hay nhất</a>
							</p>
						</div>
						<div class="cboth"></div>
					</div>
				</div>
				<div class="main-item block-news">
					<h2 class="main-item-head">
						<a href="https://nhacchuongviet.com/news/">Tin tức liên quan</a>
					</h2>
					<div class="main-item-content block-content-flex">
						<div class="news-item bsize fleft">
							<a class="news-item-thumb thumb-cover fleft" href="https://nhacchuongviet.com/news/huong-dan-cach-cai-nhac-chuong-messenger-don-gian-tren-dien-thoai/">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/08/Huong-DanCach-Cai-Nhac-Chuong-Messenger-Don-Gian-Tren-Dien-Thoai.webp" alt="Hướng Dẫn Cách Cài Nhạc Chuông Messenger Đơn Giản Trên Điện Thoại">
							</a>
							<div class="news-item-info">
								<p class="news-item-title">
									<a href="https://nhacchuongviet.com/news/huong-dan-cach-cai-nhac-chuong-messenger-don-gian-tren-dien-thoai/">
										Hướng Dẫn Cách Cài Nhạc Chuông Messenger Đơn Giản Trên Điện Thoại </a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-user-alt"></i>adminH</span>
										<a href="https://nhacchuongviet.com/news/huong-dan-cach-cai-nhac-chuong-messenger-don-gian-tren-dien-thoai/"><i class="far fa-angle-double-right"></i>Xem thêm</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="news-item bsize fleft">
							<a class="news-item-thumb thumb-cover fleft" href="https://nhacchuongviet.com/news/huong-dan-cach-lay-nhac-tiktok-lam-nhac-chuong-don-gian-va-nhanh-chong/">
								<img src="https://nhacchuongviet.com/wp-content/uploads/2024/08/cach-lay-nhac-tiktok-lam-nhac-chuong-dien-thoai-1.webp" alt="Hướng Dẫn Cách Lấy Nhạc TikTok Làm Nhạc Chuông Đơn Giản Và Nhanh Chóng">
							</a>
							<div class="news-item-info">
								<p class="news-item-title">
									<a href="https://nhacchuongviet.com/news/huong-dan-cach-lay-nhac-tiktok-lam-nhac-chuong-don-gian-va-nhanh-chong/">
										Hướng Dẫn Cách Lấy Nhạc TikTok Làm Nhạc Chuông Đơn Giản Và Nhanh Chóng </a>
								</p>
								<div class="post-file-item-meta">
									<p>
										<span><i class="fas fa-user-alt"></i>adminH</span>
										<a href="https://nhacchuongviet.com/news/huong-dan-cach-lay-nhac-tiktok-lam-nhac-chuong-don-gian-va-nhanh-chong/"><i class="far fa-angle-double-right"></i>Xem thêm</a>
									</p>
								</div>
							</div>
							<div class="cboth"></div>
						</div>
						<div class="cboth"></div>
					</div>
					<p class="main-item-morelink">
						<a href="https://nhacchuongviet.com/news/">Xem thêm<i class="far fa-angle-right"></i></a>
					</p>
				</div>
			</div><!-- end .primary -->
			<aside class="sidebar bsize fright">
				<div class="sb-cat-hot sidebar-item">
					<h2 class="main-item-head">
						<span class="dnone">Thể loại nhạc chuông theo điện thoại</span>
						<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/nhac-chuong-dien-thoai-cua-ban.webp" alt="Thể loại nhạc chuông theo điện thoại">
					</h2>
					<div class="sidebar-item-content sidebar-nav">
						<ul>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/iphone-logo.webp" alt="Nhạc chuông iPhone">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông iPhone</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-samsung-chat-nhat/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/samsung-logo.webp" alt="Nhạc chuông Samsung">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Samsung</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-xiaomi/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/Xiaomi_logo.webp" alt="Nhạc chuông Xiaomi">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Xiaomi</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-oppo-hay/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/oppo-logo.webp" alt="Nhạc chuông Oppo">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Oppo</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-vivo/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/vivo-logo.webp" alt="Nhạc chuông Vivo">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Vivo</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-realme/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/realme-logo.webp" alt="Nhạc chuông Realme">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Realme</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-sony/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/sony-logo.webp" alt="Nhạc chuông Sony">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Sony</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-google-pixel/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/google-pixel-logo.webp" alt="Nhạc chuông Google Pixel">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Google Pixel</h3>
								</a>
							</li>
							<li class="sidebar-nav-item sidebar-nav-item-adv">
								<a href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/" class="white-space">
									<div class="sidebar-nav-item-thumb thumb-cover">
										<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/nokia-logo.webp" alt="Nhạc chuông Nokia">
									</div>
									<h3 class="sidebar-nav-item-title">Nhạc chuông Nokia</h3>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="sb-top-ring sidebar-item">
					<div class="sb-tab-thumb">
						<img class="sb-tab-thumb-item" src="https://nhacchuongviet.com/wp-content/uploads/2023/05/bxh-hang-tuan.webp" alt="bxh hang tuan">
					</div>
					<ul class="sb-tab-nav">
						<li data-tab="#tab-ringtones-1" data-image="https://nhacchuongviet.com/wp-content/uploads/2023/05/bxh-hang-tuan.png" data-title="bxh hang tuan" class="active">
							<h2 class="dnone">bxh hang tuan</h2>
							Theo tuần
						</li>
						<li data-tab="#tab-ringtones-2" data-image="https://nhacchuongviet.com/wp-content/uploads/2023/05/bxh-hang-thang.png" data-title="bxh hang thang" class="">
							<h2 class="dnone">bxh hang thang</h2>
							Theo tháng
						</li>
						<div class="cboth"></div>
					</ul>
					<div class="sidebar-item-content">
						<div id="tab-ringtones-1" class="sb-tab-item">
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/hoa-giai-bang-nuoc-mat-cao-thai-son/">
									1 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/hoa-giai-bang-nuoc-mat-cao-thai-son/">HÓA GIẢI BẰNG NƯỚC MẮT – CAO THÁI SƠN</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>297 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/apt-iphone/">
									2 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/apt-iphone/">APT. (iPhone)</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>226 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/cung-ten-tinh-yeu-phap-kieu/">
									3 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/cung-ten-tinh-yeu-phap-kieu/">CUNG TÊN TÌNH YÊU – PHÁP KIỀU</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>168 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/mien-mong-mi-remake-amee-tlinh/">
									4 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/mien-mong-mi-remake-amee-tlinh/">Miền Mộng Mị (remake) – AMEE, tlinh</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>155 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/dont-wanna-say-goodbye-ai-phuong/">
									5 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/dont-wanna-say-goodbye-ai-phuong/">DON’T WANNA SAY GOODBYE – ÁI PHƯƠNG</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>148 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/beo-dat-may-troi-toc-tien/">
									6 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/beo-dat-may-troi-toc-tien/">Bèo Dạt Mây Trôi – Tóc Tiên</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>138 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/bai-ca-dat-phuong-nam-toc-tien/">
									7 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/bai-ca-dat-phuong-nam-toc-tien/">BÀI CA ĐẤT PHƯƠNG NAM – TÓC TIÊN</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>137 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/sau-lung-bo-jun-pham/">
									8 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/sau-lung-bo-jun-pham/">Sau Lưng Bố – Jun Phạm</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>110 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/em-trong-mat-toi-toc-tien/">
									9 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/em-trong-mat-toi-toc-tien/">Em Trong Mắt Tôi – Tóc Tiên</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>84 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/shh-chi-ta-biet-thoi-ngoc-phuoc/">
									10 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/shh-chi-ta-biet-thoi-ngoc-phuoc/">SHH! CHỈ TA BIẾT THÔI – NGỌC PHƯỚC</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>47 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="cboth"></div>
						</div>
						<div id="tab-ringtones-2" class="sb-tab-item" style="display: none;">
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-remix-doc-nhat/noi-vuc-noi-troi-remix-le-bao-binh-ft-team-chau-phi-hay-nhat/">
									1 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-remix-doc-nhat/noi-vuc-noi-troi-remix-le-bao-binh-ft-team-chau-phi-hay-nhat/">Nơi Vực Nơi Trời Remix – Lê Bảo Bình ft Team Châu Phi</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>1242 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/enthral-remix/">
									2 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/enthral-remix/">Enthral Remix</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>893 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-che-hai-huoc-hay/hat-di-em-hat-to-len-nhac-che-hot-tiktok/">
									3 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-che-hai-huoc-hay/hat-di-em-hat-to-len-nhac-che-hot-tiktok/">Hát Đi Em, Hát To Lên (Nhạc Chế Hot TikTok)</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>871 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-bao-thuc-cuc-hay/dong-ho-bao-thuc-dien-tu/">
									4 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-bao-thuc-cuc-hay/dong-ho-bao-thuc-dien-tu/">Đồng Hồ Báo Thức Điện Tử</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>632 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/hoa-bat-tu-diep-khuc-truong-the-vinh/">
									5 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/hoa-bat-tu-diep-khuc-truong-the-vinh/">Hoa Bất Tử (Điệp Khúc) – Trương Thế Vinh</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>621 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/nokia-picobello-bv/">
									6 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nokia-chat-nhat/nokia-picobello-bv/">Nokia Picobello BV</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>602 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/tinh-dau-qua-chen-erik-cover/">
									7 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/tinh-dau-qua-chen-erik-cover/">Tình Đầu Quá Chén – ERIK Cover</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>563 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/quang-hung-masterd-dung-vi-anh-ma-khoc/">
									8 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-nhac-tre-2024/quang-hung-masterd-dung-vi-anh-ma-khoc/">QUANG HÙNG MASTERD – ĐỪNG VÌ ANH MÀ KHÓC&nbsp;</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>539 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/lucky-girl-syndrome-iphone/">
									9 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/lucky-girl-syndrome-iphone/">Lucky Girl Syndrome (iPhone)</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>538 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="post-file-item bsize fleft block-item-flex">
								<a class="post-file-item-number fleft" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/iphone-16-promax-2024/">
									10 </a>
								<div class="post-file-item-left fright bsize">
									<p class="post-file-item-title">
										<a class="white-space" href="https://nhacchuongviet.com/nhac-chuong-iphone-moi-nhat/iphone-16-promax-2024/">iPhone 16 Promax (2024)</a>
									</p>
									<div class="post-file-item-meta">
										<p>
											<span><i class="fas fa-headphones"></i>524 lượt nghe</span>
										</p>
									</div>
								</div>
								<div class="cboth"></div>
							</div>
							<div class="cboth"></div>
						</div>
					</div>
				</div>
				<div class="sidebar-item">
					<h2 class="main-item-head">
						<span class="dnone">Top nhạc chuông hay nhất</span>
						<img src="https://nhacchuongviet.com/wp-content/uploads/2023/05/tu-khoa-pho-bien.webp" alt="Top nhạc chuông hay nhất">
					</h2>
					<div class="sidebar-item-content sidebar-nav-tag block-content-flex">
						<ul>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/">tải nhạc chuông miễn phí</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/">nhạc chuông điện thoại</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/">nhạc chuông hay</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-iphone-hay/">tải nhạc chuông iphone</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-dj-nonstop/">nhạc chuông nonstop hay nhất</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-bao-thuc-hay/">nhạc chuông báo thức</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-tiktok-hay/">tải nhạc chuông tik tok</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-tin-nhan-hay/">nhạc chuông tin nhắn miễn phí</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-tru-tinh/">tải nhạc chuông trữ tình</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-rap-hay/">nhạc chuông rap hay</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-thieu-nhi/">nhạc chuông thiếu nhi</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-kpop-hay/">nhạc chuông hàn quốc</a></li>
							<li class="sidebar-tag-item fleft"><a href="https://nhacchuongviet.com/nhac-chuong-che-hai-huoc/">nhạc chuông chế hài hước</a></li>
							<div class="cboth"></div>
						</ul>
					</div>
				</div>
				<div class="sb-home-news sidebar-item"></div>
			</aside>
			<div class="cboth"></div>
		</div><!-- end .main-wrap -->
	</div><!-- end .container -->
</div>
<!-- Modal structure -->
<div id="myModal" class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<h2>Pobierz</h2>
		<div class="modal-body text-center">
			<br /><strong>---ADS---</strong>
			<div id="wait-for" class="mt-4"></div>
			<div class="download-box mt-4 d-none">
				<a class="buton-download mp3 file-music" href="">
					<i class="fas fa-download"></i>MP3
				</a>
				<a class="buton-download ml-2 mp4 file-music" href="">
					<i class="fas fa-download"></i>M4R
				</a>
				<a class="buton-download ml-2 file-zip" style="color: #fff" ;>
					<i class="fas fa-download"></i>ZIP
				</a>
				<?php
				// Lấy ID của file đính kèm từ post
				$attachment_id = get_post_meta(get_the_ID(), 'file', true);

				// Lấy đường dẫn của file đính kèm
				$file_url_full = wp_get_attachment_url($attachment_id);

				// Loại bỏ phần "http" từ đường dẫn đầy đủ
				$file_url = str_replace('https://tonodellamada.gratis', '', $file_url_full);

				?>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
				<script>
					document.querySelector('.buton-download.file-zip').addEventListener('click', function() {
						var zip = new JSZip();
						var urls = JSON.parse('<?php echo json_encode($url_array); ?>');
						var promises = [];
						urls.forEach(function(url) {
							var filename = url.substring(url.lastIndexOf('/') + 1);
							var promise = fetch(url)
								.then(response => response.blob())
								.then(blob => zip.file(filename, blob));
							promises.push(promise);
						});
						Promise.all(promises).then(function() {
							zip.generateAsync({
									type: "blob"
								})
								.then(function(content) {
									saveAs(content, "<?php echo strtolower(str_replace(' ', '_', get_the_title())); ?>");
									<?php
									$postId = get_the_ID();
									$downloadCount = (int) get_field('download_count', $postId);
									$downloadCount++;
									?>
								});

						});
					});
				</script>
			</div>
		</div>
	</div>
</div>

<script src="./js/plyr.min.js"></script>

<script>
	const player = new Plyr('#p1307', {
		settings: [],
	});
	var audioElements = document.getElementsByTagName("audio");
	var allElements = document.getElementsByTagName("*");
	var currentPlayers = [];
	for (var i = 0; i < allElements.length; i++) {
		var elementId = allElements[i].id;
		if (elementId.includes("music")) {
			const player = new Plyr(`#${elementId}`, {
				settings: [],
			});
			currentPlayers.push(player); // Thêm trình phát mới vào mảng
		}
	}

	// Hàm để tạm dừng tất cả các trình phát hiện tại
	async function pauseAllPlayers() {
		currentPlayers.forEach(player => {
			player.pause(); // Tạm dừng trình phát
		});
	}
	var audioButtons = document.querySelectorAll(".box-player");
	audioButtons.forEach(function(button) {
		button.addEventListener('click', async function(event) {
			event.preventDefault();
			var audio = button.querySelector("audio");
			if (audio.currentTime > 0 && audio.paused) {
				// audio.pause();
			} else {
				await pauseAllPlayers();
				audio.play();
			}
		});
	});
	// Lấy tất cả các phần tử <a> có class "buton-download"
	var downloadButtons = document.querySelectorAll('a.buton-download.file');
	var downloadButtonzip = document.querySelector('a.buton-download.zip.download-button')
	// Lặp qua từng phần tử và thêm sự kiện click
	// 
	downloadButtons.forEach(function(button) {
		button.addEventListener('click', function(event) {
			event.preventDefault();
			var urlMusicMp3 = button.getAttribute('url-music-mp3');
			var urlMusicMp4 = button.getAttribute('url-music-mp4');
			var mp3Button = document.querySelector('a.buton-download.mp3');
			var mp4Button = document.querySelector('a.buton-download.mp4');
			var zipButton = document.querySelector('a.buton-download.file-zip')
			mp3Button.removeAttribute('hidden', false)
			mp4Button.removeAttribute('hidden', false)
			mp3Button.setAttribute('href', urlMusicMp3);
			mp4Button.setAttribute('href', urlMusicMp4);
			zipButton.setAttribute('hidden', true)
		});
	});
	downloadButtonzip.addEventListener('click', function(event) {
		var mp3Button = document.querySelector('a.buton-download.mp3');
		var mp4Button = document.querySelector('a.buton-download.mp4');
		var zipButton = document.querySelector('a.buton-download.file-zip')
		mp3Button.setAttribute('hidden', true)
		mp4Button.setAttribute('hidden', true)
		zipButton.removeAttribute('hidden')
	});
</script>
<?php
get_footer();
