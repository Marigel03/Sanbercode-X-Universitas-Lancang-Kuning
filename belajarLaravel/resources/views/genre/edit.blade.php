@extends('layouts.master')

@section('title')
Halaman Edit Genre
@endsection

@section('content')

<form method="POST" action="/genre/{{$genre->id}}">

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
@method("put")
  <div class="form-group">
    <label>Genre Name</label>
    <input type="text" value="{{$genre->name}}" class="form-control" name="name" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection