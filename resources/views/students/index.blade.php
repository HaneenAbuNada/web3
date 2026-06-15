@extends('layouts.app')

@section('title', 'Students Page')

@section('content')

    <h2>Students & Courses</h2>

    @if(count($students) > 0)

        <ul>
            @foreach($students as $student)

                <li>
                    <h3>{{ $student->name_upper }}</h3>

                    <p>
                        Course: {{ $student->course->title }}
                    </p>
                </li>

            @endforeach
        </ul>

    @else

        <p>No students found.</p>

    @endif

@endsection