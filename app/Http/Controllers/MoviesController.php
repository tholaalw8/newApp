<?php



namespace App\Http\Controllers;

use App\Http\Requests\MovieFormRequest;
use App\Movie;

class MoviesController extends Controller
{

public function create(){

    return view('movies.create');
}

public function store(MovieFormRequest $request){

    $movie = new Movie(array(

        'title' => $request->get('title'),
        'released_year' => $request->get('released_year'),
        'genre' => $request->get('genre'),
        'rating' => $request->get('rating'),
        'casts' => $request->get('casts'),
        'director' => $request->get('director'),
        'language' => $request->get('language'),
        'type' => $request->get('type'),
    ));

    $movie->save();

    return redirect('/createMovie')->with('status',"The movei has been created!");



    return $request->all();
}

}
