@extends('layouts.master')

@section('title')
Halaman Tampil Genre
@endsection

@section('content')

<a href="/genre/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genre as $key => $item)
    <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->name}}</td>
        <td>
            <form action="/genre/{{$item->id}}" method="POST">
            <a href="/genre/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            @csrf
            @method("Delete")
            <input type="submit" class="btn btn-danger btn-sm" value="Delate">
            
            </form>
        </td>   
    </tr>
    @empty
        <tr>
            <td>Genre belum ada</td>
        </tr>
        
    @endforelse
    
    <tr>
  </tbody>
</table>

@endsection