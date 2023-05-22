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
      <div>
        <br>
      </div>
    </div>


    <div>
      <!-- Search input -->
      <form action="{{route ('suppliers.search')}}" method="GET">
        {{-- {{ csrf_field() }}

        <input type="hidden" name ="_token" value="{{ csrf_token() }}" >
        <input type="hidden" name="id " value= {{ request('searchField')}}> --}}

        <label for="searchField">SZUKAJ WG NAZWY:</label>
        <input type="search" id="searchField" name="searchField">
        <input type="submit">
      </form>
      
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
              <td><a href= {{route ('suppliers.delete',[$supplier->id,'delete']) }}>D</a></td>
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