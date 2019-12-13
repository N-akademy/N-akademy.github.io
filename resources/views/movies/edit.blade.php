@extends('layouts.template')

@section('content')




<h1>Page de modification  de films</h1>

<form action="{{route('updateMovie',$movie->id)}}" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
<input type="text"name="name" value="{{$movie->name}}" />

    <label for="director">Réalisateur<span class="required">*</span></label>
    <input type="text" name="director" value="{{$movie->director}}" />


    <label for="duration">Durée en minutes<span class="required">*</span></label>
    <input type="number" name="duration" value="{{$movie->duration}}" />


    <label for="year">Année<span class="required">*</span></label>
    <input type="number" name="year" value="{{$movie->year}}" />


    <label for="genre">Genre<span class="required">*</span></label>
    <select  name="genre_id" />
        @foreach ($genre as $genre)
        @if($genre->name==$movie->genre->name)
            <option selected value="{{$genre->id}}">{{$genre->name}}</option>
        @else
            <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endif
        @endforeach
    </select>
        <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
