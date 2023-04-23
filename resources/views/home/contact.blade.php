<!DOCTYPE html>
<html lang="en">

<head>
	<base href="/public">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="home/css/bootstrap.custom.min.css" rel="stylesheet">
	<link href="home/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="home/css/listing.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="home/css/custom.css" rel="stylesheet">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<style>
		textarea {
			height: 150px;

			margin-left: 10px !important;
		}
	</style>
</head>

<body>
	@include('sweetalert::alert')
	<div id="page" class="theia-exception">

		@include('home.header')

		<main>
			
			<!-- /top_banner -->
			<div id="stick_here"></div>
			<!-- @include('home.sort') -->
			<!-- /toolbox -->
			
			<!-- /col -->


			<div class="container margin_60">
				<div class="main_title">
					<h2>Contact Allaia</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem, vero adipisci quam voluptatibus pariatur suscipit beatae error!.</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="box_contacts">
							<i class="ti-support"></i>
							<h2>Allaia Help Center</h2>
							<a href="#0">+212648268596</a> - <a href="#0">alaaeloula@gmail.com</a>
							<small>MON to FRI 9am-6pm SAT 9am-2pm</small>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box_contacts">
							<i class="ti-map-alt"></i>
							<h2>Allaia Showroom</h2>
							<div>QU ANAS, Safi - 46000 MAR</div>
							<small>MON to FRI 9am-6pm SAT 9am-2pm</small>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box_contacts">
							<i class="ti-package"></i>
							<h2>Allaia Orders</h2>
							<a href="#0">+212648268596</a> - <a href="#0">alaaeloula@gmail.com</a>
							<small>MON to FRI 9am-6pm SAT 9am-2pm</small>
						</div>
					</div>
				</div>
				<!-- /row -->				
			</div>
			<!-- /container -->
		<div class="bg_white">
			<div class="container margin_60_35">
				<h4 class="pb-3">Drop Us a Line</h4>
				<div class="row">
					<div class="col-lg-4 col-md-6 add_bottom_25">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Name *">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" placeholder="Email *">
						</div>
						<div class="form-group">
							<textarea class="form-control" style="height: 150px;" placeholder="Message *"></textarea>
						</div>
						<div class="form-group">
							<input class="btn_1 full-width" type="submit" value="Submit">
						</div>
					</div>
					<div class="col-lg-8 col-md-6 add_bottom_25">
					<iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" style="border: 0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>


			<!-- /col -->
			<!-- /container -->










			<!-- /row -->
			</div>
	</main>
	<!-- /main -->


	@include('home.footer')
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div><!-- Back to top button -->





	<script>
		function reply(caller) {

			document.getElementById('commentid').value = $(caller).attr('data-Commentid')
			$('.replyDiv').insertAfter($(caller))
			console.log($('.replyDiv'))
			$('.replyDiv').show()
		}

		function reply_close(caller) {

			$('.replyDiv').hide()
		}
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			var scrollpos = localStorage.getItem('scrollpos');
			if (scrollpos) window.scrollTo(0, scrollpos);
		});

		window.onbeforeunload = function(e) {
			localStorage.setItem('scrollpos', window.scrollY);
		};
	</script>

	<!-- COMMON SCRIPTS -->
	<script src="home/js/common_scripts.min.js"></script>
	<script src="home/js/main.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="home/js/sticky_sidebar.min.js"></script>
	<script src="home/js/specific_listing.js"></script>


</body>

</html>