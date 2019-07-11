<section id="behandlingsmetoder" class="fh-treatment container">
  <div class="flex items-center justify-start mb-12">
    <span class="fh-dash-y"></span>
    <h2 class="ml-8">{!! $treatment['heading'] !!}</h2>
  </div>

  <div class="flex flex-col justify-center">
    @foreach ($treatment['blurbs'] as $blurb)
      <div class="w-full flex mb-8">
        <div class="w-1/3 flex flex-col justify-center text-box bg-blue-lightest p-8">
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <span class="fh-dash-x-small mr-4"></span>
              <h4 class="mt-1">{!! $blurb['title'] !!}</h4>
            </div>
            <p>{!! $blurb['description'] !!}</p>
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
