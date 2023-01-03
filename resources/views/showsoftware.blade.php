@extends('layouts.app')

@section('title','Télécharger ' . $software->title .' gratuitement PC - CrackFacile')
@section('titlecontent','CrackFacile | Télécharge tes logiciels gratuitement')
@section('description','Bienvenue sur CrackFacile où tu peux télécharger tes logiciels et logiciels gratuitement et de manière sécurisé. Pense à nous rejoindre sur notre discord pour nous soutenir.')


@section('main')
@parent

<section class="info-game-container">
	<div class="info-game-title">
		<h2 class="TitleGame">
			$software->title
		</h2>
		<h4 class="citation">
			Ici, tu peux télécharger le jeux gratuitement
		</h4>
		<h6>
			Publié : {{$software->published_at}}

		</h6>

	</div>

	<div class="info-game-Inf">
		<h3>Detail du jeux :</h3>
		<p style="font-size:20px;text-align:left">
			<li><b>Taille :</b> $software->size_file </i></br></br>
			<li><b>Titre : </b>$software->title </i></br></br>
			<li><b>Genre :</b> $software->category</i></br></br>
		</p>
		<a class="buy-game" target="_blank" href="{{$software->url_buy}}">
			Soutenez les développeurs
		</a>
	</div>

	<div class="info-software-Image">
		<img src="{{$software->imageone}}">
		<div class="bar-separe"></div>
		<img src="{{$software->imagetwo}}">
	</div>
	<div class="info-game">
		<h2 class="TitreDesc">
			Aperçu du Jeux
		</h2>
		<p class="Description-game">
			$software->description
		</p>
	</div>
	<div class="info-Trailer">
		<h2 class="info-trailer">
			<i class="fa fa-youtube" aria-hidden="true"></i> Bande-annonce / Aperçu
		</h2>

		<div class="demovideo">

			<iframe width="560" height="315" src="{{$software->url_video_trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<div style="text-align:left; font-size:20px;" class="info-installation">
		<h3>Comment installer $software->title</h3>
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
			Pas besoin d'installer le logiciel, commencez simplement avec le LANCEUR de le jeu en tant qu'administrateur
		</li>
		<li>
			Jouez !
		</li>
	</div>
	</br></br>

	<div class="info-installation">
		<a class="installation-game" target="_blank" href="{{$software->url_download}}">
			Télécharger
		</a>
	</div>
	<div class="info-config">
		<h2 class="info-title-config">
			<i class="fa fa-laptop" aria-hidden="true"></i>Config requise
		</h2>
		<p class="desc-config">
			$software->config_required
		</p>

	</div>
</section>

</div>

@endsection