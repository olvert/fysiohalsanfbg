@php $meta_tags = App::metaTags(); @endphp

<meta property="og:url" content="{!! site_url() !!}" />
<meta property="og:title" content="{{ $meta_tags['title'] }}" />
<meta property="og:description" content="{{ $meta_tags['description'] }}" />
<meta property="og:image" content="{{ $meta_tags['image'] }}" />