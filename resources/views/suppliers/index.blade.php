@extends('templates.template')
@section('title_main')
    ARGENTUM  - SUPPLIERS
@endsection

@section('content')

<div class="row gy-3">
    {{-- nagłówek --}}
    <div>
        <h4>SUPPLIERS</h4>
    </div>


    {{-- przycisk stwórz nowego --}}
    <div>
        <a href="{{ route ('suppliers.create')}}" class="btn btn-primary" tabindex="-1" role="button" >DODAJ NOWEGO</a>
    </div>

    <div>
        {{-- pole search --}}
        <form class="row g-3" action="{{route ('suppliers.search')}}" method="GET">
            <div class="col-auto">
                <label for="searchFieldName" class="visually-hidden">SZUKAJ WG NAZWY:</label>
                <input type="text" readonly class="form-control-plaintext" id="searchFieldName" value="SZUKAJ WG NAZWY:">
            </div>
            <div class="col-auto">
                <label for="searchFieldPassword" class="visually-hidden">Password</label>
                <input type="search" class="form-control" id="searchFieldPassword"name="searchField" >
            </div>
            <div class="col-auto">

            </div>
        </form>
    </div>


    {{-- lista dostawców --}}
    <div>
        <div>
            liczba rekordów na stronie: {{$suppliers->count()}}
            z  {{$suppliers->total()}}
        </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">CITY</th>
            <th scope="col">COUNTRY</th>
            <th scope="col">EMAIL</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($suppliers as $supplier)
            <tr scorp="row">
              <td >{{ $supplier->name }}</td>
              <td>{{ $supplier->city }}</td>
              <td>{{ $supplier->country }}</td>
              <td>{{ $supplier->email }}</td>
              <td><a href= {{route ('suppliers.show',[$supplier->id]) }}><i class="fas fa-search" ></i></a></td>
              <td><a href= {{route ('suppliers.edit',[$supplier->id,'edit']) }}><i i class="fas fa-pencil-alt" style="color:green;"></i></a></td>
              <td><a href= {{route ('suppliers.delete',[$supplier->id,'delete']) }}><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
            </tr>
            @endforeach

        </tbody>
     </table>

         <div class="pagination" >
            {{ $suppliers->links()}}
          </div>

    </div>
</div>
    @endsection
