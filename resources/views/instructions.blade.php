@extends('layouts.app')
@section('title','Instructions | CrackFacile')
@section('titlecontent','CrackFacile | Instructions')
@section('description','Bienvenue sur CrackFacile où tu peux télécharger tes jeux et logiciels gratuitement et de manière sécurisé. Pense à nous rejoindre sur notre discord pour nous soutenir.')
@section('main')


@parent
</br></br></br></br>
<h1 style="color:white;text-align:center;font-size:60px">Instructions (Guides)</h1>

<div class='faq'>
    <input id='faq-a' type='checkbox'>
    <label for='faq-a'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Etape 1 - Choisis le jeu que tu veux installer</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Après la sélection de ton jeu, scroll vers le bas et cliquer sur Télécharger. Cela te dirigeras vers un lien où tu dois attendre 10 secondes. Et clique sur passer l'annonce </p>
    </label>
    <input id='faq-b' type='checkbox'>
    <label for='faq-b'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Etape 2 - Télécharge le jeu</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Cela dépend du lien. Tu peux tomber sur un fichier (mediafire, mega.nz, uploaded.net, etc...). Si tu tombes sur shareurl.cc, tu as juste à choisir le site où tu veux installer</p>
    </label>
    <input id='faq-c' type='checkbox'>
    <label for='faq-c'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Etape 3 - extraire le fichier (.zip/.rar)</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Après l'installation, met ton fichier sur ton bureau et extrait le fichier. Tu auras esoin de <a href="https://www.win-rar.com/postdownload.html?&L=10">Winrar</a></p>
    </label>
    <input id='faq-d' type='checkbox'>
    <label for='faq-d'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Etape 4 - Installe le jeu</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Une fois toutes les archives décompressées, vous trouverez un fichier ISO. Vous pouvez ouvrir le fichier ISO avec un double-clic. Il y a une configuration dans le fichier ISO. Vous pouvez démarrer la configuration et installer le jeu.
            </br></br>
            <b>*Parfois, vous n'avez pas besoin d'installation et vous pouvez démarrer le jeu directement à partir d'un lanceur.</b>
        </p>
    </label>
    <input id='faq-e' type='checkbox'>
    <label for='faq-e'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Etape 5 - Bon jeu</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Après que le jeux soit installé, tu peux y jouer.</p>
    </label>
</div>

</div>
</section>
@endsection