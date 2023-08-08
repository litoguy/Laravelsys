<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class itemController extends Controller
{
    public function index()
    {
        // fetch all votes from the database
        $votes = Vote::all();

        // return a view and pass in the votes
        return view('votes.index', ['votes' => $votes]);
    }

    public function show($id)
    {
        // fetch a specific vote from the database by its ID
        $vote = Vote::find($id);

        // return a view and pass in the vote
        return view('votes.show', ['vote' => $vote]);
    }

    public function store(Request $request, $id)
    {
        // fetch a specific vote from the database by its ID
        $vote = Vote::find($id);

        // update the vote count based on the user's input
        $vote->votes += $request->input('vote');
        $vote->save();

        // redirect back to the show page for the updated vote
        return redirect()->route('vote.show', ['id' => $id]);
    }

    public function results($id)
    {
        // fetch a specific vote from the database by its ID
        $vote = Vote::find($id);

        // return a view and pass in the vote
        return view('votes.results', ['vote' => $vote]);
    }
}
