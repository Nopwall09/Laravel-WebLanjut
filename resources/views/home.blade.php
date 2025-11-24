@extends('layouts.master')
@section('title', 'Aplikas laravel')
@section('content')
<h2>Halo, {{ Auth::user()->name}}</h2>
@endsection