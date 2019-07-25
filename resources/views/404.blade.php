@extends('layouts.app')

@section('content')
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="text-center bg-blue-lightest p-12">
      <h2>404</h2>
      <p>Hoppsan, något gick fel...</p>
      <br>
      <a href="{!! site_url() !!}">Gå tillbaka</a>
    </div>
  </div>
@endsection
