@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="#">Teams</a>
        <a href="#">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Toernooien</h1>
    <a href="{{ route('tournaments.create') }}">+ nieuw toernooi</a>
    <table class="table">
        <tr>
            <th>Toernooi</th>
            <th>Datum</th>
            <th>&nbsp;</th>
        </tr>
        @foreach($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->name }}</td>
                <td><a href="{{ route('tournaments.edit', $tournament->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>
    
@endsection