<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SUPPLIERS</title>

       
    </head>
    <body >
        <h4>SUPPLIERS</h4>
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
            </tr>
            @endforeach

        </table>
    </body>
</html>
