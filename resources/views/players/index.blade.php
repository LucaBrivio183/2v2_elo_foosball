@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-6">
            <h1>Classifica</h1>
            <table class="table table-sm table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rating</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($players as $player)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->rating }}</td>
                    <td>
                      <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            X
                        </button>
                      </form>
                      </td>
                  </tr> 
                @endforeach
                </tbody>
              </table>
        </aside>
        <main class="col-6">
            <h1>Partite</h1>
        </main>
    </div>

@endsection