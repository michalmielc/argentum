@extends('templates.template')
@section('title_main')
    ARGENTUM  - STORAGEPLACES
@endsection

@section('content')

<div class="row gy-3">
    {{-- nagłówek --}}
    <div>
        <h4>STORAGEPLACES</h4>
    </div>


    {{-- przycisk stwórz nowego --}}
    <div>
        <a href="{{ route ('storageplaces.create')}}" class="btn btn-primary" tabindex="-1" role="button" >DODAJ NOWEGO</a>
    </div>

    <div>
        {{-- pole search --}}
        <form class="row g-3" action="{{route ('storageplaces.search')}}" method="GET">
            <div class="col-auto">
                <label for="searchForText" class="visually-hidden">SZUKAJ WG NAZWY:</label>
                <input type="text" readonly class="form-control-plaintext" id="searchForText" value="SZUKAJ WG NAZWY:">
            </div>
            <div class="col-auto">
                <label for="searchValue" class="visually-hidden">SEARCHBOX</label>
                <input type="search" class="form-control" id="searchValue"name="searchValue" >
            </div>
            <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">SEARCH</button>
            </div>
        </form>
    </div>


    {{-- lista dostawców --}}
    <div>
        <div>
            liczba rekordów na stronie: {{$storageplaces->count()}}
            z  {{$storageplaces->total()}}
        </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">CODE</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($storageplaces as $storageplace)
            <tr scorp="row">
              <td >{{ $storageplace->name }}</td>
              <td>{{ $storageplace->code }}</td>
              <td><a href= {{route ('storageplaces.show',[$storageplace->id]) }}><i class="fas fa-search" ></i></a></td>
              <td><a href= {{route ('storageplaces.edit',[$storageplace->id,'edit']) }}><i class="fas fa-pencil-alt" style="color:green;"></i></a></td>
              <td><a href= {{route ('storageplaces.delete',[$storageplace->id,'delete']) }}><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
            </tr>
            @endforeach

        </tbody>
     </table>

         <div class="pagination" >
            {{ $storageplaces->links()}}
          </div>

    </div>
</div>
    @endsection
