@extends('layouts.app')
@section('title','FAQ | CrackFacile')
@section('titlecontent','CrackFacile | FAQ')
@section('description','Bienvenue sur CrackFacile où tu peux télécharger tes jeux et logiciels gratuitement et de manière sécurisé. Pense à nous rejoindre sur notre discord pour nous soutenir.')
@section('main')


@parent
</br></br></br></br>
<h1 style="color:white;text-align:center;font-size:60px">FAQ (Questions posées)</h1>

<div class='faq'>
    <input id='faq-a' type='checkbox'>
    <label for='faq-a'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Comment télécharger et jouer au jeux sur <span style="color:red">Crack</span>Facile.fr ?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Tu peux trouver le détail ici: <a href="{{route('instructions')}}">instructions</a></p>
    </label>
    <input id='faq-b' type='checkbox'>
    <label for='faq-b'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Où puis-je trouver la clé ou le mot de passe sur mega.nz ?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Si tu as besoin d'une clé d'activation ou mot de passe, tu dois trouver la clée sur shareurl.cc. Regarde <a href="https://i.imgur.com/4A0w4aQ.png">ici</a></p>
    </label>
    <input id='faq-c' type='checkbox'>
    <label for='faq-c'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Pourquoi le jeu est divisé en partis de 5 Go ?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Nous sommes obligé car cela est limité à 5 Go par fichier. Nous avons une limite par fichier.</p>
    </label>
    <input id='faq-d' type='checkbox'>
    <label for='faq-d'>
        <p class="faq-heading"><i class="fa fa-chevron-down" aria-hidden="true"></i>
            Le site <span style="color:red">Crack</span>Facile.fr est sécurisé ?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Biensur, si vous avez des doutes, vous pouvez tester le fichier installé sur <a href="https://www.virustotal.com/gui/home/upload">https://www.virustotal.com</a></p>
    </label>
</div>

</div>
</section>
@endsection