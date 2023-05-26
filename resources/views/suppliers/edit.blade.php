@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>EDIT  SUPPLIER</h4>
    </div>
        <div>
            <a href="{{ route ('suppliers.index')}}" class="btn btn-info">POWRÓT</a>
            <a href="{{ route ('suppliers.delete',[$supplier->id,'delete']) }}" class="btn btn-danger">USUŃ</a>
        </div>
        <div>
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div   class="validations">{{ $error }}</div>
            @endforeach
            @endif
        </div>
        <div>
            <form action="{{ route ('suppliers.update',[$supplier->id]) }}" method="POST" class="row g-3">
            {{ csrf_field() }}

                <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
                <input type="hidden" name="id " value= {{ $supplier->id}}>

                <div class="col-md-8">
                    <label for="name" class="form-label">NAME:</label>
                    <input type="text" class="form-control"  id="name" name="name" value=" {{$supplier->name}}" >
                </div>

                <div class="col-md-8">
                    <label for="address" class="form-label">ADDRESS:</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$supplier->address}}">
                </div>

                <div class="col-md-5">
                    <label for="postalcode" class="form-label">POSTAL CODE:</label>
                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{$supplier->postalcode}}">
                </div>

                <div class="col-md-6">
                    <label for="city" class="form-label">CITY:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{$supplier->city}}">
                 </div>

                <div class="col-md-6">
                    <label for="region" class="form-label">REGION:</label>
                    <input type="text" id="region" class="form-control" name="region" value="{{$supplier->region}}"><br>
                 </div>

                 <div class="col-md-5">
                    <label for="country" class="form-label">COUNTRY:</label>
                    <input type="text" id="country"  class="form-control" name="country" value="{{$supplier->country}}"><br>
                </div>

                <div class="col-md-7">
                    <label for="email" class="form-label">EMAIL:</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{$supplier->email}}"><br>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-2">ZAPISZ</button>
                </div>

            </form>
         </div>
    </div>
@endsection
