

@extends('layouts.template')

@section('content')




<h1>Films</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Directeur</th>
        <th>Durée</th>
        <th>Année</th>
        <th>Genre</th>
        @if(Auth::check())
            @if(Auth::user()->role=='administator')
            <th>Modifier</th>
            <th>Supprimer</th>
            @endif
        @endif
    </tr>
    @foreach ($movies as $movie )
        <tr>
            <th class="id">{{ $movie->id }}</th>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie->duration }}</td>
            <td>{{ $movie->year }}</td>
            <td>{{ $movie->genre->name }}</td>
            @if(Auth::check())
                @if(Auth::user()->role=='administator')
                    <td class="form">
                    <form action="{{route('editMovie',$movie->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="movie_id" value"{{$movie->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteMovie',$movie->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="movie_id" value"{{$movie->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>
@endsection
