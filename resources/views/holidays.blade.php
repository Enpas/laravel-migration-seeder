@extends('layouts.main')

@section('content')
    
  <section class="container text-center">

    <h1 class="my-4">Vacanze Disponibili</h1>

    <table class="table">

      <thead>
        <tr>
          <th scope="col">Ref</th>
          <th scope="col">Nome</th>
          <th scope="col">Tipo</th>
          <th scope="col">Partenza</th>
          <th scope="col">Durata</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($holidays as $holiday)
        <tr>
          <td>{{ $holiday['reference'] }}</td>
          <td>{{ $holiday['name'] }}</td>
          <td>{{ $holiday['type'] }}</td>
          <td>{{ $holiday['departure'] }}</td>
          <td>{{ $holiday['days'] }} giorni</td>
          <td>€{{ $holiday['price'] }}</td>
        </tr>
        @endforeach
      </tbody>

    </table>

  </section>

@endsection