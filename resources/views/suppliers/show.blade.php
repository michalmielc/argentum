@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>SUPPLIER</h4>
    <div>
        <a href="{{ route ('suppliers.index')}}" class="btn btn-info">POWRÓT</a>
    </div>

    <form  method="POST">
        {{ csrf_field() }}

        <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
        <input type="hidden" name="id " value= {{ $supplier->id}}>
         <div>
             <button class="btn btn-dark" formaction="{{ route ('suppliers.edit', [$supplier->id,'edit'])}}" type="submit" formmethod="GET">EDYCJA</button>
          </div>

       </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">DANE DOSTAWCY</th>
          </tr>
        </thead>
        <tbody>

          <tr scorp="row">
            <tr>
                <td>NAME:</td>
                <td>{{ $supplier->name }}</td>
              </tr>

              <tr>
                <td>ADDRESS:</td>
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
            </tr>

        </tbody>
     </table>


@endsection
