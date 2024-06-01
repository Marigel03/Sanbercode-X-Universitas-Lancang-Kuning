@extends('layouts.master')

@section('title')
Halaman Tambah Genre Film
@endsection

@section('content')

<form method="POST" action="/genre">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
  <div class="form-group">
    <label>Genre Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection