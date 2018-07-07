@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>THE PLACE FOR YOU TO DISCOVER AMAZING THINGS</h1>
                @if (!Auth::check())
                <a href="{{route('signup.get')}}" class="btn btn-success btn-lg">START MONOLIST</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    test
@endsection