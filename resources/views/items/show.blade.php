@extends('templates.template')
@section('title_main')
    ARGENTUM  - COSTCENTERS
@endsection

@section('content')

<div class="row gy-3">
    <div>
        <h4>COSTCENTER</h4>
    </div>
    <div>
        <a href="{{ route ('costcenters.index')}}" class="btn btn-info">POWRÓT</a>
    </div>
    <div>
        <form  method="POST">
            {{ csrf_field() }}

            <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
            <input type="hidden" name="id " value= {{ $costcenter->id}}>
            <div>
                <button class="btn btn-dark" formaction="{{ route ('costcenters.edit', [$costcenter->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DANE MPK</th>
                </tr>
            </thead>
            <tbody>

                <tr scorp="row">
                    <tr>
                        <td>NAME:</td>
                        <td>{{ $costcenter->name }}</td>
                    </tr>

                    <tr>
                        <td>CODE:</td>
                        <td>{{ $costcenter->code }}</td>
                    </tr>


                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
