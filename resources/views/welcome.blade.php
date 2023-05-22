@extends('layouts.app')


@section('content')
<div class="container text-center">
    <h1 class="display-3">The Biggest Comics Collection</h1>
    <a href="{{route('comics.index')}}" class="btn btn-primary mb-2" type="button">Discover</a>
</div>
@endsection
