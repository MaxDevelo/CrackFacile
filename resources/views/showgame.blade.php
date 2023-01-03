@extends('layouts.app')

@section('title','Télécharger ' . $game->title .' gratuitement PC - CrackFacile')
@section('titlecontent','CrackFacile | Télécharge tes jeux gratuitement')
@section('description','Bienvenue sur CrackFacile où tu peux télécharger tes jeux et logiciels gratuitement et de manière sécurisé. Pense à nous rejoindre sur notre discord pour nous soutenir.')
@section('file_css', '/css/style-games.css')

@section('main')
@parent
</br></br></br></br></br>
<section class="info-game-container">
	<div class="info-game-title">
		<h2 class="TitleGame">
			{{$game->title}}
		</h2>
		<h4 class="citation">
			Ici, tu peux télécharger le jeux gratuitement
		</h4>
		<h6>
			Publié : {{$game->published_at}}

		</h6>

	</div>

	<div class="info-game">
		<h3>Detail du jeux :</h3>
		<p class="info_intro">
			<li><b>Taille :</b> {{$game->size_file}} </i></br></br>
			<li><b>Titre : </b>{{$game->title}}</i></br></br>
			<li><b>Genre :</b>{{$game->category}}</i></br></br>
		</p>
		<a class="buy-game" target="_blank" href="{{$game->url_buy}}">
			Soutenez les développeurs
		</a>
	</div>
	<div class="info-game-Image">
		<img class="img_minia" src="{{$game->image_miniature}}">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="{{$game->imageone}}" style="width: 100%">
			</div>
			<div class="mySlides fade">
				<img src="{{$game->imagetwo}}" style="width: 100%">
			</div>
		</div>
		<br>
		<div style="text-align: center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
	</div>


	<!-- <div class="info-game-Image">
		<img src="{{$game->imageone}}">
		<div class="bar-separe"></div>
		<img src="{{$game->imagetwo}}">
	</div> -->
	<div class="info-game">
		<h2 class="TitreDesc">
			Aperçu du Jeux
		</h2>
		<pre class="Description-game">{{$game->content_text}}
		</pre>
	</div>
	<div class="info-Trailer">
		<h2 class="info-trailer">
			<i class="fa fa-youtube" aria-hidden="true"></i> Bande-annonce / Aperçu
		</h2>
		</br>
		<div class="demovideo">

			<iframe width="560" height="315" src="{{$game->url_video_trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<div style="text-align:left; font-size:20px;" class="info-installation">
		<h3>Comment installer {{$game->title}}</h3>
		<li>
			Téléchargez le jeu à l'aide d'un programme Torrent ou d'un programme Direct
		</li>
		<li>
			Extrayez le jeu à votre emplacement préféré avec WinRar ou 7-Zip
		</li>
		<li>
			Attendez la fin de l'extraction
		</li>
		<li>
			Pas besoin d'installer le jeu, commencez simplement avec le LANCEUR de le jeu en tant qu'administrateur
		</li>
		<li>
			Jouez !
		</li>
	</div>
	</br></br>

	<div class="info-installation">
		<a class="installation-game" target="_blank" href="{{$game->url_download}}">
			Télécharger
		</a>
	</div>
	<div class="info-config">
		<h2 class="info-title-config">
			<i class="fa fa-laptop" aria-hidden="true"></i>Config requise
		</h2>
		<pre class="desc-config">{{$game->config_required}}
		</pre>

	</div>
</section>

</div>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		setTimeout(showSlides, 2000);
	}
</script>

@endsection