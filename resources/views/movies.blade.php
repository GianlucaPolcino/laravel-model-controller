@extends('layout.main')

@section('content')
<h1 class="text-center py-3">
    Film in Database:
</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Titolo Originale</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Data</th>
        <th scope="col">Voto</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($movies as $movie)
      <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->title}}</td>
        <td>{{$movie->original_title}}</td>
        <td>{{$movie->nationality}}</td>
        <td>{{$movie->date}}</td>
        <td>{{$movie->vote}}</td>
      </tr>
      @empty
          
      @endforelse
    </tbody>
  </table>
@endsection
