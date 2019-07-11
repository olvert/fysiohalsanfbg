{{--
  Template Name: Startsida
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.frontpage.jumbotron', [$jumbotron])
    @include('partials.frontpage.rehab', [$rehab])
    @include('partials.frontpage.treatment', [$treatment])
    @include('partials.frontpage.about', [$about])
    @include('partials.frontpage.booking', [$booking])
    @include('partials.fullwidth-image', ['img' => $fullwidth_image])
    @include('partials.frontpage.contact', [$contact])
    @include('partials.frontpage.caret')
  @endwhile
@endsection
