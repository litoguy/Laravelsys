<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index()
    {
        $votes = Vote::all();
        return view('votes.index', ['votes' => $votes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('votes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vote = new Vote();
        $vote->title = $request->input('title');
        $vote->description = $request->input('description');
        $vote->save();

        return redirect()->route('votes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vote = Vote::find($id);
        return view('votes.show', ['vote' => $vote]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vote = Vote::find($id);
        return view('votes.edit', ['vote' => $vote]);
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
        $vote = Vote::find($id);
        $vote->title = $request->input('title');
        $vote->description = $request->input('description');
        $vote->save();

        return redirect()->route('votes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Vote::find($id);
        $vote->delete();

        return redirect()->route('votes.index');
    }
}
