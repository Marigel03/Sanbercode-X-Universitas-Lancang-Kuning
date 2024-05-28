@extends('layouts.master')

@section('title')
Halaman Home
@endsection

@section('content')
    <h1>SELAMAT DATANG <?php echo $fname; ?> <?php echo $lname; ?> </h1>
    @endsection