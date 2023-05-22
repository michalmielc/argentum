@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

    <h4>SUPPLIER</h4>
    <div>
         <a href="{{ route ('suppliers.index')}}">POWRÓT</a>
    </div>

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
        </table>
        
@endsection