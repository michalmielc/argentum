@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>CREATE SUPPLIER</h4>

    <div>
        <a href="{{ route ('suppliers.index')}}" class="btn btn-info">POWRÓT</a>
    </div>

    @if($errors->any())
      @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
      @endforeach
    @endif

    <div>
        <form action="{{ route ('suppliers.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

            <div class="row">
                <div class="col-5">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" id="address" name="address" placeholder="address">
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="ZIP">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" id="city" name="city" placeholder="city">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="text" class="form-control" id="region" name="region" placeholder="region">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="text" class="form-control" id="country" name="country" placeholder="country">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <input type="email-3" class="form-control" id="email" name="email" placeholder="email">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2">UTWÓRZ</button>

        </form>
    </div>


@endsection
