@extends('layouts.master')
@section('title')
Buat Account Baru!
Sign Up Form
@endsection

@section('content')
    <form action="/welcome" method="POST">
    @csrf
      <label>First Name:</label><br />
      <br />
      <input type="text" name="firstname"><br /><br />
      <label>Last Name:</label><br />
      <br />
      <input type="text" name="lastname"><br /><br />
    </form>
    <form action="/welcome" method="POST">
     @csrf
      <label>Gender:</label><br />
      <br />
      <input type="radio" />Male<br />
      <input type="radio" />Female<br />
      <input type="radio" />Other<br />
      <br />
    </form>
    <form action="/welcome" method="POST">
    @csrf
      <label>Nationality!</label><br /><br />
      <select name="Nationality">
        <br />
        <option value="Indonesian">Indonesian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option></select
      ><br />
      <br />
    </form>
    <form action="/welcome" method="POST">
    @csrf
      <label>Language Spoken:</label><br />
      <br />
      <input type="radio" />Bahasa Indonesia<br />
      <input type="radio" />English<br />
      <input type="radio" />Other<br />
      <br />
      </form>
      <form action="/welcome" method="POST">
    @csrf
      <textarea name="message" cols="30" rows="10"></textarea>
      <br /><br />
      <input type="submit" />
    </form>
    
@endsection