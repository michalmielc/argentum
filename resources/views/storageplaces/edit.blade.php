@extends('templates.template')
@section('title_main')
    ARGENTUM  - STORAGEPLACES
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>EDIT STORAGEPLACE</h4>
    </div>
        <div>
            <a href="{{ route ('storageplaces.index')}}" class="btn btn-info">POWRÓT</a>
            <a href="{{ route ('storageplaces.delete',[$storageplace->id,'delete']) }}" class="btn btn-danger">USUŃ</a>
        </div>
        <div>
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div   class="validations">{{ $error }}</div>
            @endforeach
            @endif
        </div>
        <div>
            <form action="{{ route ('storageplaces.update',[$storageplace->id]) }}" method="POST" class="row g-3">
            {{ csrf_field() }}

                <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
                <input type="hidden" name="id " value= {{ $storageplace->id}}>

                <div class="col-md-10">
                    <label for="barcode" class="form-label">BARCODE</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" value="{{ $storageplace->barcode}}">
                </div>

                <div class="col-md-3">
                    <label for="stillageNo" class="form-label">STILLAGE NO</label>
                    <input type="numeric" class="form-control" id="stillageNo" name="stillageNo" value="{{ $storageplace->stillageNo }}">
                </div>
                <div class="col-md-3">
                    <label for="shelfNo" class="form-label">SHELFNO</label>
                    <input type="numeric" class="form-control" id="shelfNo" name="shelfNo" value="{{ $storageplace->shelfNo }}">
                </div>
                <div class="col-md-3">
                    <label for="placeNo" class="form-label">PLACENO</label>
                    <input type="numeric" class="form-control" id="placeNo" name="placeNo" value="{{ $storageplace->placeNo }}">
                </div>
                <div class="col-md-5">
                    <label for="maxHeight" class="form-label">MAX HEIGHT</label>
                    <input type="text" class="form-control" id="maxHeight" name="maxHeight" value="{{ $storageplace->maxHeight }}">
                </div>
                <div class="col-md-5">
                    <label for="maxWeight" class="form-label">MAX WEIGHT</label>
                    <input type="text" class="form-control" id="maxWeight" name="maxWeight" value="{{ $storageplace->maxWeight }}">
                </div>
                <div class="col-md-3">
                    <label for="lane" class="form-label">LANE</label>
                    <input type="numeric" class="form-control" id="lane" name="lane" value="{{ $storageplace->lane }}">
                </div>
                <div class="col-md-9">
                    <label for="name" class="form-label">NAME</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $storageplace->name }}">
                </div>
                <div class="col-md-3">
                    <label for="accessTime" class="form-label">ACCESS TIME</label>
                    <input type="numeric" class="form-control" id="accessTime" name="accessTime" value="{{ $storageplace->accessTime }}">
                </div>

                <div class="form-check col-md-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="isActive"
                    {{ $storageplace->isActive? "checked" :""}}>
                    <label class="form-check-label" for="flexCheckChecked">
                        IS ACTIVE
                    </label>
                  </div>

                  <div class="form-check col-md-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="onlySingle"
                    {{ $storageplace->onlySingle? "checked" :""}}>
                    <label class="form-check-label" for="flexCheckChecked">
                        ONLY SINGLE
                    </label>
                  </div>

                <div class="col-md-3">
                    <label for="maxAmountOfItems" class="form-label">MAX AMOUNT OF ITEMS</label>
                    <input type="numeric" class="form-control" id="maxAmountOfItems" name="maxAmountOfItems" value="{{ $storageplace->maxAmountOfItems }}">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-2">ZAPISZ</button>
                </div>

            </form>
         </div>
    </div>
@endsection
