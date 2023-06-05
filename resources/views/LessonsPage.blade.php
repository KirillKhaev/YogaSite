@extends('layout.layout')
    @section('content')
        <div class="container">
            <div class="content_container">
                <span class="border"></span>
                <h1 class="lessons_page_title">Список уроков</h1>
                <div class="lessons_block">
                    @foreach ($lessons as $lesson)
                    <div class="lesson">
                        <iframe>{{ $lesson->videolink }}</iframe>
                        <h4 class="lesson_title">{{ $lesson->title }}</h4>
                        <p class="difficulty_level">{{ $lesson->level }}</p>
                        <div class="coach_block">
                            <img src="/images/coachpic.png" class="coachpic">
                            <p class="coach_name">{{ $lesson->coachName }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection