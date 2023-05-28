@extends('templates.template')
@section('title_main')
    ARGENTUM  - COSTCENTERS
@endsection

@section('content')
<div class="row gy-3">
    <div>
     <h4>DELETE COSTCENTER</h4>
    </div>
    <div>
         <a href="{{ route ('costcenters.index')}}" class="btn btn-info">POWRÓT</a>
    </div>

    <div>
        <form  method="POST" class="row g-3">
            {{ csrf_field() }}

            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
            <input type="hidden" name="id " value= {{ $costcenter->id}}>

            <div>
                CZY USUNĄĆ TEN REKORD?
            </div>
        <div>
            <button class="btn btn-danger" formaction="{{ route ('costcenters.destroy',[$costcenter->id,'destroy']) }}" type="submit">TAK</button>
            <button class="btn btn-warning" formaction="{{ route ('costcenters.index')}}" type="submit" formmethod="GET">NIE</button>
            <button class="btn btn-dark" formaction="{{ route ('costcenters.edit', [$costcenter->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
            </div>
        </form>
    </div>

    <div class="col-6">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" colspan="2">DANE MPK</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>NAME:</td>
                    <td>{{ $costcenter->name }}</td>
                </tr>

                <tr>
                    <td class="col">CODE:</td>
                    <td>{{ $costcenter->code }}</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection
