@extends('templates.template')
@section('title_main')
    ARGENTUM  - ITEMS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>ITEM</h4>
    </div>
    <div>
        <a href="{{ route ('items.index')}}" class="btn btn-info">POWRÓT</a>
    </div>
    <div>
        <form  method="POST">
            {{ csrf_field() }}

            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
            <input type="hidden" name="id " value= {{ $item->id}}>
            <div>
                <button class="btn btn-dark" formaction="{{ route ('items.edit', [$item->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ITEM</th>
                </tr>
            </thead>
            <tbody>

                <tr scorp="row">
                    <tr>
                        <td>NAME1:</td>
                        <td>{{ $item->name1 }}</td>
                    </tr>

                    <tr>
                        <td>NAME2:</td>
                        <td>{{ $item->name2 }}</td>
                    </tr>

                    <tr>
                        <td>NAME3:</td>
                        <td>{{ $item->name3 }}</td>
                    </tr>

                    <tr>
                        <td>BARCODE:</td>
                        <td>{{ $item->barcode }}</td>
                    </tr>

                    <tr>
                        <td>BOX AMOUNT:</td>
                        <td>{{ $item->boxAmount }}</td>
                    </tr>

                    <tr>
                        <td>MIN INV:</td>
                        <td>{{ $item->minInv }}</td>
                    </tr>

                    <tr>
                        <td>SIZES:</td>
                        <td>{{ $item->sizes }}</td>
                    </tr>

                    <tr>
                        <td>WEIGHT:</td>
                        <td>{{ $item->weight }}</td>
                    </tr>

                    <tr>
                        <td>PICTURE:</td>
                        <td>{{ $item->picture }}</td>
                    </tr>

                    <tr>
                        <td>IS ACTIVE:</td>
                        <td>{{ $item->isActive ? "YES" : "NO" }}</td>
                    </tr>

                    <tr>
                        <td>EXP. DATE:</td>
                        <td>{{ $item->expiryDate }}</td>
                    </tr>

                    <tr>
                        <td>IS BLOCKED:</td>
                        <td>{{ $item->isBlocked ? "YES" : "NO"  }}</td>
                    </tr>


                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
