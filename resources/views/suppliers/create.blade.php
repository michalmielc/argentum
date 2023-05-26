@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>CREATE SUPPLIER</h4>
    </div>

    <div>
        <a href="{{ route ('suppliers.index')}}" class="btn btn-info">POWRÓT</a>
    </div>
    <div class="warnings">
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endif
    </div>
    <div>
        <form action="{{ route ('suppliers.store') }}" method="POST" class="row g-3">
            {{ csrf_field() }}
            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

            <div class="col-md-7">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>

            <div class="col-md-9">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
            </div>

            <div class="col-md-3">
                <label for="postalcode" class="form-label">ZIP</label>
                <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{old('postalcode')}}">
            </div>

            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}">
            </div>

            <div class="col-md-6">
                <label for="region" class="form-label">Region</label>
                <input type="text" class="form-control" id="region" name="region" value="{{old('region')}}">
            </div>

            <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
            </div>


            <div class="col-12">
                 <button type="submit" class="btn btn-primary mb-2">UTWÓRZ</button>
             </div>
        </form>
    </div>
</div>

@endsection
