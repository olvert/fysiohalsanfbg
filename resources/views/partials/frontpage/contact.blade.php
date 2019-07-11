<section id="bokning" class="bg-blue-lightest my-0">
  <div class="container py-24">
    <div class="w-1/2">
      <div class="flex items-center mb-12">
        <span class="fh-dash-y"></span>
        <h2 class="ml-8">{!! $contact['heading'] !!}</h2>
      </div>

      <div>
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
    </div>
  </div>
</section>