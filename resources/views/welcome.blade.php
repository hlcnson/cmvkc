<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" /> --}}
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="css/colors.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>CMVKC</title>

</head>

<body class="stretched sticky-footer">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo.png" data-sticky-logo="images/logotext.png" data-mobile-logo="images/logotext.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo.png" data-sticky-logo="images/logo.png" data-mobile-logo="images/logotext.png"><img src="images/logotext.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="#"><div>Trang chủ</div></a></li>
							<li><a href="#"><div>Tin tức</div></a></li>
							<li><a href="#"><div>Thời khóa biểu</div></a></li>
							<li><a href="{{ route('selecting') }}"><div>Tuyển sinh</div></a></li>
						</ul>

						<!-- Top Cart
						============================================= -->
						{{-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div> --}}
						<!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						{{-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> --}}
						<!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax" style="background: url('images/slider/swiper/1.jpg') center center; background-size: cover" data-height-xl="600" data-height-lg="500" data-height-md="400" data-height-sm="300" data-height-xs="250">
			<div class="slider-parallax-inner">

				<div class="container clearfix">
					<div class="vertical-middle dark center">
						<h1 class="display-4 font-weight-bold">HỌC NGHỀ - LẬP NGHIỆP</h1>
						<p class="d-none d-sm-block subtitle" data-animate="fadeInUp" data-delay="400">Lựa chọn học nghề là chọn một tương lai để sống và để phát triển sự nghiệp.<br/> Bạn sẽ chọn nghề gì cho tương lai và sự nghiệp của mình?</p>
						

						<a href="{{ route('selecting') }}" class="button button-border button-light button-rounded button-reveal tright button-large topmargin d-none d-md-inline-block"><i class="icon-angle-right"></i><span>Tìm hiểu ngay</span></a>

					</div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap notoppadding nobottompadding">
				<a href="{{ route('selecting') }}" class="button button-full center tright">
					<div class="container clearfix">
						Tuyển sinh đào tạo nghề chính qui năm 2018 | <strong>Xem ngay</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>
				<div class="row clearfix common-height">

					<div class="col-lg-6 center col-padding" style="background: url('images/learning.png') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>

					<div class="col-lg-6 center col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block">
								<h2>NƠI BẠN BẮT ĐẦU <span>SỰ NGHIỆP</span></h2>
								<span>Trường Cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau</span>
							</div>

							<p><strong>Trường Cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau</strong> là một trong năm trường dạy nghề trọng điểm cấp quốc gia được Chính phủ Việt Nam chấp thuận đầu tư xây dựng từ năm 2005 bằng nguồn vốn ODA của Chính phủ Hàn Quốc. Nhà trường chính thức thực hiện các hoạt động đào tạo từ năm 2015 trên cơ sở kế thừa các thành quả của Trường Trung cấp nghề tỉnh Cà Mau.</p>
						</div>
					</div>

				</div>
				
				
				{{-- <div class="section notopmargin nobottommargin parallax">
					<div class="container clearfix">
						<div class="heading-block center">
							<h2>PHƯƠNG CHÂM ĐÀO TẠO</h2>
							<span>Cô đọng kiến thức, chú trọng kỹ năng</span>
						</div>
						<p class="divcenter center" style="max-width: 800px;">Chương trình đào tạo được thiết kế với nội dung kiến thức cô đọng, tập trung phần lớn thời lượng cho giảng dạy thực hành và phát triển kỹ năng nghề cũng như đạo đức, tác phong nghề nghiệp cho học sinh, sinh viên. Vì vậy, trong thời gian học tập tại trường học sinh, sinh viên có đủ thời gian để rèn luyện kỹ năng vững vàng, tạo tiền đề vững chắc cho nghề nghiệp sau khi ra trường.</p>
						<div class="clear"></div>
					</div>
				</div> --}}
				<div class="section parallax dark notopmargin nobottommargin" style="background-image: url('images/parallax/2.jpg'); background-size: cover; padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
					<div class="heading-block center">
						<h2>PHƯƠNG CHÂM ĐÀO TẠO</h2>
						<span>Cô đọng kiến thức, chú trọng kỹ năng</span>
					</div>
					<p class="divcenter center" style="max-width: 800px;">Chương trình đào tạo được thiết kế với nội dung kiến thức cô đọng, tập trung phần lớn thời lượng cho giảng dạy thực hành và phát triển kỹ năng nghề cũng như đạo đức, tác phong nghề nghiệp cho học sinh, sinh viên. Vì vậy, trong thời gian học tập tại trường học sinh, sinh viên có đủ thời gian để rèn luyện kỹ năng vững vàng, tạo tiền đề vững chắc cho nghề nghiệp sau khi ra trường.</p>
						<div class="clear"></div>
				</div>

				<div class="section notopmargin nobottommargin">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>NĂNG LỰC DẠY NGHỀ</h2>
							<span>Dự án xây dựng Trường cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau được thực hiện trên cơ sở tư vấn của các chuyên gia Hàn Quốc</span>
						</div>

						<div class="col_full">

							<img data-animate="fadeIn" class="aligncenter" src="images/student.png" alt="">

						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><img src="images/icons/teacher.png" alt="Responsive Layout"></a>
								</div>
								<h3>Giáo viên</h3>
								<p>Đội ngũ giáo viên có nhiều kinh nghiệm trong đào tạo nghề, được tập huấn bài bản qua các khóa đào tạo trong nước và tại Hàn Quốc.</p>
							</div>
						</div>
	
						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><img src="images/icons/device.png" alt="Retina Graphics"></a>
								</div>
								<h3>Thiết bị</h3>
								<p>Thiết bị, nhà xưởng thực hành, thư viện, chương trình, giáo trình đào tạo được đầu tư xây dựng đạt tiêu chuẩn với sự tư vấn của các chuyên gia Hàn Quốc.</p>
							</div>
						</div>
	
						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><img src="images/icons/envi.png" alt="Powerful Performance"></a>
								</div>
								<h3>MÔI TRƯỜNG</h3>
								<p>Học sinh, sinh viên được tạo mọi điều kiện thuận lợi nhất để học tập, vui chơi. Thường xuyên có các phong trào đoàn thể mang tính cộng đồng cao.</p>
							</div>
						</div>
	
						<div class="clear"></div>

					</div>

				</div>

				<div class="section parallax notopmargin nobottommargin dark" style="background: url('images/parallax/9.jpg') center center; background-size:cover; padding: 100px 0;" data-stellar-background-ratio="0.3">
					<div class="container clearfix">

					<div class="container clearfix">

						<div id="section-testimonials" class="heading-block title-center page-section">
							<h2>CẢM NHẬN CỦA SINH VIÊN</h2>
							<span>Cựu học sinh, sinh viên cảm nhận về Trường Cao đẳng nghề Việt Nam - Hàn Quốc Cà Mau</span>
						</div>

						<ul class="testimonials-grid clearfix">
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/di.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Trường Cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau là trường đào tạo nghề tốt nhất tại Cà Mau với hệ thống thiết bị thực hành hiện đại, phong phú về chủng loại để học sinh, sinh viên thực hành. Đội ngũ giáo viên tâm huyết, giỏi lý thuyết, có tay nghề cao và chỉ dạy tận tình. Khi các bạn giỏi nghề thì không bao giờ sợ thất nghiệp
										</p>
										<div class="testi-meta">
											Hồ Văn Dị
											<span>Nhân viên Xây dựng – Bảo trì, Công ty CP Thế giới di động</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/nguyen.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Đối với em, Trường Cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau có cơ sở vật chất, thiết bị thực hành phục vụ cho giảng dạy rất tốt và luôn được cập nhật phù hợp với thời đại. Giáo viên tận tâm truyền đạt kiến thức và nhà trường cũng có nhiều phong trào sôi nổi cho học sinh, sinh viên. Sau khi tốt nghiệp nghề Điện công nghiệp năm 2013, mình đã có việc làm với mức lương ổn định, phù hợp với chuyên môn.</p>
										<div class="testi-meta">
											Phan Văn Nguyên
											<span>Tổ trưởng Bộ phận Sản xuất, kiêm Chủ tịch công đoàn Công ty TA HSING Electric wire and cable Việt Nam</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/teo.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Trường Cao đẳng nghề Việt Nam – Hàn Quốc Cà Mau là trường dạy nghề mình yêu thích. Nhà trường có cơ sở vật chất hiện đại, đáp ứng tốt nhu cầu học tập của học sinh, sinh viên. Giáo viên tận tâm và có trình độ cao. Lời khuyên cho các bạn đi sau: Đã học nghề thì phải học hành nghiêm chỉnh, yêu nghề và tâm huyết với nghề.</p>
										<div class="testi-meta">
											Thái Văn Tèo
											<span>Ca phó Tổ Cơ điện – Chi nhánh phân xưởng bóc nỏn tôm Hòa Thành, Công ty CP Chế biến và Dịch vụ thủy sản Cà Mau</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/trang.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Nhà trường có môi trường học tập rất tốt, cở sở vật chất và chất lượng đào tạo rất tốt, là một nơi vừa học vừa thực hành sát với thực tế, với những tiết học thực hành có chất lượng. Thầy cô rất nhiệt tình và thân thiện với học sinh, sinh viên.</p>
										<div class="testi-meta">
											Nguyễn Quốc Trạng
											<span>Nhân viên Công ty TNHH Phương Nam</span>
										</div>
									</div>
								</div>
							</li>
						</ul>

					</div>

				</div>

				
			</div>

		</section><!-- #content end -->

		<footer id="footer">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					{{-- <div class="col_half"> --}}
						{{-- <img src="images/logo.png" alt="Footer Logo" class="footer-logo"> --}}
						{{-- <div>
							<strong>TRƯỜNG CAO ĐẲNG NGHỀ VIỆT NAM - HÀN QUỐC CÀ MAU</strong>	
							<div>Địa chỉ: 
								<address>
									Số 08 Mậu Thân, khóm 6, phường 9, thành phố Cà Mau, tỉnh Cà Mau <br/>
									Điện thoại: 0290 3 592 101
								</address>
							</div>
						</div> --}}
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: cover; font-weight: 400;">
							TRƯỜNG CAO ĐẲNG NGHỀ VIỆT NAM - HÀN QUỐC CÀ MAU
							<address>
								<strong>Địa chỉ:</strong><br>
								Số 08, Mậu Thân, khóm 6, phường 9, thành phố Cà Mau, tỉnh Cà Mau
							</address>
							<abbr title="Số điện thoại"><strong>Điện thoại:</strong></abbr> 02903 592 101<br>
							{{-- <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> --}}
							<abbr title="Website"><strong>Website:</strong></abbr> www.camauvkc.edu.vn
						</div>
					{{-- </div> --}}

					{{-- <div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Trang chủ</a>/<a href="#">Tin tức</a>/<a href="#">Thời khóa biểu</a>/<a href="#">Tuyển sinh</a>
						</div>
						{{-- <div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div> --}}
					{{-- </div> --}}

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>






{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
