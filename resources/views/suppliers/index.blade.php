@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>SUPPLIERS</h4>
    <div>
      <a href="{{ route ('suppliers.create')}}">DODAJ NOWEGO</a>
    </div>
        <table>
            <tr>
              <th>NAME</th>
              <th>ADDRESS</th>
              <th>EMAIL</th>
            </tr>
    
            @foreach ($suppliers as $supplier)
            <tr>
              <td>{{ $supplier->name }}</td>
              <td>{{ $supplier->address }}</td>
              <td>{{ $supplier->email }}</td>
              <td><a href= {{route ('suppliers.show',[$supplier->id]) }}>Podgląd</a></td>
              <td><a href= {{route ('suppliers.edit',[$supplier->id,'edit']) }}>Edycja</a></td>
              <td><a href= {{route ('suppliers.destroy',[$supplier->id,'destroy']) }}>Usuwanie</a></td>
            </tr>
            @endforeach

        </table>
@endsection