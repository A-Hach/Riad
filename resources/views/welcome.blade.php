<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Riad</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<body class="loading">

	<!-- add karla font -->

	<header>
		<div class="inner">
			<div class="logo"></div>
			<div class="burger"></div>
			<nav>
				<a class="active" href="#">Accueil</a>
				<a href="#">Our Rooms</a>
				<a href="#">Apropos</a>
				
			</nav>
			<a href="#" class="donate-link">Reserver</a>
		</div>
	</header>

	<main>
		<div id="slider">

			<div class="slider-inner">
				<div id="slider-content">
					<div class="meta">AVAILABLE</div>
					<h2 id="slide-title">Riad<br>Marrakech</h2>
					<span data-slide-title="0">Riad  <br>Marrakech</span>
					
				</div>
			</div>

			
			

	        <img src="{{ asset('img/1.jpg')}}" />
			<img src="{{ asset('img/2.jpg')}}" />
			<img src="{{ asset('img/3.jpg')}}" />
			<img src="{{ asset('img/4.jpg')}}" />
			<img src="{{ asset('img/5.jpg')}}" />
			<img src="{{ asset('img/6.jpg')}}" />
			<img src="{{ asset('img/7.jpg')}}" />
			<img src="{{ asset('img/8.jpg')}}" />
			<img src="{{ asset('img/9.jpg')}}" />
			<img src="{{ asset('img/10.jpg')}}" />
			<img src="{{ asset('img/11.jpg')}}" />
			<img src="{{ asset('img/12.jpg')}}" />
			<img src="{{ asset('img/13.jpg')}}" />
			<img src="{{ asset('img/14.jpg')}}" />
			

			<div id="pagination">
				<button class="active" data-slide="0"></button>
				<button data-slide="1"></button>
				<button data-slide="2"></button>
				<button data-slide="3"></button>
				<button data-slide="4"></button>
				<button data-slide="5"></button>
				<button data-slide="6"></button>
				<button data-slide="7"></button>
				<button data-slide="8"></button>
				<button data-slide="9"></button>
				<button data-slide="10"></button>
				<button data-slide="11"></button>
				<button data-slide="12"></button>
				<button data-slide="13"></button>
				
			</div>

		</div>
	</main>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40525870-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40525870-5');
</script>

	</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js'></script><script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>
