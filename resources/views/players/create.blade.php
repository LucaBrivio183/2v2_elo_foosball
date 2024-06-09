@extends('layouts.app')

@section('content')
<div class="container my-5 mx-auto">
    <h1>AGGIUNGI UN GIOCATORE</h1>
    <form action="{{route('players.store')}}" method="POST">
        @csrf
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Nome giocatore</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 w-50">
                <label for="eloRating" class="form-label">Elo rating</label>
                <input type="number" class="form-control" id="rating" name="rating">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  value="1">
                <label class="form-check-label" for="is_active">Attivo</label>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection