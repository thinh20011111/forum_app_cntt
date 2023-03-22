<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{{asset('/')}}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>@yield('title')</title>
	<link rel="icon" href="front/img/logo_fita.png" type="image/png" sizes="16x16">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="front/css/main.min.css" type="text/css">
	<link rel="stylesheet" href="front/css/style.css" type="text/css">
	<link rel="stylesheet" href="front/css/color.css" type="text/css">
	<link rel="stylesheet" href="front/css/responsive.css" type="text/css">
	<link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://kit.fontawesome.com/47f1aaf7ca.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/1dvwoen7mpwcn3jcbkd98qo9kas9hy7rlkt8ul00jera0bge/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
	<div class="theme-layout">
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="./" title=""><img src="front/img/logo_fita.png" alt="" style="max-width: 50px;"></a>
				</span>
			</div>
			<div class="mh-head second">
				<form class="mh-form">
					<input placeholder="search" />
					<a href="#/" class="fa fa-search"></a>
				</form>
			</div>
			<nav id="menu" class="res-menu">
				<ul>
					<li>
						<a href="./create_post">Đăng bài</a>
					</li>
					<li>
						<a href="./what_news">Có gì mới?</a>
					</li>
					<li>
						<a href="./" title="">Story</a>
					</li>
					<li><span>Thành viên</span>
						<ul>
							<li><a href="./" title="">Đang truy cập</a></li>
							<li><a href="./" title="">Tìm kiếm status cá nhân</a></li>
						</ul>
					</li>
					<li>
						<a href="">Trang cá nhân</a>
					</li>
					<li>
						<a href="">Đang theo dõi</a>
					</li>
					<li>
						<a href="">Hình ảnh</a>
					</li>
					<li>
						<a href="">Tin nhắn</a>
					</li>
					<li>
						<a href="">Thông báo</a>
					</li>

					@if(!Auth::check())
					<li>
						<a href="./account/login" title="">Đăng nhập</a>
					</li>
					<li>
						<a href="./account/register" title="">Đăng ký</a>
					</li>
					@else
					<li class="extend-nav-menu">
						<a href="./account/logout"></i>Đăng xuất</a>
					</li>
					@endif
				</ul>
			</nav>
		</div><!-- responsive header -->

		<div class="topbar sticky-top">
			<div class="logo">
				<a title="Trang chủ" href="./"><img src="front/img/logo_fita.png" alt="" width="48px"></a>
			</div>

			<div class="top-area">
				<ul class="main-menu">
					<li>
						<a href="./create_post" title="">Đăng bài</a>
					</li>
					<li>
						<a href="./what_news" title="">Có gì mới?</a>
					</li>
					<li>
						<a href="./" title="">Story</a>
					</li>
					<li class="dropdown-area">
						<a href="./" title="">Thành viên</a>
						<ul>
							<li><a href="./" title="">Đang truy cập</a></li>
							<li><a href="./" title="">Tìm kiếm status cá nhân</a></li>
						</ul>
					</li>
				</ul>

				@if(Auth::check())
				<ul class="setting-area">
					<li>
						<div class="dropdown">
							<div href="#" title="Notification" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="ti-bell"></i><span style="background-color: red; border-radius: 50%; color: white; padding: 2px; font-size: 10px;">20</span>
							</div>
							<ul class="drops-menu dropdown-menu" aria-labelledby="notificationDropdown">
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<a style="float: right;" href="notifications.html" title="" class="more-mesg">Xem thêm...</a>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<div href="#" title="Messages" id="messagesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="ti-comment"></i><span style="background-color: red; border-radius: 50%; color: white; padding: 2px; font-size: 10px;">20</span>
							</div>
							<ul class="drops-menu dropdown-menu" aria-labelledby="messagesDropdown">
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="front/img/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<a style="float: right;" href="notifications.html" title="" class="more-mesg">Xem thêm...</a>
							</ul>
						</div>
					</li>
				</ul>
				<div class="user-img">
					<img src="front/img/users/{{ Auth::user()->avatar }}" alt="">
					<span class="status f-online"></span>
					<div class="user-setting">
						<a href="#" title=""><i class="ti-user"></i>Trang cá nhân</a>
						<a href="#" title=""><i class="ti-pencil-alt"></i>Chỉnh sửa trang cá nhân</a>
						@if(Auth::check())
						<a href="./account/logout" title=""><i class="ti-power-off"></i>Đăng xuất</a>
						@endif
					</div>
				</div>
				@endif
			</div>
		</div><!-- topbar -->

		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div id="shortcuts" class="widget">
											<h4 class="widget-title">Phím tắt</h4>
											<ul class="naves">
												@if(Auth::check())
												<li>
													<i class="ti-clipboard"></i>
													<a href="./" title="">Trang chủ</a>
												</li>
												<li>
													<i class="ti-files"></i>
													<a href="fav-page.html" title="">Trang cá nhân</a>
												</li>
												<li>
													<i class="ti-user"></i>
													<a href="timeline-friends.html" title="">Đang theo dõi</a>
												</li>
												<li>
													<i class="ti-image"></i>
													<a href="timeline-photos.html" title="">Hình ảnh</a>
												</li>
												<li>
													<i class="ti-comments-smiley"></i>
													<a href="messages.html" title="">Tin nhắn</a>
												</li>
												<li>
													<i class="ti-bell"></i>
													<a href="notifications.html" title="">Thông báo</a>
												</li>
												<li>
													<i class="ti-power-off"></i>
													<a href="./account/logout" title="">Logout</a>
												</li>
												@else
												<li class="d-flex justify-content-start align-items-center">
													<i class="fa-solid fa-right-to-bracket"></i>
													<a href="./account/login" title="">Đăng nhập</a>
												</li>
												<li class="d-flex justify-content-start align-items-center">
													<i class="fa-solid fa-user-plus"></i>
													<a href="./account/register" title="">Đăng ký</a>
												</li>
												@endif
											</ul>
										</div>

										@if(Auth::check())
										<div id="your-page" class="widget">
											<h4 class="widget-title">Trang của bạn</h4>
											<div class="your-page">
												<figure>
													<a href="#" title=""><img src="front/img/users/{{ Auth::user()->avatar }}" alt="" style="width: 50px;height: 50px;object-fit: cover;"></a>
												</figure>
												<div class="page-meta">
													<a href="#" title="" class="underline">{{ Auth::user()->name }}</a>
													<span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
													<span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
														<li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane active fade show " id="link1">
															<span><i class="ti-heart"></i>884</span>
															<a href="#" title="weekly-likes">35 new likes this week</a>
															<div class="users-thumb-list">
																<a href="#" title="Anderw" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-1.jpg" alt="">
																</a>
																<a href="#" title="frank" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-2.jpg" alt="">
																</a>
																<a href="#" title="Sara" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-3.jpg" alt="">
																</a>
																<a href="#" title="Amy" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-4.jpg" alt="">
																</a>
																<a href="#" title="Ema" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-5.jpg" alt="">
																</a>
																<a href="#" title="Sophie" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-6.jpg" alt="">
																</a>
																<a href="#" title="Maria" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-7.jpg" alt="">
																</a>
															</div>
														</div>
														<div class="tab-pane fade" id="link2">
															<span><i class="ti-eye"></i>440</span>
															<a href="#" title="weekly-likes">440 new views this week</a>
															<div class="users-thumb-list">
																<a href="#" title="Anderw" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-1.jpg" alt="">
																</a>
																<a href="#" title="frank" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-2.jpg" alt="">
																</a>
																<a href="#" title="Sara" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-3.jpg" alt="">
																</a>
																<a href="#" title="Amy" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-4.jpg" alt="">
																</a>
																<a href="#" title="Ema" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-5.jpg" alt="">
																</a>
																<a href="#" title="Sophie" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-6.jpg" alt="">
																</a>
																<a href="#" title="Maria" data-toggle="tooltip">
																	<img src="front/img/resources/userlist-7.jpg" alt="">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- page like widget -->
										@endif
										
									</aside>
								</div><!-- sidebar -->

								@yield('body')
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="widget">
							<div class="foot-logo">
								<div class="logo">
									<a href="index-2.html" title=""><img src="front/img/logo.png" alt=""></a>
								</div>
								<p>
									The trio took this simple idea and built it into the world’s leading carpooling platform.
								</p>
							</div>
							<ul class="location">
								<li>
									<i class="ti-map-alt"></i>
									<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
								</li>
								<li>
									<i class="ti-mobile"></i>
									<p>+1-56-346 345</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>follow</h4>
							</div>
							<ul class="list-style">
								<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
								<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
								<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
								<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
								<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>Navigate</h4>
							</div>
							<ul class="list-style">
								<li><a href="about.html" title="">about us</a></li>
								<li><a href="contact.html" title="">contact us</a></li>
								<li><a href="terms.html" title="">terms & Conditions</a></li>
								<li><a href="#" title="">RSS syndication</a></li>
								<li><a href="sitemap.html" title="">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>useful links</h4>
							</div>
							<ul class="list-style">
								<li><a href="#" title="">leasing</a></li>
								<li><a href="#" title="">submit route</a></li>
								<li><a href="#" title="">how does it work?</a></li>
								<li><a href="#" title="">agent listings</a></li>
								<li><a href="#" title="">view All</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>download apps</h4>
							</div>
							<ul class="colla-apps">
								<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
								<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
								<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer -->
		<div class="bottombar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
						<i><img src="front/img/credit-cards.png" alt=""></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="front/js/main.min.js"></script>
	<script src="front/js/script.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	@yield('script')
</body>

</html>