<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page = 1)
    {
        $actorPopular = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDdmZTdlN2JmNTdmOTljYTZmOTRkZjkyMTQ4NGQzOSIsInN1YiI6IjYwZmZhNTBiZGI3MmMwMDA1ZDgyYTU3NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.vqNKOEJrdIWJtr2WGU-ai6O1jBOuV-ujrUKGvDRp-Kg')
            ->get('https://api.themoviedb.org/3/person/popular?page=' . $page)
            ->json()['results'];

        // dump($actorPopular);
        return view(
            'actor.index',
            ['actorPopular' => $actorPopular]
        );
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
        $actors = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDdmZTdlN2JmNTdmOTljYTZmOTRkZjkyMTQ4NGQzOSIsInN1YiI6IjYwZmZhNTBiZGI3MmMwMDA1ZDgyYTU3NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.vqNKOEJrdIWJtr2WGU-ai6O1jBOuV-ujrUKGvDRp-Kg')
            ->get('https://api.themoviedb.org/3/person/' . $id . '?append_to_response=combined_credits')
            ->json();
            
        return view('actor.show', ['actors' => $actors]);
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
