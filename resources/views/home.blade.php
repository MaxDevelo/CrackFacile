@extends('layouts.app')
@section('title','CrackFacile | Télécharge tes jeux gratuitement')
@section('titlecontent','CrackFacile | Télécharge tes jeux gratuitement')
@section('description','Bienvenue sur CrackFacile où tu peux télécharger tes jeux et logiciels gratuitement et de manière sécurisé. Pense à nous rejoindre sur notre discord pour nous soutenir.')
@section('main')
@parent
</br></br></br></br>
<h1 style="color:white;text-align:center;font-size:60px">Bienvenue sur <span style="color:red">Crack</span>Facile</h1>
<center>
    <div class="m-bar m-red">
        <a class="m-microphone"><i class="material-icons" style="font-size:26px;">INFO</i></a>
        <a class="m-content">Le site CrackFacile va etre repris en main et il y aura plus de crack / The CrackFacile site will be taken over and there will be more crack</a>
    </div>
</center>
<!-- services -->
<div class="services" id="services">
    <div class="container">
        <div class="wthree-services-grids">
            <a href="{{route('listgames')}}">
                <div class="col-sm-3 wthree-services">
                    <div class="wthree-services-grid">
                        <div class="wthree-services-info">
                            <i class="fa fa-gamepad" aria-hidden="true""></i>
                        <h4></i>{{$countGames}}+</h4>
                        <div class=" services-border">
                        </div>
                    </div>

                </div>
        </div>
        </a>
        <a href="{{route('listsoftwares')}}">
            <div class="col-sm-3 wthree-services">
                <div class="wthree-services-grid">
                    <div class="wthree-services-info">
                        <i class="fa fa-gavel"></i>
                        <h4>{{$countSoftwares}}+</h4>
                        <div class="services-border"> </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <h2 class="titre-slider" style="text-align:center; color:white;font-size:40px;border-bottom:white 2px solid; width:50%;  margin: 0 auto">⭐ Recommandé :</h2>
    <section class="container-actuality">
        <?php
        $count = 0;
        ?>
        @foreach($games as $game)
        @if( $count % 6 == 0 && $count != 0)
        </section>
        <section class="container-actuality">
        @else
        <a href="{{route('showgame', $game->id)}}">
            <div class="gameBlock">
                <img src="{{$game->image_miniature}}">
                <!-- <h5>VOIR+</h5> -->
            </div>
        </a>
        @endif
        <?php
        $count++;
        ?>
        @endforeach
    </section>



    @endsection