@extends('layouts.app')

@section('content')
    <h1>{{ $vote->title }} Results</h1>

    <p>{{ $vote->description }}</p>

    <ul>
        <li>{{ $vote->option1 }}: {{ $vote->votesForOption(1) }}</li>
        <li>{{ $vote->option2 }}: {{ $vote->votesForOption(2) }}</li>
    </ul>
@endsection
