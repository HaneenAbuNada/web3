@extends('layouts.app')

@section('title', 'Students Page')

@section('content')

    <h2>Students & Courses</h2>

    @if(count($students) > 0)

        <ul>
            @foreach($students as $student)

                <h3>{{ $student->name_upper }}</h3>

                <ul>
                    @foreach($student->courses as $course)
                        <li>{{ $course->title }}</li>
                    @endforeach
                </ul>

            @endforeach
        </ul>

    @else

        <p>No students found.</p>

    @endif

@endsection