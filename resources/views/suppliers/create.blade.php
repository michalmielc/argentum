@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>CREATE SUPPLIER</h4>

    <form action="{{ route ('suppliers.store') }}" method="POST">
      {{ csrf_field() }}

      <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

      <label for="name">NAME:</label>
      <input type="text" id="name" name="name"><br>
      
      <label for="address">ADDRESS:</label>
      <input type="text" id="address" name="address"><br>

      <label for="email">EMAIL:</label>
      <input type="text" id="email" name="email"><br>

      <input type = "submit" value="zapisz">

    </form>
        
        
@endsection