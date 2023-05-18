@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>SUPPLIER</h4>
        <table>
            <tr>
              <td>NAME:</td>
              <td>{{ $supplier->name }}</td>
            </tr> 

            <tr>
              <td>ADDRESS:</td>
              <td>{{ $supplier->address }}</td>
            </tr> 

            <tr>
              <td>EMAIL:</td>
              <td>{{ $supplier->email }}</td>
             </tr>
        </table>
        
@endsection