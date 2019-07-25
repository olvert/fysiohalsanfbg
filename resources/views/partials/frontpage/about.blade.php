<section id="om-mig" class="container fh-about w-full flex flex-col-reverse lg:flex-row pt-12 sm:pt-24">
  <div class="w-full lg:w-2/5 aspect-ratio-box aspect-ratio-3x4 lg:aspect-ratio-16x9">
    <div
      class="aspect-ratio-box-inner bg-top lg:bg-center bg-cover"
      style="background-image: url('{{ $about['image'] }}');">
    </div>
  </div>
  <div class="w-full lg:w-3/5 flex items-center">
    <div class="lg:pl-16 pb-8 sm:pb-12">
      <span class="fh-dash-x"></span>
      <h2 class="my-4 sm:my-6 lg:my-8">{!! $about['heading'] !!}</h2>
      <p>{!! $about['text'] !!}</p>
    </div>
  </div>
</section>