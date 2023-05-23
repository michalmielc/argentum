@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>CREATE SUPPLIER</h4>

    <div>
      <a href="{{ route ('suppliers.index')}}">POWRÓT</a>
    </div>

    @if($errors->any())
      @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
      @endforeach
    @endif

    <form action="{{ route ('suppliers.store') }}" method="POST">
      {{ csrf_field() }}

      <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

      <label for="name">NAME:</label>
      <input type="text" id="name" name="name"><br>
      
      <label for="address">ADDRESS:</label>
      <input type="text" id="address" name="address"><br>
     
      <label for="postalcode">POSTAL CODE:</label>
      <input type="text" id="postalcode" name="postalcode"><br>
     
      <label for="city">CITY:</label>
      <input type="text" id="city" name="city"><br>
   
      <label for="region">REGION:</label>
      <input type="text" id="region" name="region"><br>
     
      <label for="country">COUNTRY:</label>
      <input type="text" id="country" name="country"><br>

      <label for="email">EMAIL:</label>
      <input type="text" id="email" name="email"><br>

      <input type = "submit" value="ZAPISZ">

    </form>
        
        
@endsection