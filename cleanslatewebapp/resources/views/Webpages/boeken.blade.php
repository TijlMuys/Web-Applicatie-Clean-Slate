@extends('Layouts.pageLayout')
@section('content')
    <h1>Boeken</h1>
    <h2>{{$lijstkop}}</h2>
    @if(count($boekenlijst) > 0)
        <ul class="list-group">
            @foreach($boekenlijst as $boek)
                <li class="list-group-item">{{$boek}}</li>
            @endforeach
        </ul>
    @endif
@endsection