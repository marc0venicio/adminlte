@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-3">
    <p>Olá {{ explode(' ', trim(auth()->User()->name))[0] }}!</p>
</div>
@stop
