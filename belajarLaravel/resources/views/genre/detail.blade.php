@extends('layouts.master')

@section('title')
Halaman Detail Genre Film
@endsection

@section('content')

<h1>{{$genre->name}}</h1>

<a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>

@endsection