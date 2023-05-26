@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')
<div class="row gy-3">
    <div>
     <h4>DELETE SUPPLIER</h4>
    </div>
    <div>
         <a href="{{ route ('suppliers.index')}}" class="btn btn-info">POWRÓT</a>
    </div>

    <div>
        <form  method="POST" class="row g-3">
            {{ csrf_field() }}

            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
            <input type="hidden" name="id " value= {{ $supplier->id}}>

            <div>
                CZY USUNĄĆ TEN REKORD?
            </div>
        <div>
            <button class="btn btn-danger" formaction="{{ route ('suppliers.destroy',[$supplier->id,'destroy']) }}" type="submit">TAK</button>
            <button class="btn btn-warning" formaction="{{ route ('suppliers.index')}}" type="submit" formmethod="GET">NIE</button>
            <button class="btn btn-dark" formaction="{{ route ('suppliers.edit', [$supplier->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
            </div>
        </form>
    </div>

    <div class="col-6">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" colspan="2">DANE DOSTAWCY</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>NAME:</td>
                    <td>{{ $supplier->name }}</td>
                </tr>

                <tr>
                    <td class="col">ADDRESS:</td>
                    <td>{{ $supplier->address }}</td>
                </tr>

                <tr>
                    <td>POSTAL CODE:</td>
                    <td>{{ $supplier->postalcode }}</td>
                </tr>

                <tr>
                    <td>CITY:</td>
                    <td>{{ $supplier->city }}</td>
                </tr>

                <tr>
                    <td>REGION:</td>
                    <td>{{ $supplier->region }}</td>
                </tr>

                <tr>
                    <td>COUNTRY:</td>
                    <td>{{ $supplier->country }}</td>
                </tr>

                <tr>
                    <td>EMAIL:</td>
                    <td>{{ $supplier->email }}</td>
                </tr>


            </tbody>
        </table>
    </div>

</div>
@endsection
