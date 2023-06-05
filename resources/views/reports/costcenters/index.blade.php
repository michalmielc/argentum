@extends('templates.template')
@section('title_main')
    ARGENTUM  - REPORTS
@endsection

@section('content')

<div class="row gy-3">
    {{-- nagłówek --}}
    <div>
        <h4>REPORT ALL COSTCENTERS</h4>
    </div>
    {{-- przyciski eksportu --}}
    <div class="col 6">
            <a href="{{ route ('argentum.reports')}}" class="btn btn-info">POWRÓT</a>

        <button type="button" class="btn btn-secondary">EXPORT TO PDF</button>
        <button type="button" class="btn btn-success">EXPORT TO CSV</button>
        <button type="button" class="btn btn-dark">E MAIL</button>
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
