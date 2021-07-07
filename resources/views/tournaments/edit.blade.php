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
    <h1>Toernooi aanpassen</h1>
	<form action="{{ route('tournaments.update', $tournament) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name">Naam toernooi</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
