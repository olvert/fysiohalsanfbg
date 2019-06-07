<section id="behandlingsmetoder" class="fh-treatment container">
  <div class="flex items-center justify-center mb-12">
    <span class="fh-dash-y"></span>
    <h2 class="ml-8">{!! $treatment['heading'] !!}</h2>
  </div>

  <div class="flex flex-wrap justify-center">
    @foreach ($treatment['blurbs'] as $blurb)
      <div class="w-1/2 p-8">
        <div
          class="fh-img bg-cover bg-center"
          style="background-image: url('{{ $blurb['image'] }}');"
        >
        </div>
        <div class="text-box bg-blue-lightest shadow-lg w-5/6 mx-auto px-6 py-8">
          <h3 class="text-2xl mb-4">{!! $blurb['title'] !!}</h3>
          <p class="text-base">{!! $blurb['description'] !!}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>