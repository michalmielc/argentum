@extends('templates.template')
@section('title_main')
    ARGENTUM  - STORAGEPLACE
@endsection

@section('content')
<div class="row gy-3">
    <div>
     <h4>DELETE STORAGEPLACE</h4>
    </div>
    <div>
         <a href="{{ route ('storageplaces.index')}}" class="btn btn-info">POWRÓT</a>
    </div>

    <div>
        <form  method="POST" class="row g-3">
            {{ csrf_field() }}

            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
            <input type="hidden" name="id " value= {{ $storageplace->id}}>

            <div>
                CZY USUNĄĆ TEN REKORD?
            </div>
        <div>
            <button class="btn btn-danger" formaction="{{ route ('storageplaces.destroy',[$storageplace->id,'destroy']) }}" type="submit">TAK</button>
            <button class="btn btn-warning" formaction="{{ route ('storageplaces.index')}}" type="submit" formmethod="GET">NIE</button>
            <button class="btn btn-dark" formaction="{{ route ('storageplaces.edit', [$storageplace->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
            </div>
        </form>
    </div>

    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DANE STORAGEPLACE</th>
                </tr>
            </thead>
            <tbody>

                <tr scorp="row">
                    <tr>
                        <td>BARCODE:</td>
                        <td>{{ $storageplace->barcode }}</td>
                    </tr>

                    <tr>
                        <td>STILLAGE NO:</td>
                        <td>{{ $storageplace->stillageNo }}</td>
                    </tr>
                    <tr>
                        <td>SHELF NO:</td>
                        <td>{{ $storageplace->shelfNo }}</td>
                    </tr>

                    <tr>
                        <td>PLACE NO:</td>
                        <td>{{ $storageplace->placeNo }}</td>
                    </tr>
                    <tr>
                        <td>MAX HEIGHT:</td>
                        <td>{{ $storageplace->maxHeight }}</td>
                    </tr>

                    <tr>
                        <td>MAX WEIGHT:</td>
                        <td>{{ $storageplace->maxWeight }}</td>
                    </tr>
                    <tr>
                        <td>LANE:</td>
                        <td>{{ $storageplace->lane }}</td>
                    </tr>

                    <tr>
                        <td>NAME:</td>
                        <td>{{ $storageplace->name }}</td>
                    </tr>

                    <tr>
                        <td>ACCESS TIME:</td>
                        <td>{{ $storageplace->accessTime }}</td>
                    </tr>
                    <tr>
                        <td>IS ACTIVE:</td>
                        <td>{{ $storageplace->isActive ? "YES":"NO" }}</td>
                    </tr>
                    <tr>
                        <td>ONLY SINGLE:</td>
                        <td>{{ $storageplace->onlySingle ? "YES":"NO"}}</td>
                    </tr>
                    <tr>
                        <td>MAX AMOUNT OF ITEMS:</td>
                        <td>{{ $storageplace->maxAmountOfItems }}</td>
                    </tr>


                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection
