@extends('layouts.app')

@section('content')
    <h1>WANT RANKING</h1>
    @include('items.items', ['items' => $items])
@endsection