<section id="kontakt" class="bg-blue-lightest my-0">
  <div class="container py-24">
    <div class="flex items-center mb-12">
      <span class="fh-dash-y"></span>
      <h2 class="ml-8">{!! $contact['heading'] !!}</h2>
    </div>

    <div class="flex flex-wrap">
      <div class="w-1/2">
        @foreach ($contact['blocks'] as $block)
          <div class="mb-12">
            <div class="flex items-center">
              <span class="fh-dash-x-small mr-4"></span>
              <h4 class="mt-1">{!! $block['subheading'] !!}</h4>
            </div>
            {!! $block['text'] !!}
          </div>  
        @endforeach
      </div>
      <div class="acf-map w-1/2">
        <div class="marker" data-lat="{{ $contact['map']['lat'] }}" data-lng="{{ $contact['map']['lng'] }}"></div>
      </div>
    </div>
  </div>
</section>