@extends('Layouts.pageLayout')

@section('content')
   <h3>Training</h3>
   @if(count($alleTrainingen) > 0)
    <table class="table table-sm table-inverse">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Max. Deelnemers</th>
                <th>Begin datum</th>
                <th>Eind datum</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alleTrainingen as $huidigeTraining)
                <tr>
                        <td>
                            <a href="./Training/{{$huidigeTraining->opleidingID}}">
                                {{$huidigeTraining->opleidingID}}
                            </a>
                        </td>
                        <td>{{$huidigeTraining->naam}}</td>
                        <td>{{$huidigeTraining->omschrijving}}</td>
                        <td>{{$huidigeTraining->maxDeelnemers}}</td>
                        <td>{{$huidigeTraining->beginDatum}}</td>
                        <td>{{$huidigeTraining->eindDatum}}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
   @else
        <p>geen trainingen gevonden</p>
   @endif
@endsection