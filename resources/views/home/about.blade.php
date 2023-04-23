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


			<div class="container margin_60_35 add_bottom_30">
				<div class="main_title">
					<h2>About Allaia</h2>
					<p>Euismod phasellus ac lectus fusce parturient cubilia a nisi blandit sem cras nec tempor adipiscing rcu ullamcorper ligula.</p>
				</div>
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-5">
						<div class="box_about">
							<h2>Top Products</h2>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
							<img src="img/arrow_about.png" alt="" class="arrow_1">
						</div>
					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
							<img src="img/about_1.svg" alt="" class="img-fluid" width="350" height="268">
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
							<img src="img/about_2.svg" alt="" class="img-fluid" width="350" height="268">
					</div>
					<div class="col-lg-5">
						<div class="box_about">
							<h2>Top Brands</h2>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
							<img src="img/arrow_about.png" alt="" class="arrow_2">
						</div>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center ">
					<div class="col-lg-5">
						<div class="box_about">
							<h2>+5000 products</h2>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
						</div>

					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
							<img src="img/about_3.svg" alt="" class="img-fluid" width="350" height="316">
					</div>
				</div>
				<!-- /row -->
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