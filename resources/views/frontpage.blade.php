{{--
  Template Name: Startsida
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.frontpage.jumbotron', [$jumbotron])
    @include('partials.frontpage.rehab', [$rehab])
    @include('partials.frontpage.treatment', [$treatment])
  @endwhile
@endsection
