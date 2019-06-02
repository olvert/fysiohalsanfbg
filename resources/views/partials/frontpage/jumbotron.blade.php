<section class="container fh-jumbo w-full flex">
  <div class="w-3/5 flex items-center">
    <div class="pr-12 pb-12">
      <span class="fh-dash-x"></span>
      <h2 class="my-8">{!! $jumbotron['heading'] !!}</h2>
      <p>{!! $jumbotron['text'] !!}</p>
    </div>
  </div>
  <div
    class="fh-img w-2/5 bg-cover bg-center"
    style="background-image: url('{{ $jumbotron['image'] }}');">
  </div>
</section>