@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>EDIT  SUPPLIER</h4>
    <div>
      <a href="{{ route ('suppliers.index')}}">POWRÓT</a>
    </div>

    @if($errors->any())
      @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
    @endif

    <form action="{{ route ('suppliers.update',[$supplier->id]) }}" method="POST">
      {{ csrf_field() }}

      <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
      <input type="hidden" name="id " value= {{ $supplier->id}}>

      <label for="name">NAME:</label>
      <input type="text" id="name" name="name" value=" {{$supplier->name}}" ><br>
      
      <label for="address">ADDRESS:</label>
      <input type="text" id="address" name="address" value="{{$supplier->address}}"><br>

      <label for="address">POSTAL CODE:</label>
      <input type="text" id="address" name="address" value="{{$supplier->postalcode}}"><br>

      <label for="address">CITY:</label>
      <input type="text" id="address" name="address" value="{{$supplier->city}}"><br>

      <label for="address">REGION:</label>
      <input type="text" id="address" name="address" value="{{$supplier->region}}"><br>

      <label for="address">COUNTRY:</label>
      <input type="text" id="address" name="address" value="{{$supplier->country}}"><br>

      <label for="email">EMAIL:</label>
      <input type="text" id="email" name="email" value="{{$supplier->email}}"><br>

      <input type = "submit" value="ZAPISZ">

    </form>
        
        
@endsection