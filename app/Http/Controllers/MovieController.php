<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDdmZTdlN2JmNTdmOTljYTZmOTRkZjkyMTQ4NGQzOSIsInN1YiI6IjYwZmZhNTBiZGI3MmMwMDA1ZDgyYTU3NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.vqNKOEJrdIWJtr2WGU-ai6O1jBOuV-ujrUKGvDRp-Kg')
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $upcomingMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDdmZTdlN2JmNTdmOTljYTZmOTRkZjkyMTQ4NGQzOSIsInN1YiI6IjYwZmZhNTBiZGI3MmMwMDA1ZDgyYTU3NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.vqNKOEJrdIWJtr2WGU-ai6O1jBOuV-ujrUKGvDRp-Kg')
        ->get('https://api.themoviedb.org/3/movie/upcoming')
        ->json()['results'];

        return view('movie.index', [
            'popularMovies' => $popularMovies,
            'upcomingMovies' => $upcomingMovies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
