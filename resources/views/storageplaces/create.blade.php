@extends('templates.template')
@section('title_main')
    ARGENTUM  - COSTCENTERS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>CREATE COSTCENTER</h4>
    </div>

    <div>
        <a href="{{ route ('costcenters.index')}}" class="btn btn-info">POWRÓT</a>
    </div>
    <div class="warnings">
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endif
    </div>
    <div>
        <form action="{{ route ('costcenters.store') }}" method="POST" class="row g-3">
            {{ csrf_field() }}
            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

            <div class="col-md-7">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>

            <div class="col-md-9">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{old('code')}}">
            </div>

            <div class="col-12">
                 <button type="submit" class="btn btn-primary mb-2">UTWÓRZ</button>
             </div>
        </form>
    </div>
</div>

@endsection
