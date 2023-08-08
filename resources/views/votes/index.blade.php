@extends('layouts.app')

@section('content')
    <h1>All Votes</h1>

    <ul>
        @foreach ($votes as $vote)
            <li><a href="{{ route('vote.show', ['id' => $vote->id]) }}">{{ $vote->title }}</a></li>
        @endforeach
    </ul>
@endsection
