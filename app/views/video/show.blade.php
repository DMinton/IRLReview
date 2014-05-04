@extends('layouts.master')

@section('output')
    <div class="row">
        <div class="video-container">
            <h2>{{ $videoData->name }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="video-container">
            {{ $videoPlayer }}
        </div>
    </div>
@endsection
