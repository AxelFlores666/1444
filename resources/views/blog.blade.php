@extends('layouts.master')

@section('title', 'inicio')

@section('content')

<h1> Bienvenidos al curso </h1>

@foreach ($posts as $post)
<h>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>
@endforeach

@endsection