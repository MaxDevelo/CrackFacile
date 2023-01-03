@extends('layouts.app')

@section('title','CrackFacile • Télécharger tous les logiciels PC Crack')
@section('titlecontent','CrackFacile • Télécharger tous les logiciels PC Crack')
@section('description','Crack Logiciel, crack logicies, CrackLogiciel, LogicielCrack, CrackFacile, logiciels, logiciels crack"')

@section('main')
@parent
@if($softwares->count() > 0)
@foreach($softwares as $software)
<div class="center">
    <a href="{{route('showsoftware', $software->id )}}" rel="noopener noreferrer">
        <div data-item="$software->category" class="grid-item" id="$software->id">
            <img class="ImageGame" src="$software->image_miniature">
            <div class="DescGame">
                <h2 class="TitleDesc">$software->title</h2>
                <p class="Desc">$software->catch_phrase</p>
                <div class="iconDesc">
                    <div class="DatePublic ">
                        <p class="DateDesc">⏳ $software->published_at</p>
                    </div>
                    <div class="PoidFichier ">
                        <p class="PoidFichierDesc">📅 $software->size_file</p>
                    </div>
                    <div class="Dispo">
                        <p class="DispoDesc">✔️ Disponible</p>
                    </div>
                    @if($software->istorrent)
                    <div class="isTorrent">
                        <p class="TorrentDesc">✔️ Torrent</p>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </a>
</div>
@endforeach
@else
</br></br></br></br>
<h1 style="text-align:center;color:white;font-size:60px">AUCUN LOGICIELS</h1>
@endif
@endsection