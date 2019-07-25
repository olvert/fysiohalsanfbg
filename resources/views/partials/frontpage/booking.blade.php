<section id="bokning" class="bg-blue-lightest mb-0">
  <div class="container pb-8">
    <div class="w-full lg:w-4/5 py-12 sm:py-20 lg:py-24">
      <div class="flex items-center justify-between mb-8 sm:mb-12">
        <div class="flex items-center">
          <span class="fh-dash-y"></span>
          <h2 class="ml-6 sm:ml-8">{!! $booking['heading'] !!}</h2>
        </div>
        <a
          class="fh-book-button bg-blue-light text-lg sm:text-xl lg:text-2xl text-black no-underline font-playfair px-6 sm:px-8 py-3 sm:py-4 flex items-center"
          href="{{ $book_button['link'] }}"
          target="_blank"
        >
          <span>{{ $book_button['text'] }}</span>
          <img class="w-5 ml-3 sm:ml-4" src="@asset('images/icons/external-link.svg')">
        </a>
      </div>

      <div>
        @foreach ($booking['blocks'] as $block)
          <div class="mb-8 sm:mb-12">
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