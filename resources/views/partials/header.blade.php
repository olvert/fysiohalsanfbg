<header class="banner">
  <div class="py-6">
    <div class="container">
      {{-- <a class="font-playfair font-black italic tracking-wide text-xl text-blue no-underline" href="{{ home_url('/') }}">
        {{ get_bloginfo('name', 'display') }}
      </a> --}}
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
