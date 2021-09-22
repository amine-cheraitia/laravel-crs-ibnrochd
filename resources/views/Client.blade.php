@extends('Pages.page')

@section('title','La liste des clients')


@section('content')
    La liste des clients est la suivante
    {{ request()->query('id') }}
    <b>{{$nom}}</b>

@endsection
