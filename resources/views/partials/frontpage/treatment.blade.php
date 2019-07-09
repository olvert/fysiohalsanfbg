<section id="behandlingsmetoder" class="fh-treatment container">
  <div class="flex items-center justify-center mb-12">
    <span class="fh-dash-y"></span>
    <h2 class="ml-8">{!! $treatment['heading'] !!}</h2>
  </div>

  <div class="flex flex-col justify-center">
    @foreach ($treatment['blurbs'] as $blurb)
      <div class="w-full flex mb-8">
        <div class="w-1/3 flex flex-col justify-center text-box bg-blue-lightest px-6 py-8">
          <div class="mb-6">
            <h3 class="text-2xl mb-4">{!! $blurb['title'] !!}</h3>
            <p class="text-base">{!! $blurb['description'] !!}</p>
          </div>
        </div>
        <div
          class="fh-img w-2/3 bg-cover bg-center"
          style="background-image: url('{{ $blurb['image'] }}');"
        >
        </div>
      </div>
    @endforeach
  </div>
</section>