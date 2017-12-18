@extends('default')

@section('title', 'Hello, page!')

@section('content')

    @foreach($posts as $p)
        <h1> {{ $p->title }} </h1>
            <b>{{ Carbon\Carbon::parse($p->created_at)->format('d.m.Y') }}</b><br/>
        <p>  {!! $p->content !!} </p>
    @endforeach

@endsection