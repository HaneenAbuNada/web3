@extends('layouts.app')

@section('title', 'Students Page')

@section('content')

<h2>Students List</h2>

@if(count($students) > 0)

    <ul>
        @foreach($students as $student)

            <li>
                {{ $loop->iteration }} - {{ $student }}
            </li>

        @endforeach
    </ul>

@else

    <p>No students found.</p>

@endif

@endsection