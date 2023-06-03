@extends('templates.template')
@section('title_main')
    ARGENTUM  - REPORTS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>AVAILABLE REPORTS</h4>
    </div>
    <div class="col 8">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
            ITEMS
            </a>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">REP 1</a>
                <a href="#" class="list-group-item list-group-item-action">REP 2</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action">STORAGEPLACES</a>
            <a href="#" class="list-group-item list-group-item-action">USERS</a>
            <a href="#" class="list-group-item list-group-item-action">SUPPLIERS</a>
            <a href="#" class="list-group-item list-group-item-action disabled">COST CENTERS</a>
        </div>
    </div>
</div>
    @endsection
