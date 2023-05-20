@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

<style> 

  svg  {

    max-width:14px !important;
    max-height: 14px !important;
   }


  </style>

@section('content')

    <h4>SUPPLIERS</h4>
    <div>
      <a href="{{ route ('suppliers.create')}}">DODAJ NOWEGO</a>
    </div>
    <div>
        <table>
            <tr>
              <th>NAME</th>
              <th>ADDRESS</th>
              <th>POSTAL CODE</th>
              <th>CITY</th>
              <th>REGION</th>
              <th>COUNTRY</th>
              <th>EMAIL</th>
            </tr>
    
            @foreach ($suppliers as $supplier)
            <tr>
              <td>{{ $supplier->name }}</td>
              <td>{{ $supplier->address }}</td>
              <td>{{ $supplier->postalcode }}</td>
              <td>{{ $supplier->city }}</td>
              <td>{{ $supplier->region }}</td>
              <td>{{ $supplier->country }}</td>
              <td>{{ $supplier->email }}</td>
              <td><a href= {{route ('suppliers.show',[$supplier->id]) }}>S</a></td>
              <td><a href= {{route ('suppliers.edit',[$supplier->id,'edit']) }}>E</a></td>
              <td><a href= {{route ('suppliers.destroy',[$supplier->id,'destroy']) }}>D</a></td>
            </tr>
            @endforeach
        </table>
        
        <div>
          <br>  
        </div>

          <div class="pagination" >
            {{ $suppliers->links()}}
          </div>
      </div>

@endsection