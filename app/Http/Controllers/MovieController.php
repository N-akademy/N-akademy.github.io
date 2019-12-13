<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use Validator;

class MovieController extends Controller
{
    public function showMovies()
    {
        $movies=Movie::All();
        return view('movies.show',compact('movies'));
    }

    public function create()
    {
        $genre=Genre::All();
        return view('movies.create',compact('genre'));
    }

    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'director' => 'required|max:50|string',
            'duration' => 'required|integer',
            'year' => 'required|integer|max:4',
            'genre_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect('createMovie')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type Movie qui utilisera l'hydratation
            $movie = new Movie([
                "name" => $request->name,
                "director" => $request->director,
                "duration" => $request->duration,
                "year" => $request->year,
                "genre_id" => $request->genre_id
            ]);

            // Hydratation en base de données et donc insertion du film
            $movie->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/movies');
        }
    }


    public function edit($id)
    {
        $genre=Genre::All();
        $movie= Movie::find($id);

        return view('movies.edit',compact('movie','genre'));

    }

    public function update(Request $request, $id)
    {

        $movie= Movie::find($id);
        $movie->name = $request->name;
        $movie->director = $request->director;
        $movie->duration = $request->duration;
        $movie->year = $request->year;
        $movie->genre_id = $request->genre_id;

        $movie->save();

        return redirect('/movies');
    }
    public function delete($id)
    {
        $movie= Movie::find($id);
        $movie->delete();


        return redirect('/movies');

    }

}
