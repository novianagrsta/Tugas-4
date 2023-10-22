<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MoviesRequest;

class MoviesController extends Controller
{
    /**
     * Get all movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies, 200);
    }

    /**
     * Create a new movie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoviesRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
        ]);

        return response()->json($movie, 201);
    }

    /**
     * Get a single movie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        return response()->json($movie, 200);
    }

    /**
     * Update a movie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MoviesRequest $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        $movie->update([
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
        ]);

        return response()->json($movie, 200);
    }

    /**
     * Delete a movie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        $movie->delete();

        return response()->json(null, 204);
    }
}
