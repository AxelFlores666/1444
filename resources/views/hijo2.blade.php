@extends('layouts.master2')

@section('titulo', 'pagina hijo')

@section('content')
@include('partials.message2')
<li>@lang('message2.op')</li>
@endsection