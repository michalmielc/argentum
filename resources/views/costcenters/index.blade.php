@extends('templates.template')
@section('title_main')
    ARGENTUM  - COSTCENTERS
@endsection

@section('content')

<div class="row gy-3">
    {{-- nagłówek --}}
    <div>
        <h4>COSTCENTERS</h4>
    </div>


    {{-- przycisk stwórz nowego --}}
    <div>
        <a href="{{ route ('costcenters.create')}}" class="btn btn-primary" tabindex="-1" role="button" >DODAJ NOWEGO</a>
    </div>

    <div>
        {{-- pole search --}}
        <form class="row g-3" action="{{route ('costcenters.search')}}" method="GET">
            <div class="col-auto">
            <label for="searchField" class="visually-hidden">SZUKAJ WG NAZWY:</label>
            <input type="text" readonly class="form-control-plaintext" id="searchField" value="SZUKAJ WG NAZWY:">
            </div>
            <div class="col-auto">
            <label for="searchField" class="visually-hidden">Password</label>
            <input type="search" class="form-control" id="searchField"name="searchField" >
            </div>
            <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">SEARCH</button>
            </div>
        </form>
    </div>


    {{-- lista dostawców --}}
    <div>
        <div>
            liczba rekordów na stronie: {{$costcenters->count()}}
            z  {{$costcenters->total()}}
        </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">CODE</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($costcenters as $costcenter)
            <tr scorp="row">
              <td >{{ $costcenter->name }}</td>
              <td>{{ $costcenter->code }}</td>
              <td><a href= {{route ('costcenters.show',[$costcenter->id]) }}><i class="fas fa-search" ></i></a></td>
              <td><a href= {{route ('costcenters.edit',[$costcenter->id,'edit']) }}><i i class="fas fa-pencil-alt" style="color:green;"></i></a></td>
              <td><a href= {{route ('costcenters.delete',[$costcenter->id,'delete']) }}><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
            </tr>
            @endforeach

        </tbody>
     </table>

         <div class="pagination" >
            {{ $costcenters->links()}}
          </div>

    </div>
</div>
    @endsection
