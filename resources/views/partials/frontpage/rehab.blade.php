<section id="rehab" class="bg-blue-lightest mb-0 pb-24">
  <div class="container pb-8">
    <div class="w-4/5 py-24">
      <div class="flex items-center mb-12">
        <span class="fh-dash-y"></span>
        <h2 class="ml-8">{!! $rehab['heading'] !!}</h2>
      </div>
      
      <p class="mb-12">{!! $rehab['text'] !!}</p>

      <div class="aspect-ratio-box aspect-ratio-16x9">
        <div
          class="aspect-ratio-box-inner bg-center bg-cover"
          style="background-image: url('{{ $rehab['background_image'] }}');">
        </div>
      </div>
    </div>
  </div>
</section>