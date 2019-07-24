<section id="start" class="container fh-jumbo w-full flex flex-wrap">
  <div class="w-full lg:w-3/5 flex items-center">
    <div class="pr-6 sm:pr-12 pb-8 sm:pb-12">
      <span class="fh-dash-x"></span>
      <h2 class="my-4 sm:my-6 lg:my-8">{!! $jumbotron['heading'] !!}</h2>
      <p>{!! $jumbotron['text'] !!}</p>
    </div>
  </div>
  <div class="w-full lg:w-2/5 aspect-ratio-box aspect-ratio-16x9">
    <div
      class="aspect-ratio-box-inner bg-center bg-cover"
      style="background-image: url('{{ $jumbotron['image'] }}');">
    </div>
  </div>
</section>