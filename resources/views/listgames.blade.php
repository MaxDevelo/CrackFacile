@extends('layouts.app')

@section('title','CrackFacile • Télécharger tous les jeux PC Crack')
@section('titlecontent','CrackFacile • Télécharger tous les jeux PC Crack')
@section('description','Crack Jeux, crack jeux, CrackJeux, JeuxCrack, CrackFacile, jeux, jeux crack"')
@section('main')
@parent
</br></br></br></br></br></br>
@if($games->count() > 0)
@foreach($games as $game)
<a href="{{route('showgame', $game->id )}}" rel="noopener noreferrer">
    <div data-item="{{$game->category}}" class="grid-item" id="$game->id">
        <img class="ImageGame" src="{{$game->image_miniature}}">
        <div class="DescGame">
            <h2 class="TitleDesc">{{$game->title}}</h2>
            <p class="Desc">{{$game->catch_phrase}}</p>
            <div class="iconDesc">
                <div class="DatePublic ">
                    <p class="DateDesc">⏳ {{$game->published_at}}</p>
                </div>
                <div class="PoidFichier ">
                    <p class="PoidFichierDesc">{{$game->size_file}} Go</p>
                </div>
                <div class="Dispo">
                    <p class="DispoDesc">✔️ Disponible</p>
                </div>
                @if($game->istorrent)
                <div class="isTorrent">
                    <p class="TorrentDesc">✔️ Torrent</p>
                </div>
                @endif
            </div>
        </div>

    </div>
</a>


@endforeach
@else
</br></br></br></br>
<h1 style="text-align:center;color:white;font-size:60px">AUCUN JEUX</h1>
@endif

@endsection