<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

use Cinema\Http\Requests\CreateMovieRequest;
use Cinema\Http\Requests\EditMovieRequest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Cinema\Movie;
use Illuminate\Support\Facades\Validator;


class MoviesController extends Controller {



    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$peliculas = Movie::paginate();
        return view('movies.index', compact('peliculas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMovieRequest $request)
    {

        $pelicula = Movie::create($request->all());

        return (redirect()->route('movies.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $pelicula = Movie::findOrFail($id);
        $promedio = $this->getPromedio($id);
        $votos = sizeof($pelicula->ratings);


        return view('movies.show', compact('pelicula','promedio','votos'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pelicula = Movie::findOrFail($id);
        return view('movies.edit', compact('pelicula'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditMovieRequest $request)
	{
        $pelicula = Movie::findOrFail($id);
        $pelicula->fill($request->all());
        $pelicula->save();
        return (redirect()->route('movies.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $pelicula = Movie::findOrFail($id);
        $pelicula->delete();
        return (redirect()->route('movies.index'));
	}
    private function getPromedio($id)
    {
        $pelicula = Movie::findOrFail($id);
        $suma = 0;
        $promedio = 0;
        foreach ($pelicula->ratings as $rating){
            $suma = $suma + $rating->value;
        }
        if(sizeof($pelicula->ratings)!=0) {
            return $promedio = round($suma / sizeof($pelicula->ratings));
        }
        else{
            return round($promedio);
        }
    }

}
