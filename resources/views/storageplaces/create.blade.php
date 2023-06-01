@extends('templates.template')
@section('title_main')
    ARGENTUM  - STORAGEPLACE
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>CREATE STORAGEPLACE</h4>
    </div>

    <div>
        <a href="{{ route ('storageplaces.index')}}" class="btn btn-info">POWRÓT</a>
    </div>
    <div class="warnings">
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endif
    </div>
    <div>
        <form action="{{ route ('storageplaces.store') }}" method="POST" class="row g-3">
            {{ csrf_field() }}
            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >

            <div class="col-md-10">
                <label for="barcode" class="form-label">BARCODE</label>
                <input type="text" class="form-control" id="barcode" name="barcode" value="{{old('barcode')}}">
            </div>

            <div class="col-md-3">
                <label for="stillageNo" class="form-label">STILLAGE NO</label>
                <input type="numeric" class="form-control" id="stillageNo" name="stillageNo" value="{{old('stillageNo')}}">
            </div>
            <div class="col-md-3">
                <label for="shelfNo" class="form-label">SHELFNO</label>
                <input type="numeric" class="form-control" id="shelfNo" name="shelfNo" value="{{old('shelfNo')}}">
            </div>
            <div class="col-md-3">
                <label for="placeNo" class="form-label">PLACENO</label>
                <input type="numeric" class="form-control" id="placeNo" name="placeNo" value="{{old('placeNo')}}">
            </div>
            <div class="col-md-5">
                <label for="maxHeight" class="form-label">MAX HEIGHT</label>
                <input type="numeric" class="form-control" id="maxHeight" name="maxHeight" value="{{old('maxHeight')}}">
            </div>
            <div class="col-md-5">
                <label for="maxWeight" class="form-label">MAX WEIGHT</label>
                <input type="numeric" class="form-control" id="maxWeight" name="maxWeight" value="{{old('maxWeight')}}">
            </div>
            <div class="col-md-3">
                <label for="lane" class="form-label">LANE</label>
                <input type="numeric" class="form-control" id="lane" name="lane" value="{{old('lane')}}">
            </div>
            <div class="col-md-9">
                <label for="name" class="form-label">NAME</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="col-md-3">
                <label for="accessTime" class="form-label">ACCESS TIME</label>
                <input type="numeric" class="form-control" id="accessTime" name="accessTime" value="{{old('accessTime')}}">
            </div>

            <div class="form-check col-md-3">
                <input class="form-check-input" type="checkbox" value="{{old('isActive')}}" id="flexCheckChecked" name="isActive" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    IS ACTIVE
                </label>
              </div>

              <div class="form-check col-md-3">
                <input class="form-check-input" type="checkbox" value="{{old('onlySingle')}}" id="flexCheckChecked" name="onlySingle">
                <label class="form-check-label" for="flexCheckChecked">
                    ONLY SINGLE
                </label>
              </div>

           <div class="col-md-3">
                <label for="maxAmountOfItems" class="form-label">MAX AMOUNT OF ITEMS</label>
                <input type="numeric" class="form-control" id="maxAmountOfItems" name="maxAmountOfItems" value="{{old('maxAmountOfItems')}}">
            </div>

            <div class="col-12">
                 <button type="submit" class="btn btn-primary mb-2">UTWÓRZ</button>
             </div>
        </form>
    </div>
</div>

@endsection
