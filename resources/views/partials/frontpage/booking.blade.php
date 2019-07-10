<section id="bokning" class="bg-blue-lightest mb-0">
  <div class="container pb-8">
    <div class="w-4/5 p-24">
      <div class="flex items-center mb-12">
        <span class="fh-dash-y"></span>
        <h2 class="ml-8">{!! $booking['heading'] !!}</h2>
      </div>

      <div>
        @foreach ($booking['blocks'] as $block)
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