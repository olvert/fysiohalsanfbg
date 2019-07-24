<section id="rehab" class="bg-blue-lightest mb-0">
  <div class="container">
    <div class="w-full lg:w-4/5 py-12 sm:py-20 lg:py-24">
      <div class="flex items-center mb-8 sm:mb-12">
        <span class="fh-dash-y"></span>
        <h2 class="ml-6 sm:ml-8">{!! $rehab['heading'] !!}</h2>
      </div>

      <p class="mb-8 sm:mb-12">{!! $rehab['text'] !!}</p>

      <div class="aspect-ratio-box aspect-ratio-16x9">
        <div
          class="aspect-ratio-box-inner bg-center bg-cover"
          style="background-image: url('{{ $rehab['background_image'] }}');">
        </div>
      </div>
    </div>
  </div>
</section>