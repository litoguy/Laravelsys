@extends('layouts.app')

@section('content')
    <h1>{{ $vote->title }}</h1>

    <form action="{{ route('vote.store', ['id' => $vote->id]) }}" method="POST">
        @csrf

        <p>{{ $vote->description }}</p>

        <label>
            <input type="radio" name="vote" value="1"> {{ $vote->option1 }}
        </label>

        <label>
            <input type="radio" name="vote" value="2"> {{ $vote->option2 }}
        </label>

        <button type="submit">Vote</button>
    </form>

    <p><a href="{{ route('vote.results', ['id' => $vote->id]) }}">View Results</a></p>
@endsection
