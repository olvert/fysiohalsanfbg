<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="@asset('images/icons/favicon.png')" />

  @include('partials.meta-tags')

  @php wp_head() @endphp

  @include('partials.ga', [])
</head>
