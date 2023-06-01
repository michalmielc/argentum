@extends('templates.template')
@section('title_main')
    ARGENTUM  - ITEMS
@endsection

@section('content')

<div class="row gy-3">
    {{-- nagłówek --}}
    <div>
        <h4>ITEMS</h4>
    </div>


    {{-- przycisk stwórz nowego --}}
    <div>
        <a href="{{ route ('items.create')}}" class="btn btn-primary" tabindex="-1" role="button" >DODAJ NOWEGO</a>
    </div>

    <div>
        {{-- pole search --}}
        <form class="row g-3" action="{{route ('items.search')}}" method="GET">
            <div class="col-3">
                <label for="searchForText" class="visually-hidden">SZUKAJ WG NAZWY:</label>
                <input type="text" readonly class="form-control-plaintext" id="searchForText" value="SZUKAJ WG NAZW ORAZ BARCODE:">
            </div>
            <div class="col-6">
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
            liczba rekordów na stronie: {{$items->count()}}
            z  {{$items->total()}}
        </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">NAME1</th>
            <th scope="col">NAME2</th>
            <th scope="col">NAME3</th>
            <th scope="col">BARCODE</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($items as $item)
            <tr scorp="row">
              <td>{{ $item->name1 }}</td>
              <td>{{ $item->name2 }}</td>
              <td>{{ $item->name3 }}</td>
              <td>{{ $item->barcode }}</td>
              <td><a href= {{route ('items.show',[$item->id]) }}><i class="fas fa-search" ></i></a></td>
              <td><a href= {{route ('items.edit',[$item->id,'edit']) }}><i class="fas fa-pencil-alt" style="color:green;"></i></a></td>
              <td><a href= {{route ('items.delete',[$item->id,'delete']) }}><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
            </tr>
            @endforeach

        </tbody>
     </table>

         <div class="pagination" >
            {{ $items->links()}}
          </div>

    </div>
</div>
    @endsection
