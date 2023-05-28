@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')
{{-- // style css --}}
<style>
   body { background:url ('img/main_menu.jpg') !important; }
</style>

    <div class="row gy-3">
        <div>
            <h3>WELCOME TO ARGENTUM</h3>
        </div>
        <ul>
           <li> <a href="{{ route ('costcenters.index')}}" class="btn btn-info">COSTCENTERS</a> </li>

            {{-- <a href="{{ route ('items.index')}}" class="btn btn-info">ITEMS</a>
            <a href="{{ route ('storageplaces.index')}}" class="btn btn-info">STORAGEPLACES</a> --}}
            <li><a href="{{ route ('suppliers.index')}}" class="btn btn-info">SUPPLIERS</a> </li>
        </ul>
    </div>

@endsection
