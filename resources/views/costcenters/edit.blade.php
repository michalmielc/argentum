@extends('templates.template')
@section('title_main')
    ARGENTUM  - COSTCENTERS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>EDIT  COSTCENTER</h4>
    </div>
        <div>
            <a href="{{ route ('costcenters.index')}}" class="btn btn-info">POWRÓT</a>
            <a href="{{ route ('costcenters.delete',[$supplier->id,'delete']) }}" class="btn btn-danger">USUŃ</a>
        </div>
        <div>
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div   class="validations">{{ $error }}</div>
            @endforeach
            @endif
        </div>
        <div>
            <form action="{{ route ('costcenters.update',[$costcenter->id]) }}" method="POST" class="row g-3">
            {{ csrf_field() }}

                <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
                <input type="hidden" name="id " value= {{ $costcenter->id}}>

                <div class="col-md-8">
                    <label for="name" class="form-label">NAME:</label>
                    <input type="text" class="form-control"  id="name" name="name" value=" {{$costcenter->name}}" >
                </div>

                <div class="col-md-8">
                    <label for="code" class="form-label">CODE:</label>
                    <input type="text" class="form-control" id="code" name="code" value="{{$costcenter->code}}">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-2">ZAPISZ</button>
                </div>

            </form>
         </div>
    </div>
@endsection
