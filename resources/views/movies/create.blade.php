@extends('layouts.template')

@section('content')




<h1>Page de création de films</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeMovie" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" />

    <label for="director">Directeur<span class="required">*</span></label>
    <input type="text" name="director" placeholder="Directeur" />


    <label for="duration">Durée en minutes<span class="required">*</span></label>
    <input type="number" name="duration" placeholder="Durée" />


    <label for="year">Année<span class="required">*</span></label>
    <input type="number" name="year" placeholder="Année" />


    <label for="genre">Genre<span class="required">*</span></label>
    <select  name="genre_id"/>
        @foreach ($genre as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endforeach
    </select>
        <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
