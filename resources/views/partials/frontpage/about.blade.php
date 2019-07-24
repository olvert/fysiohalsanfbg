<section id="om-mig" class="container fh-about w-full flex pt-24">
  <div
    class="fh-img w-2/5 bg-cover bg-center"
    style="background-image: url('{{ $about['image'] }}');">
  </div>
  <div class="w-3/5 flex items-center">
    <div class="pl-16 pb-12">
      <span class="fh-dash-x"></span>
      <h2 class="my-8">{!! $about['heading'] !!}</h2>
      <p>{!! $about['text'] !!}</p>
    </div>
  </div>
</section>