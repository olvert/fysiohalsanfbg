<section id="behandlingsmetoder" class="fh-treatment bg-blue-lightest mb-0 pb-24">
  <div class="container">
    <div class="w-4/5">
      <div class="flex items-center justify-start mb-12">
        <span class="fh-dash-y"></span>
        <h2 class="ml-8">{!! $treatment['heading'] !!}</h2>
      </div>

      <div class="flex flex-col justify-center">
        @foreach ($treatment['blurbs'] as $blurb)
          <div class="mb-12">
            <div class="flex items-center">
              <span class="fh-dash-x-small mr-4"></span>
              <h4 class="mt-1">{!! $blurb['title'] !!}</h4>
            </div>
            <p>{!! $blurb['description'] !!}</p>
          </div>  
        @endforeach
      </div>

      <div class="aspect-ratio-box aspect-ratio-16x9">
        <div
          class="aspect-ratio-box-inner bg-center bg-cover"
          style="background-image: url('{{ $treatment['background_image'] }}');">
        </div>
      </div>
    </div>
  </div>
</section>
