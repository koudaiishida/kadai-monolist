@extends('layouts.app')

@section('content')
    <h1>HAVE RANKING</h1>
    @include('items.itemshaves', ['items' => $items])
@endsection