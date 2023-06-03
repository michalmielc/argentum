@extends('templates.template')
@section('title_main')
    ARGENTUM  - ITEMS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>EDIT ITEM</h4>
    </div>
        <div>
            <a href="{{ route ('items.index')}}" class="btn btn-info">POWRÓT</a>
            <a href="{{ route ('items.delete',[$item->id,'delete']) }}" class="btn btn-danger">USUŃ</a>
        </div>
        <div>
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div   class="validations">{{ $error }}</div>
            @endforeach
            @endif
        </div>
        <div>
            <form action="{{ route ('items.update',[$item->id]) }}" method="POST" class="row g-3">
            {{ csrf_field() }}

                <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
                <input type="hidden" name="id " value= {{ $item->id}}>

                <div class="col-md-8">
                    <label for="name1" class="form-label">NAME1</label>
                    <input type="text" class="form-control" id="name1" name="name1" value="{{ $item->name1 }}">
                </div>

                <div class="col-md-6">
                    <label for="name2" class="form-label">NAME2</label>
                    <input type="text" class="form-control" id="name2" name="name2" value="{{ $item->name2 }}">
                </div>
                <div class="col-md-6">
                    <label for="name3" class="form-label">NAME3</label>
                    <input type="text" class="form-control" id="name3" name="name3" value="{{ $item->name3 }}">
                </div>
                <div class="col-md-8">
                    <label for="barcode" class="form-label">BARCODE</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" value="{{ $item->barcode }}">
                </div>
                <div class="col-md-2">
                    <label for="boxAmount" class="form-label">BOX AMOUNT</label>
                    <input type="numeric" class="form-control" id="boxAmount" name="boxAmount" value="{{ $item->boxAmount }}">
                </div>
                <div class="col-md-2">
                    <label for="minInv" class="form-label">MIN INV.</label>
                    <input type="numeric" class="form-control" id="minInv" name="minInv" value="{{ $item->minInv }}">
                </div>
                <div class="col-md-3">
                    <label for="sizes" class="form-label">SIZES</label>
                    <input type="text" class="form-control" id="sizes" name="sizes" value="{{ $item->sizes }}">
                </div>
                <div class="col-md-2">
                    <label for="weight" class="form-label">WEIGHT</label>
                    <input type="numeric" class="form-control" id="weight" name="weight" value="{{ $item->weight }}">
                </div>
                <div class="col-md-9">
                    <label for="picture" class="form-label">PICTURES</label>
                    <input type="TEXT" class="form-control" id="picture" name="picture" value="{{ $item->picture }}">
                </div>

                <div class="form-check col-md-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="isActive"
                    {{ $item->isActive ? "checked" :"" }}>
                    <label class="form-check-label" for="flexCheckChecked">
                        IS ACTIVE
                    </label>
                  </div>

               <div class="col-md-3">
                    <label for="expiryDate" class="form-label">EXP DATE:</label>
                    <input type="data" class="form-control" id="expiryDate" name="expiryDate" value="{{ $item->expiryDate }}">
                </div>

                <div class="form-check col-md-3">
                    <input class="form-check-input" type="checkbox" value="" id="isBlocked" name="isBlocked"
                    {{ $item->isBlocked ? "checked" :"" }}>
                    <label class="form-check-label" for="flexCheckChecked">
                        IS BLOCKED
                    </label>
                  </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-2">ZAPISZ</button>
                </div>

            </form>
         </div>
    </div>
@endsection
